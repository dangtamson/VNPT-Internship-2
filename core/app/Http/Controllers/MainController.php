<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{ 
    function index()
    {
     return view('login');
    }

   function checklogin(Request $request)
    {
         $this->validate($request, [
          'username'   => 'required|min:3',
          'password'  => 'required|alphaNum|min:3'
         ]);
         $user_data = array(
          'username'  => $request->get('username'),
          'password' => $request->get('password')
         );

         if(Auth::attempt($user_data))

           if(Auth::user()->quyen == 0)
                return redirect('main/successlogin1');
            else
                return redirect('main/successlogin');
           
        
    }

    function successlogin1()
    {
     return view('successlogin1');
    }
    function successlogin()
    {
     return view('successlogin');
    }

    function logout()
    {
     Auth::logout();
     return redirect('/main');
    }

    
}

?>