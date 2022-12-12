<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
         if($user && Hash::check($req->password,$user->password))
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
        else{
            return "password and email is not match";
        }
    }
    function register(Request $req)
    {
       $reg=new User;
       $reg->email=$req->email;
       $reg->name=$req->name;
       $reg->password=Hash::make($req->password);
       $reg->save();
       return redirect('login');
    }
}
