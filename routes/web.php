<?php



use Illuminate\Support\Facades\Route;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



Route::group(['prefix' => 'admin'], function () {

    Auth::routes(['register'=>false]);

});





Route::get('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);



Route::get('user/login',[\App\Http\Controllers\FrontendController::class, 'login'])->name('login.form');

Route::post('user/login',[\App\Http\Controllers\FrontendController::class, 'loginSubmit'])->name('login.submit');

Route::get('user/logout',[\App\Http\Controllers\FrontendController::class, 'logout'])->name('user.logout');



Route::get('user/register',[\App\Http\Controllers\FrontendController::class, 'register'])->name('register.form');

Route::post('user/register',[\App\Http\Controllers\FrontendController::class, 'registerSubmit'])->name('register.submit');

// Reset password

//Route::post('password-reset', [\App\Http\Controllers\FrontendController::class, 'showResetForm'])->name('password.reset');



Route::get('reset-password/{token}', [\App\Http\Controllers\FrontendController::class, 'showResetPasswordForm'])->name('password.reset');



// Socialite

Route::get('login/{provider}/', [\App\Http\Controllers\Auth\LoginController::class, 'redirect'])->name('login.redirect');

Route::get('login/{provider}/callback/', [\App\Http\Controllers\Auth\LoginController::class, 'Callback'])->name('login.callback');

Route::get('/',[\App\Http\Controllers\FrontendController::class, 'home'])->name('home');

// Frontend Routes

Route::get('/home', [\App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/about-us',[\App\Http\Controllers\FrontendController::class, 'aboutUs'])->name('about-us');

Route::get('/contact',[\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

Route::post('/contact/message',[\App\Http\Controllers\MessageController::class, 'store'])->name('contact.store');

Route::get('product-detail/{slug}',[\App\Http\Controllers\FrontendController::class, 'productDetail'])->name('product-detail');

Route::post('/product/search',[\App\Http\Controllers\FrontendController::class, 'productSearch'])->name('product.search');

Route::get('/product-cat/{slug}',[\App\Http\Controllers\FrontendController::class, 'productCat'])->name('product-cat');

Route::get('/product-sub-cat/{slug}/{sub_slug}',[\App\Http\Controllers\FrontendController::class, 'productSubCat'])->name('product-sub-cat');

Route::get('/product-brand/{slug}',[\App\Http\Controllers\FrontendController::class, 'productBrand'])->name('product-brand');



// Cart section

Route::get('/add-to-cart/{slug}', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('add-to-cart');//->middleware('user');

Route::post('/add-to-cart', [\App\Http\Controllers\CartController::class, 'singleAddToCart'])->name('single-add-to-cart');//->middleware('user');

Route::get('cart-delete/{id}', [\App\Http\Controllers\CartController::class, 'cartDelete'])->name('cart-delete');

Route::post('cart-update', [\App\Http\Controllers\CartController::class, 'cartUpdate'])->name('cart.update');

Route::get('/cart',function(){

    return view('frontend.pages.cart');}

)->name('cart');



// Wishlist

Route::get('/wishlist',function(){

    return view('frontend.pages.wishlist');

})->name('wishlist');



Route::get('/checkout',[\App\Http\Controllers\CartController::class, 'checkout'])->name('checkout')->middleware('user');
Route::get('/gcheckout',[\App\Http\Controllers\CartController::class, 'checkout'])->name('guest.checkout');//->middleware('user');

Route::get('/order-confirm',[\App\Http\Controllers\FrontendController::class, 'orderConfirm'])->name('order-confirm');





Route::get('/wishlist/{slug}',[\App\Http\Controllers\WishlistController::class, 'wishlist'])->name('add-to-wishlist')->middleware('user');

Route::get('wishlist-delete/{id}',[\App\Http\Controllers\WishlistController::class, 'wishlistDelete'])->name('wishlist-delete');

Route::post('cart/order',[\App\Http\Controllers\OrderController::class, 'store'])->name('cart.order');

Route::get('order/pdf/{id}',[\App\Http\Controllers\OrderController::class, 'pdf'])->name('order.pdf');

Route::get('/income/{year?}/{type?}/{from?}/{to?}',[\App\Http\Controllers\OrderController::class, 'incomeChart'])->name('product.order.income');

// not use // Route::get('/user/chart','AdminController@userPieChart')->name('user.piechart');

Route::get('/product-grids',[\App\Http\Controllers\FrontendController::class, 'productGrids'])->name('product-grids');

Route::get('/product-lists',[\App\Http\Controllers\FrontendController::class, 'productLists'])->name('product-lists');

Route::match(['get','post'],'/filter',[\App\Http\Controllers\FrontendController::class, 'productFilter'])->name('shop.filter');

// Order Track

Route::get('/product/track', [\App\Http\Controllers\OrderController::class, 'orderTrack'])->name('order.track');

Route::post('product/track/order',[\App\Http\Controllers\OrderController::class, 'productTrackOrder'])->name('product.track.order');

// Blog

Route::get('/blog',[\App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');

Route::get('/blog-detail/{slug}',[\App\Http\Controllers\FrontendController::class, 'blogDetail'])->name('blog.detail');

Route::get('/blog/search',[\App\Http\Controllers\FrontendController::class, 'blogSearch'])->name('blog.search');

Route::post('/blog/filter',[\App\Http\Controllers\FrontendController::class, 'blogFilter'])->name('blog.filter');

Route::get('blog-cat/{slug}',[\App\Http\Controllers\FrontendController::class, 'blogByCategory'])->name('blog.category');

Route::get('blog-tag/{slug}',[\App\Http\Controllers\FrontendController::class, 'blogByTag'])->name('blog.tag');



// NewsLetter

Route::post('/subscribe',[\App\Http\Controllers\FrontendController::class, 'subscribe'])->name('subscribe');



// Product Review

//Route::resource('/review',\App\Http\Controllers\ProductReviewController::class);

//Route::post('product/{slug}/review',[\App\Http\Controllers\ProductReviewController::class, 'store'])->name('review.store');



// Post Comment

Route::post('post/{slug}/comment',[\App\Http\Controllers\PostCommentController::class, 'store'])->name('post-comment.store');

//Route::resource('/comment', \App\Http\Controllers\ProductReviewController::class);

// Coupon

Route::post('/coupon-store',[\App\Http\Controllers\CouponController::class, 'couponStore'])->name('coupon-store');

// Payment

Route::get('payment', [\App\Http\Controllers\PayPalController::class, 'payment'])->name('payment');

Route::get('cancel', [\App\Http\Controllers\PayPalController::class, 'cancel'])->name('payment.cancel');

Route::get('payment/success', [\App\Http\Controllers\PayPalController::class, 'success'])->name('payment.success');





// Backend section start



Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){

    Route::get('/', [ \App\Http\Controllers\AdminController::class, 'index' ])->name('admin');

    Route::get('/file-manager',function(){

        return view('backend.layouts.file-manager');

    })->name('file-manager');

    // user route

    Route::resource('users',\App\Http\Controllers\UsersController::class);

    //search backend order list

    
   
    Route::get('live_search', [\App\Http\Controllers\OrderController::class, 'orderSearch'])->name('live_search');
    Route::get('product-report', [\App\Http\Controllers\OrderController::class, 'highestProductSell'])->name('product-report');

    Route::post('productReport-search', [\App\Http\Controllers\OrderController::class, 'highestProductSearch'])->name('productReport-search');
    Route::get('order-report', [\App\Http\Controllers\OrderController::class, 'selsOrderReport'])->name('order-report');

    // Banner

    Route::resource('banner',\App\Http\Controllers\BannerController::class);

    //area route
    Route::resource('/area',\App\Http\Controllers\AreaController::class);
    
    Route::get('/areadelete/{id}',[\App\Http\Controllers\AreaController::class,'areadelete']);

    // Brand

    Route::resource('brand',\App\Http\Controllers\BrandController::class);

    // Profile

    Route::get('/profile', [ \App\Http\Controllers\AdminController::class, 'profile' ])->name('admin-profile');

    Route::post('/profile/{id}', [ \App\Http\Controllers\AdminController::class, 'profileUpdate' ])->name('profile-update');

    // Category

    Route::resource('/category',\App\Http\Controllers\CategoryController::class);

    // Product

    Route::resource('/product',\App\Http\Controllers\ProductController::class);

    // Ajax for sub category

    Route::post('/category/{id}/child', [ \App\Http\Controllers\CategoryController::class, 'getChildByParent' ]);

    // POST category

    Route::resource('/post-category',\App\Http\Controllers\PostCategoryController::class);

    // Post tag

    Route::resource('/post-tag',\App\Http\Controllers\PostTagController::class);

    // Post

    Route::resource('/post',\App\Http\Controllers\PostController::class);

    // Message

    Route::resource('/message',\App\Http\Controllers\MessageController::class);

    Route::get('/message/five', [ \App\Http\Controllers\MessageController::class, 'messageFive' ])->name('messages.five');



    // Order

    Route::resource('/order',\App\Http\Controllers\OrderController::class);
    Route::get('/error-order',[ \App\Http\Controllers\OrderController::class, 'error_order' ])->name('errororder');
    Route::get('delete/{id}',[ \App\Http\Controllers\OrderController::class, 'deleteOrder' ])->name('delete');
    Route::post('datesearch',[ \App\Http\Controllers\OrderController::class, 'dateFilterOrder' ])->name('datesearch');

    // Shipping

    Route::resource('/shipping',\App\Http\Controllers\ShippingController::class);

    // Coupon

    Route::resource('/coupon',\App\Http\Controllers\CouponController::class);

    // Settings

    Route::get('settings', [ \App\Http\Controllers\AdminController::class, 'settings' ])->name('settings');

    Route::post('setting/update', [ \App\Http\Controllers\AdminController::class, 'settingsUpdate' ])->name('settings.update');



    // Notification

    Route::get('/notification/{id}', [ \App\Http\Controllers\NotificationController::class, 'show' ])->name('admin.notification');

    Route::get('/notifications', [ \App\Http\Controllers\NotificationController::class, 'index' ])->name('all.notification');

    Route::delete('/notification/{id}', [ \App\Http\Controllers\NotificationController::class, 'delete' ])->name('notification.delete');

    // Password Change

    Route::get('change-password',  [ \App\Http\Controllers\AdminController::class, 'changePassword' ])->name('change.password.form');

    Route::post('change-password',  [ \App\Http\Controllers\AdminController::class, 'changPasswordStore' ])->name('change.password');

});



// User section start

Route::group(['prefix'=>'/user','middleware'=>['user']],function(){

    Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])->name('user');

    // Profile

    Route::get('/profile',[\App\Http\Controllers\HomeController::class, 'profile'])->name('user-profile');

    Route::post('/profile/{id}',[\App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('user-profile-update');

    //  Order

    Route::get('/order',[\App\Http\Controllers\HomeController::class, 'orderIndex'])->name('user.order.index');

    Route::get('/order/show/{id}',[\App\Http\Controllers\HomeController::class, 'orderShow'])->name('user.order.show');

    Route::delete('/order/delete/{id}',[\App\Http\Controllers\HomeController::class, 'userOrderDelete'])->name('user.order.delete');

    // Product Review

//    Route::get('/user-review','HomeController@productReviewIndex')->name('user.productreview.index');

//    Route::delete('/user-review/delete/{id}','HomeController@productReviewDelete')->name('user.productreview.delete');

//    Route::get('/user-review/edit/{id}','HomeController@productReviewEdit')->name('user.productreview.edit');

//    Route::patch('/user-review/update/{id}','HomeController@productReviewUpdate')->name('user.productreview.update');



    // Post comment

    Route::get('user-post/comment',[\App\Http\Controllers\HomeController::class, 'userComment'])->name('user.post-comment.index');

    Route::delete('user-post/comment/delete/{id}',[\App\Http\Controllers\HomeController::class, 'userCommentDelete'])->name('user.post-comment.delete');

    Route::get('user-post/comment/edit/{id}',[\App\Http\Controllers\HomeController::class, 'userCommentEdit'])->name('user.post-comment.edit');

    Route::patch('user-post/comment/udpate/{id}',[\App\Http\Controllers\HomeController::class, 'userCommentUpdate'])->name('user.post-comment.update');



    // Password Change

    Route::get('change-password', [\App\Http\Controllers\HomeController::class, 'changePassword'])->name('user.change.password.form');

    Route::post('change-password', [\App\Http\Controllers\HomeController::class, 'changPasswordStore'])->name('change.password');



    //address

    Route::resource('/address',\App\Http\Controllers\AddressController::class);

    Route::get('getarea/{id?}',[\App\Http\Controllers\AddressController::class,'getareaData'])->name('getarea');

});



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {

    \UniSharp\LaravelFilemanager\Lfm::routes();

});



Route::get('/terms-of-use',[\App\Http\Controllers\FrontendController::class, 'tc'])->name('tc');

Route::get('/faqs',[\App\Http\Controllers\FrontendController::class, 'faq'])->name('faq');



Route::get('/clear-cache', function() {

   Artisan::call('cache:clear');
   Artisan::call('view:clear');
   Artisan::call('route:clear');
   Artisan::call('config:clear');
   Artisan::call('event:clear');

   // Artisan::call('config:cache');

   // Artisan::call('storage:link');

    return 'OK';

});

Route::get('locale/{locale}',function($locale){

    \Illuminate\Support\Facades\Session::put('locale',$locale);

    return redirect()->back();


})->name('switchLan');


Route::get('test', function () {
    return session()->all();
});

