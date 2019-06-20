<?php
namespace App\Http\Controllers;
use App\User;
use App\Khaosat;
use App\Phieukhaosat;
use App\Tieuchidanhgia;
use App\Linhvuc;
use App\Chucvu;
use App\Phongban;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

class NhanvienController extends Controller
{

	public function getkhaosat(){
		
		$check2 = [
			['ngaybd', '<=',Carbon::now() ],
			['ngaykt', '>=', Carbon::now()]
		];

		$get = DB::table('khaosat')->where($check2)->value('id_ks');

		
        if( $get != '')
        {  
           // return view('khaosat',['khaosat'=>$get]);
        	$khaosat = Khaosat::find($get);
			$tieuchidanhgia = Tieuchidanhgia::all();
	        $phieukhaosat = Phieukhaosat::all();
	        return view('khaosat',['khaosat'=>$khaosat, 'tieuchidanhgia'=>$tieuchidanhgia, 'phieukhaosat'=>$phieukhaosat]);
           
        }
        else
		
		 return redirect('successlogin2')->with('thongbao2','Chưa đến thời gian khảo sát!');
	}

	public function nop(Request $request){
            
            $phieukhaosat=Phieukhaosat::find($id_ks);
            $traloikhaosat = new Traloikhaosat;
            $traloikhaosat->id_pks = $request->id_pks;
            $traloikhaosat->id = Auth::user()->id;
            $traloikhaosat->id_bc = $request['id_pks'];
            $traloikhaosat->created_at = Carbon::now();
            $traloikhaosat->save();
            $ykiendanhgia = new Ykiendanhgia;
            $ykiendanhgia->id = Auth::user()->id;
            $ykiendanhgia->id_ks = $id_ks;
            $ykiendanhgia->noidungyk = $request->noidungyk;
            return redirect('successlogin2')->with('thongbao','Nộp thành công');
    }

	 public function getSua(){
	 
        return view('sua');
        
	 }


	  public function postSua(Request $request, $id){
	  	 $user = User::findOrFail($id);

            /*
            * Validate all input fields
            */
            $this->validate($request, [
                'password' => 'required_with:new_password|password|max:8',
                'newPassword' => 'confirmed|max:8',
            ]);

            if (Hash::check($request->password, $user->check_pass)) { 
               $user->fill([
                'check_pass' => Hash::make($request->newPassword),
                'password' => bcrypt($request->newpassword),
                ])->save();

               $request->session()->flash('success', 'Password changed');
                return redirect('successlogin2');

            } else {
                $request->session()->flash('error', 'Password does not match');
                return redirect('successlogin2');
            }
        //$user = User::find(Auth::user()->id);
        // $this->validate($request,
        // [
            
        //     'password' => 'required|min:8|max:32',
        //     'newpassword' => 'required|min:8|max:32',
        //     'passwordAgain' => 'required|same:password',
        // ],
        // [
            
        //     'password.required' => 'Chưa nhập mật khẩu !',
        //     'newpassword.required' => 'Chưa nhập mật khẩu mới!',
        //     'password.min' => 'Mật khẩu ít nhất 8 ký tự !',
        //     'password.max' => 'Mật khẩu tối đa 32 ký tự !',
        //     'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu !',
        //     'passwordAgain.same' => 'Nhập lại mật khẩu chưa đúng !'
       
        // ]);
        // 	$get = DB::table('users')->where('id',Auth::user()->id)->value('check_pass');

        //     if ($request->password == $get) {
        //     	$user->password = bcrypt($request->newpassword);
	       //      $user->check_pass = $request->passwordAgain;
	       //      $user->save();
	       //      return redirect('successlogin2')->with('thongbao','Sửa thành công!');
        //     }
           
            
        //     return redirect('successlogin2')->with('thongbao2','Sai mật khẩu! Không thể sửa!');
    
	  }
}