<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Twilio,Session,Services_Twilio;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function sendOtp(\Illuminate\Http\Request $req){
        $code = rand ( 10000 , 99999 );
        $message = "Your verification code is $code";
        $res = Twilio::message($req->mobno, $message);
        if($res->error_code){

            Session::flash('error',$res->error_message);
        }
        else{
            $res =  User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => bcrypt($req->password),
                'mobno' => $req->mobno,
                'code' => $code
            ]);
            $data = array('id' =>$res->id, 'code' => $res->code);
            return view('layouts.verficationCode',compact('data'));
        }
    }

    public function verifyOtp(\Illuminate\Http\Request $req)
    {
      //  DD($req->code,$req->newcode);
        if ($req->code == $req->newcode)
            Session::flash('success', 'Succefully Login');
        else{
            User::destroy($req->id);
            Session::flash('error', 'OTP verification failed');
        }


        return redirect()->route('main');
    }
}
