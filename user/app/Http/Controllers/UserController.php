<?php

namespace App\Http\Controllers;
use App\Models\mid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
   
    function user($id){

       // $name = $id::table('mid')->select('name')->get();
       // $email = $id::table('mid')->select('email')->get(); 
       // $type = $id::table('mid')->select('type')->get();
        $name = 'Faiza';
        $email = 'fz.tasnim10@gmail.com'; 
        $type = 'user';
        
        return view('Dashboard')
        ->with('n',$name)
        ->with('id',$id)
        ->with('email',$email)
        ->with('type',$type);
    }
    function create(){
        return view('Register');
    }
    function createSubmit(Request $req){

        $this->validate($req,
             [
                "name"=>"required|max:20|regex:/^[a-z A-z]+$/",
                "email"=>'required|email|unique:mids,email',
                "password"=>"required|min:8",
                "type"=>"required"
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 20 characters",
                 "password.max"=> "Password should be exceed 8 characters",
             ]
            );

            $s1 = new mid();
            $s1->type = $req->type;
            $s1->name = $req->name;
            $s1->password = $req->password;
            $s1->email = $req->email;
            $s1->save();    
            return redirect()->intended('/');
    }
    function login(){
        return view('Login');
    }
    function loginSubmit(Request $req)
    {
        $req->validate
        ([
            'email' => 'required|email',
            'password'=> 'required|min:8',
        ]);
        $email = $req->input('email');
        $password = $req->input('password');

     //$mids = mid::where('email','password',$_REQUEST('email','password'));
     //mid::check(Request('email'), $mids->email);
    if (!$email)
    {
        return 'Login Fail, please check email id';
    }
   $mids = mid::where('password', '=', $req->input('password'));
    if (!$req->password) 
    {
        return 'Login Fail, pls check password';
    }
    return redirect()->intended('/dashboard');


}function list(){
        $mids = mid::all();
        return view('list')
               ->with('mids',$mids);
    }

}
