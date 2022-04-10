<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

    public function login(Request $request)
    {

        $this->validate($request, [
            'password' => 'required',
        ]);

        $findUserEmail = User::where('email', $request->email)->first();
        $findUserBobile = User::where('mobile', $request->email)->first();

        if(isset($findUserEmail)){
            if($findUserEmail->status == 1){
                if ($this->guard()->attempt(['email' => $request->email, 'password' => $request->password])) {

                    $UserLogSave = new UserLog();
                    $UserLogSave->log_in = Carbon::now()->toDateTimeString();
                    $UserLogSave->login_ip = $request->ip();
                    $UserLogSave->user_id = $findUserEmail->id;
                    $UserLogSave->shop_id = $findUserEmail->user_id;
                    $UserLogSave->save();

                    //save uerlog id
                    $findUserEmail->userlog_id = $UserLogSave->id;
                    $findUserEmail->save();

                    Toastr::success('Successully Logged in', 'Success');
                    return redirect()->route('home');
                }else{
                    Toastr::error('You email password not correct', 'Error');
                     return redirect()->route('login');
                }
            }else{
                Toastr::error('This ID Suspend', 'Error');
                return redirect()->route('login');
            }
            
        }
        else if(isset($findUserBobile)){
            if($findUserBobile->status == 1){
                if ($this->guard()->attempt(['mobile' => $request->email, 'password' => $request->password])) {
                   
                    $UserLogSave = new UserLog();
                    $UserLogSave->log_in = Carbon::now()->toDateTimeString();
                    $UserLogSave->login_ip = $request->ip();
                    $UserLogSave->user_id = $findUserBobile->id;
                    $UserLogSave->shop_id = $findUserBobile->user_id;
                    $UserLogSave->save();

                    //save uerlog id
                    $findUserBobile->userlog_id = $UserLogSave->id;
                    $findUserBobile->save();

                    Toastr::success('Successully Logged in !', 'Success');
                    return redirect()->route('home');
                }else{
                    Toastr::error('You email password not correct.. !', 'Error');
                     return redirect()->route('login');
                }

            }else{
                Toastr::error('This ID Suspend', 'Error');
                return redirect()->route('login');
            }

        }else{
            Toastr::error('You are not registered.. !', 'Error');
            return redirect()->route('login');
        }
      
    }

   /* protected function authenticated(Request $request, $user)
    {
        $user->last_login = Carbon::now()->toDateTimeString();
        $user->login_ip = $request->ip();
        $user->save();
    }*/

    public function logout(Request $request) {
        $userlog_id = Auth::user()->userlog_id;
        $UserLogOut = UserLog::where('id',$userlog_id)->first();
        $UserLogOut->log_out = Carbon::now()->toDateTimeString();
        $UserLogOut->save();
        Auth::logout();
        return redirect('/login');
    }






    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
