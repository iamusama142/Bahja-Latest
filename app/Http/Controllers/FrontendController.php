<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Product;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class FrontendController extends Controller
{

    public function index(Request $request)
    {

        return redirect()->route($request->user()->role);

    }

    public function home()
    {
        
        $featured = Product::where('status', 'active')->where('is_featured', 1)->groupBy('title')->orderBy('price', 'DESC')->limit(2)->get();

        $banners = Banner::where('status', 'active')->limit(3)->orderBy('id', 'DESC')->get();

        $products = Product::where('status', 'active')->where('productType', 'bestseller')->groupBy('title')->orderBy('id', 'DESC')->limit(8)->get();

        $category = Category::where('status', 'active')->where('is_parent', 1)->where('category_show', 'yes')->orderBy('title', 'ASC')->get();

        return view('frontend.index')

            ->with('featured', $featured)

            ->with('banners', $banners)

            ->with('product_lists', $products)

            ->with('category_lists', $category);

    }

    public function aboutUs()
    {

        return view('frontend.pages.about-us');

    }

    public function orderConfirm()
    {

        return view('order-confirm');

    }

    public function contact()
    {

        return view('frontend.pages.contact');

    }

    public function tc()
    {

        return view('frontend.pages.tc');

    }

    public function faq()
    {

        return view('frontend.pages.faq');

    }

    public function productDetail($slug)
    {

        $product_detail = Product::getProductBySlug($slug);

        return view('frontend.pages.product_detail')->with('product_detail', $product_detail);

    }

    public function productGrids()
    {
        $slug = '';
        $sub_slug = '';

        $products = Product::query();

        if (!empty($_GET['category'])) {

            $slugs = explode(',', $_GET['category']);

            $cat_ids = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();

            $products->whereIn('cat_id', $cat_ids);

            $slug = $_GET['category'];

            // return $products;

        }

        
        if (!empty($_GET['subcategory'])) {

            $slugs = explode(',', $_GET['subcategory']);

            $cat_ids = Category::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();

            $products->whereIn('child_cat_id', $cat_ids);

            $sub_slug = $_GET['subcategory'];

            // return $products;

        }

        if (!empty($_GET['size'])) {

            $slugs = explode(',', $_GET['size']);

            $products->whereIn('size', $slugs);

        }

        if (!empty($_GET['brand'])) {

            $slugs = explode(',', $_GET['brand']);

            $brand_ids = Brand::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();

            $brand_ids;

            $products->whereIn('brand_id', $brand_ids);

        }

        if (!empty($_GET['sortBy'])) {

            if ($_GET['sortBy'] == 'title') {

                $products = $products->where('status', 'active')->orderBy('title', 'ASC');

            }

            if ($_GET['sortBy'] == 'price1') {

                // $products = $products->orderBy('price', 'ASC');
                $products = $products->orderBy('discount', 'ASC'); // now discount is discounted price

            }
            if ($_GET['sortBy'] == 'price2') {

                // $products = $products->orderBy('price', 'DESC');
                $products = $products->orderBy('discount', 'DESC'); // now discount is discounted price

            }

        }

        if (!empty($_GET['price'])) {

            $price = explode('-', $_GET['price']);

            // return $price;

            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));

            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));

            $products->whereBetween('price', $price);

        }

        $recent_products = Product::where('status', 'active')->groupBy('title')->orderBy('id', 'DESC')->limit(3)->get();

        // Sort by number

        if (!empty($_GET['show'])) {

            $products = $products->where('status', 'active')->paginate($_GET['show']);

        } else {

            $products = $products->where('status', 'active')->groupBy('title')->paginate(12);

        }

        // Sort by name , price, category

        return view('frontend.pages.product-grids')->with('products', $products)->with('recent_products', $recent_products)->with('slug', $slug)->with('sub_slug', $sub_slug);

    }

    public function productLists()
    {

        $products = Product::query();

        $slug = '';

        if (!empty($_GET['category'])) {

            $slug = explode(',', $_GET['category']);

            // dd($slug);

            $cat_ids = Category::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();

            // dd($cat_ids);

            $products->whereIn('cat_id', $cat_ids)->paginate;

            // return $products;

        }

        if (!empty($_GET['brand'])) {

            $slugs = explode(',', $_GET['brand']);

            $brand_ids = Brand::select('id')->whereIn('slug', $slugs)->pluck('id')->toArray();

            return $brand_ids;

            $products->whereIn('brand_id', $brand_ids);

        }

        if (!empty($_GET['sortBy'])) {

            if ($_GET['sortBy'] == 'title') {

                $products = $products->where('status', 'active')->orderBy('title', 'ASC');

            }

            if ($_GET['sortBy'] == 'price') {

                $products = $products->orderBy('price', 'ASC');

            }

        }

        if (!empty($_GET['price'])) {

            $price = explode('-', $_GET['price']);

            // return $price;

            // if(isset($price[0]) && is_numeric($price[0])) $price[0]=floor(Helper::base_amount($price[0]));

            // if(isset($price[1]) && is_numeric($price[1])) $price[1]=ceil(Helper::base_amount($price[1]));

            $products->whereBetween('price', $price);

        }

        $recent_products = Product::where('status', 'active')->groupBy('title')->orderBy('id', 'DESC')->limit(3)->get();

        // Sort by number

        if (!empty($_GET['show'])) {

            $products = $products->where('status', 'active')->paginate($_GET['show']);

        } else {

            $products = $products->where('status', 'active')->paginate(6);

        }

        // Sort by name , price, category

        return view('frontend.pages.product-lists')->with('products', $products)->with('recent_products', $recent_products)->with('slug', $slug);

    }

    public function productFilter(Request $request)
    {

        $data = $request->all();
        // return $data;

        $showURL = "";

        if (!empty($data['show'])) {

            $showURL .= '&show=' . $data['show'];

        }

        $sortByURL = '';

        if (!empty($data['sortBy'])) {

            $sortByURL .= '&sortBy=' . $data['sortBy'];

        }

        $sizeURL = '';

        if (!empty($data['size'])) {

            $slug = implode(',', $data['size']);

            $sizeURL .= '&size=' . $slug;

        }

        $catURL = "";

        if (!empty($data['category'])) {

            foreach ($data['category'] as $category) {

                if (empty($catURL)) {

                    $catURL .= '&category=' . $category;

                } else {

                    $catURL .= ',' . $category;

                }

            }

        }

        $subCatURL = "";

        if (!empty($data['subcategory'])) {

            foreach ($data['subcategory'] as $category) {

                if (empty($subCatURL)) {

                    $subCatURL .= '&subcategory=' . $category;

                } else {

                    $subCatURL .= ',' . $category;

                }

            }

        }

        $brandURL = "";

        if (!empty($data['brand'])) {

            foreach ($data['brand'] as $brand) {

                if (empty($brandURL)) {

                    $brandURL .= '&brand=' . $brand;

                } else {

                    $brandURL .= ',' . $brand;

                }

            }

        }

        $priceRangeURL = "";

        if (!empty($data['price_range'])) {

            $priceRangeURL .= '&price=' . $data['price_range'];

        }

        return redirect()->route('product-grids', $catURL . $subCatURL . $brandURL . $priceRangeURL . $showURL . $sortByURL . $sizeURL);

    }

    public function productSearch(Request $request)
    {
        $slug = '';
        $sub_slug = '';
        $recent_products = Product::where('status', 'active')->groupBy('title')->orderBy('id', 'DESC')->limit(3)->get();

        $products = Product::orwhere('title', 'like', '%' . $request->search . '%')

            ->orwhere('slug', 'like', '%' . $request->search . '%')

            ->orwhere('description', 'like', '%' . $request->search . '%')

            ->orwhere('summary', 'like', '%' . $request->search . '%')

            ->orwhere('price', 'like', '%' . $request->search . '%')

            ->orderBy('id', 'DESC')

            ->paginate('9');

        return view('frontend.pages.product-grids')->with('products', $products)->with('recent_products', $recent_products)->with('slug', $slug)->with('sub_slug', $sub_slug);

    }

    public function productBrand(Request $request)
    {
        $slug = '';
        $products = Brand::getProductByBrand($request->slug);

        $recent_products = Product::where('status', 'active')->groupBy('title')->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.pages.product-grids')->with('products', $products->products)->with('slug', $slug);

    }

    public function productCat(Request $request)
    {
        $slug = $request->slug;
        $sub_slug = '';
        $products = Category::getProductByCat($request->slug);
        $recent_products = Product::where('status', 'active')->groupBy('title')->orderBy('id', 'DESC')->paginate(9);
        return view('frontend.pages.product-grids')->with('products', $products->products)->with('recent_products', $recent_products)->with('slug', $slug)->with('sub_slug', $sub_slug);
        // return view('frontend.pages.product-grids')->with('products',$products->products)->with('recent_products',$recent_products);

    }

    public function productSubCat(Request $request)
    {

        $slug= $request->slug;
        $sub_slug=$request->sub_slug;
        $products = Category::getProductBySubCat($request->sub_slug);

        return view('frontend.pages.product-grids')->with('products', $products->sub_products)->with('slug', $slug)->with('sub_slug', $sub_slug);

    }

    public function blog()
    {

        $post = Post::query();

        if (!empty($_GET['category'])) {

            $slug = explode(',', $_GET['category']);

            $cat_ids = PostCategory::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();

            return $cat_ids;

            $post->whereIn('post_cat_id', $cat_ids);

        }

        if (!empty($_GET['tag'])) {

            $slug = explode(',', $_GET['tag']);

            $tag_ids = PostTag::select('id')->whereIn('slug', $slug)->pluck('id')->toArray();

            $post->where('post_tag_id', $tag_ids);

        }

        if (!empty($_GET['show'])) {

            $post = $post->where('status', 'active')->orderBy('id', 'DESC')->paginate($_GET['show']);

        } else {

            $post = $post->where('status', 'active')->orderBy('id', 'DESC')->paginate(9);

        }

        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.pages.blog')->with('posts', $post)->with('recent_posts', $rcnt_post);

    }

    public function blogDetail($slug)
    {

        $post = Post::getPostBySlug($slug);

        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.pages.blog-detail')->with('post', $post)->with('recent_posts', $rcnt_post);

    }

    public function blogSearch(Request $request)
    {

        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();

        $posts = Post::orwhere('title', 'like', '%' . $request->search . '%')

            ->orwhere('quote', 'like', '%' . $request->search . '%')

            ->orwhere('summary', 'like', '%' . $request->search . '%')

            ->orwhere('description', 'like', '%' . $request->search . '%')

            ->orwhere('slug', 'like', '%' . $request->search . '%')

            ->orderBy('id', 'DESC')

            ->paginate(8);

        return view('frontend.pages.blog')->with('posts', $posts)->with('recent_posts', $rcnt_post);

    }

    public function blogFilter(Request $request)
    {

        $data = $request->all();

        $catURL = "";

        if (!empty($data['category'])) {

            foreach ($data['category'] as $category) {

                if (empty($catURL)) {

                    $catURL .= '&category=' . $category;

                } else {

                    $catURL .= ',' . $category;

                }

            }

        }

        $tagURL = "";

        if (!empty($data['tag'])) {

            foreach ($data['tag'] as $tag) {

                if (empty($tagURL)) {

                    $tagURL .= '&tag=' . $tag;

                } else {

                    $tagURL .= ',' . $tag;

                }

            }

        }

        return redirect()->route('blog', $catURL . $tagURL);

    }

    public function blogByCategory(Request $request)
    {

        $post = PostCategory::getBlogByCategory($request->slug);

        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.pages.blog')->with('posts', $post->post)->with('recent_posts', $rcnt_post);

    }

    public function blogByTag(Request $request)
    {

        $post = Post::getBlogByTag($request->slug);

        $rcnt_post = Post::where('status', 'active')->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.pages.blog')->with('posts', $post)->with('recent_posts', $rcnt_post);

    }

    // Login

    public function login()
    {

        return view('frontend.pages.login');

    }

    public function loginSubmit(Request $request)
    {

        $data = $request->all();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active'])) {

            $user = Auth::user();

            Session::put('user', $user->email);

            request()->session()->flash('success', 'Successfully login');

            if ($user->role == 'admin') {

                return redirect()->route('admin');

            } else {

                $cartDetails = Cart::where('user_id', $user->id)->first();

                if ($cartDetails == null) {

                    return redirect()->route('home');

                } else {

                    return redirect()->route('checkout');

                }

            }

        } else {

            request()->session()->flash('error', 'Invalid email or password please try again!');

            return redirect()->back();

        }

    }

    public function logout()
    {

        Session::forget('user');

        Auth::logout();

        request()->session()->flash('success', 'Logout successfully');

        return back();

    }

    public function register()
    {

        return view('frontend.pages.register');

    }

    public function registerSubmit(Request $request)
    {

        $this->validate($request, [

            'name' => 'string|required|min:2',

            'phone' => 'required',

            'email' => 'string|required|unique:users,email',

            'password' => 'required|min:6|confirmed',

        ]);

        $data = $request->all();

        $check = $this->create($data);

        Session::put('user', $data['email']);

        if ($check) {

            Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 'active']);

            request()->session()->flash('success', 'Successfully registered');

            return redirect()->route('home');

        } else {

            request()->session()->flash('error', 'Please try again!');

            return back();

        }

    }

    public function create(array $data)
    {

        return User::create([

            'name' => $data['name'],

            'email' => $data['email'],

            'password' => Hash::make($data['password']),

            'phone' => $data['phone'],

            'status' => 'active',

        ]);

    }

    // Reset password

//    public function showResetForm(){

//        return view('auth.passwords.old-reset');

//    }

    public function showResetPasswordForm($token)
    {

        return view('auth.passwords.reset', ['token' => $token]);

    }

}
