<?php

namespace App\Http\Controllers\Api;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\DoctorProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors(),], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $findUserEmail = User::where('email', $request->email)->first();
        $findUserBobile = User::where('mobile', $request->email)->first();
        if(isset($findUserEmail)){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               $user = User::where('email', $request->email)->first();
                $accessToken = $user->createToken('authToken')->accessToken;
                $data = [
                    'message' => 'Login successfully',
                    'access_token' => $accessToken,
                    'userData' => $user,
                ];
                return response()->json($data);
            }else{
                return response()->json(['success' => false, 'errors' => 'You email password not correct',], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }
        else if(isset($findUserBobile)){
            if (Auth::attempt(['mobile' => $request->email, 'password' => $request->password])) {
                $user = User::where('mobile', $request->email)->first();
                $accessToken = $user->createToken('authToken')->accessToken;
                $data = [
                    'message' => 'Login successfully',
                    'access_token' => $accessToken,
                    'userData' => $user,
                ];
                return response()->json($data);
            }else{
                return response()->json(['success' => false, 'errors' => 'You email password not correct',], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }else{
            return response()->json(['success' => false, 'errors' => 'You are not registered',], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
      
    }

    /*user registered*/
     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required', 'string',
        ]);
        if ($validator->fails()) {
             return response()->json(['success' => false, 'errors' => $validator->errors(),], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        DB::beginTransaction();
        try {
            $request['password'] = Hash::make($request['password']);
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'mobile' => $request['mobile'],
                'password' => $request['password'],
            ]);
             $user->syncRoles('user');
            $accessToken = $user->createToken('authToken')->accessToken;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'errors' => $e->getMessage()], 500);
        }

        $data = [
            'message' => 'Registration success',
            'access_token' => $accessToken,
            'userData' => $user,
        ];
        return response()->json($data);
    }

    protected function doctorStore(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'mobile' => 'required|unique:users',
            'nid_passport' => 'required|unique:users',
            'bmdc' => 'required|unique:users',
            'password' => 'required', 'string',
        ]);
        if ($validator->fails()) {
             return response()->json(['success' => false, 'errors' => $validator->errors(),], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        DB::beginTransaction();
        try {
            if($request->password == $request->password_confirmation){
                 $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->mobile = $request->mobile;
                $user->nid_passport = $request->nid_passport;
                $user->bmdc = $request->bmdc;
                $user->user_type = 'doctor';
                $user->password = Hash::make($request->password);

                $user->syncRoles('doctor');
                $accessToken = $user->createToken('authToken')->accessToken;
                
                if($user->save()){
                    $user_id = $user->id;
                    $doctorInfo = new DoctorProfile();
                    $doctorInfo->user_id = $user_id;
                    $doctorInfo->title = $request->title;
                    $doctorInfo->date_birth = $request->date_birth;
                    $doctorInfo->gender = $request->gender;
                    $doctorInfo->save();
                }
            }else{
                return response()->json(['success' => false, 'errors' => 'You  password not correct',], Response::HTTP_UNPROCESSABLE_ENTITY);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'errors' => $e->getMessage()], 500);
        }
        $data = [
            'message' => 'Doctor Registration success',
            'access_token' => $accessToken,
            'userData' => $user,
            'doctorInfo' => $doctorInfo,
        ];
        return response()->json($data);
    }




}
