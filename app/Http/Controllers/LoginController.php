<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\AddItems;

class LoginController extends Controller
{
    public function index()
    {
    	return view('/login');
    }

    public function login(Request $request)
    {	
    	$add_item = AddItems::all();
    	$user = DB::table('users')->where('email', $request->email)->where('password', $request->password)->get()->toArray();
      if ($user != null) {
        return view('/dashboard' , compact('add_item', 'user'));
      }else{
        $message = "Wrong Username or Password";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='/';
            </script>";
      }
  }
    public function add_user()
    {
      $add_user = User::all();
      $add_item = AddItems::all();
      return view ('/add_user' ,  compact('add_item' , 'add_user'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->user_status = $request->user_status;

        $user->save();

        return redirect('/add_user');
    }
}

   // if ( {
   //          echo "string";
   //      }else{
   //          $message = "Wrong Username or Password";
   //          echo "<script type='text/javascript'>alert('$message');
   //          window.location.href='/';
   //          </script>";
   //      }