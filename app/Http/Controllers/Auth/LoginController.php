<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;

use App\Models\User;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

use Session;

use Illuminate\Support\Facades\Hash;

use Laravel\Socialite\Facades\Socialite;



class LoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */



    use AuthenticatesUsers;



    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = RouteServiceProvider::HOME;

    protected $loginPath = 'admin/login';



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

    public function redirect($provider)

    {

        return Socialite::driver($provider)->redirect();

    }

    public function Callback($provider)

    {

        $userSocial =   Socialite::driver($provider)->stateless()->user();

        $users      =   User::where(['email' => $userSocial->getEmail()])->first();

        if($users){

            Session::put('user',$users->email);

            Auth::login($users);

            return redirect('/')->with('success','You are login from'.$provider);

        }else{

            $user = User::create([

                'name'          => $userSocial->getName(),

                'email'         => $userSocial->getEmail(),

                'image'         => $userSocial->getAvatar(),

                'provider_id'   => $userSocial->getId(),

                'provider'      => $provider,

                'password' => Hash::make('Admin@password')

            ]);

            Session::put('user',$userSocial->getEmail());

            Auth::attempt(['email' => $userSocial->getEmail(), 'password' => 'Admin@password','status'=>'active']);

            return redirect()->route('home');

        }

    }

}

