<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chucvu;
use App\Phongban;
use Carbon\Carbon;
use DB;
class UserController extends Controller
{
    //
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('users')->where('username',$request->search)->value('id');
        $id_user = User::find($tim_khoachinh);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        if(isset($id_user)){
            return view('admin.user.danhsach',['id_user'=>$id_user, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
        }else
        {
            return redirect('admin/user/danhsach')->with('thongbao2','Tài khoản không tồn tại !');
        }
    }
    public function getDanhSach(){
        $user = User::Paginate(5);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        return view('admin.user.danhsach',['user'=>$user, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
    }

    public function getThem(){
        return view('admin.user.them');
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'name' => 'bail|required|min:4|max:32',
            'username' => 'bail|required|min:4',
            'password' => 'required|min:8|max:32',
            'passwordAgain' => 'required|same:password',
            'email' => 'bail|required|unique:users,email',
        ],
        [
            'name.requied'=>'Bạn chưa nhập tên người dùng !',
            'name.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'name.max'=>'Tên người dùng tối đa 6 ký tự !',
            'username.requied'=>'Bạn chưa nhập tên tài khoản !',
            'username.min'=>'Tài khoản ít nhất 4 ký tự !',
            'password.required' => 'Chưa nhập mật khẩu !',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự !',
            'password.max' => 'Mật khẩu tối đa 32 ký tự !',
            'passwordAgain.required' => 'Bạn chưa nhập mật khẩu !',
            'passwordAgain.same' => 'Nhập lại mật khẩu chưa đúng !',
            'email.requied'=>'Bạn chưa nhập email !',
            'email.unique'=>'Email đã tồn tại !'
       
        ]);

        $taikhoan = DB::table('users')->where('username',$request->username)->value('username');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/user/them')->with('thongbao2','Username '.$taikhoan.' đã tồn tại !');
            

        }
        else
        {
            $user = new User;
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->check_pass = $request->passwordAgain;
            $user->email = $request->email;
            $user->id_pb = $request->id_pb;
            $user->id_cv = $request->id_cv;
            $user->quyen = $request->quyen;
            $user->gioitinh = $request->gioitinh;
            $user->created_at = Carbon::now();
            $user->updated_at = Carbon::now();
            $user->save();
            return redirect('admin/user/them')->with('thongbao','Thêm thành công');
        }
    }

    public function getSua($id){
        $user = User::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }

    public function getpass($id){
        $user = User::find($id);
        return view('admin.user.getpass',['user'=>$user]);
    }
    public function postSua(Request $request, $id){
        $user = User::find($id);
        $this->validate($request,
        [
            'name' => 'bail|required|min:4|max:32',
            'username' => 'bail|required|min:4',
            // 'password' => 'required|min:8|max:32',
            // 'passwordAgain' => 'required|same:password',
        ],
        [
            'name.requied'=>'Bạn chưa nhập tên người dùng !',
            'name.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'name.max'=>'Tên người dùng tối đa 6 ký tự !',
            'username.requied'=>'Bạn chưa nhập tên tài khoản !',
            'username.min'=>'Tài khoản ít nhất 4 ký tự !',
            // 'password.required' => 'Chưa nhập mật khẩu !',
            // 'password.min' => 'Mật khẩu ít nhất 8 ký tự !',
            // 'password.max' => 'Mật khẩu tối đa 32 ký tự !',
            // 'passwordAgain.required' => 'Bạn chưa nhập mật khẩu !',
            // 'passwordAgain.same' => 'Nhập lại mật khẩu chưa đúng !'
       
        ]);

            
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            // $user->check_pass = $request->passwordAgain;
            $user->email = $request->email;
            $user->id_pb = $request->id_pb;
            $user->id_cv = $request->id_cv;
            $user->quyen = $request->quyen;
            $user->gioitinh = $request->gioitinh;
            $user->created_at = Carbon::now();
            $user->updated_at = Carbon::now();
            $user->save();
            return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id){
        $user = user::find($id);
        $user->delete();

        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công !');
    }

     public function userAdmin(){
        $ds_user = User::where('quyen',0)->Paginate(3);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        return view('admin.user.useradmin',['ds_user'=>$ds_user, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
        
    }
    public function userNhanVien(){
        $ds_user1 =User::where('quyen',1)->Paginate(3);
        $chucvu = Chucvu::all();
        $phongban = Phongban::all();
        return view('admin.user.usernhanvien',['ds_user1'=>$ds_user1, 'chucvu'=>$chucvu, 'phongban'=>$phongban]);
       
    }

   



}



