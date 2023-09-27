<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterAndLoginController extends Controller
{
    public function registerpage()
    {
        return view('main/registerpage');
    }

    public function loginpage()
    {
        return view('main/loginpage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'studentid' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('studentid', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('main.home')
                        ->withSuccess('Signed in');
        }
   
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function studentNumExists(Request $request){
        $data=$request->all();
        $studNumber=$data['studentid'];
        $result=DB::table('users')
            ->where('studentid',$studNumber)
            ->first();
        if(empty($result)){
            return response()->json(["success"=>false]);   
        }
        return response()->json(["success"=>true]);
    }
    public function register(Request $request)
    {  
        $data = $request->all();
        $check = $this->create($data);  
        return redirect("dashboard")->withSuccess('have signed-in');
    }

    public function create(array $data)
    {
      /*return DB::table('users')
        ->insert([
            'studentid' => $data['studentid'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'yearlevel' => $data['yearlevel'],
            'program' => $data['program'],
            'password' => $data['password']
        ]);*/
      
      return User::create([
            'studentid' => $data['studentid'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'yearlevel' => $data['yearlevel'],
            'program' => $data['program'],
            'password' => $data['password'],
        ]);
    }

    public function success()
    {
        if(Auth::check()){
            return view('main.home');
        }
   
        return redirect("login")->withSuccess('are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login');
    }


}
