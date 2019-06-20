<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Chucvu;
use App\Phongban;
use Carbon\Carbon;
use DB;

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
                return redirect('successlogin2');
           else
                 return back()->with('error', 'Sai tài khoản hoặc mật khẩu !');
        
    }

    function successlogin1()
    {
     return view('successlogin1');
    }
    function successlogin2()
    {
     return view('successlogin2');
    }


    function logout()
    {
     Auth::logout();
     return redirect('/main');
    }

    public function userNhanVien(){
        $ds_user1 =User::where('quyen',1)->Paginate(3);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        return view('successlogin2',['ds_user1'=>$ds_user1, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
       
    }    

    public function userNhanVien1(){
        $ds_user1 =User::where('quyen',1)->Paginate(3);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        return view('khaosat',['ds_user1'=>$ds_user1, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
       
    } 
    
}

?>