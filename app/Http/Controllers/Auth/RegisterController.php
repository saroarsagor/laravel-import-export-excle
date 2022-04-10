<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use App\Models\DoctorProfile;
use Carbon\Carbon;
use Validator;

use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required', 'string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        /*$user->gender = $request->gender;*/
         /*if ($request->hasFile('image')){
               $userimage=\MyHelper::photoUpload($request->file('image'),'images/patientUser/',190,223);
                $user->image = $userimage;
            }*/

        if($request->password){
            $user->password = Hash::make($request->password);
            $user->syncRoles('user');
            if($user->save()){
                Toastr::success('Registation Successully.', 'Success');
                return redirect()->route('login');
            }else{
                Toastr::error('Something is wrong.. !', 'Error');
                return redirect()->route('register');
            }
        }
        else{
            Toastr::error('Password not matched...!', 'Error');
            return redirect()->route('register');
        }
    }


     /**
     * Create a new doctor instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

     public function doctorRegister()
    {
         return view('auth.doctorRegister');
    }

    
    protected function doctorStore(Request $request)
    {
         $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'mobile' => 'required|unique:users',
            'nid_passport' => 'required|unique:users',
            'bmdc' => 'required|unique:users',
            'password' => 'required', 'string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->nid_passport = $request->nid_passport;
        $user->bmdc = $request->bmdc;
        $user->user_type = 'doctor';

        if($request->password == $request->password_confirmation){
            $user->password = Hash::make($request->password);
            $user->syncRoles('doctor');
            if($user->save()){
                $user_id = $user->id;
                $doctorInfo = new DoctorProfile();
                $doctorInfo->user_id = $user_id;
                $doctorInfo->title = $request->title;
                $doctorInfo->date_birth = $request->date_birth;
                $doctorInfo->gender = $request->gender;
                $doctorInfo->save();

                Toastr::success('Registation Successully.', 'Success');
                return redirect()->route('login');
            }else{
                Toastr::error('Something is wrong.. !', 'Error');
                return redirect()->back();
            }
        }
        else{
            Toastr::error('Password not matched...!', 'Error');
            return redirect()->back();
        }
    }


    
    protected function create(array $data)
    {
        //
    }
}
