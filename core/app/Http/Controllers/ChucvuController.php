<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chucvu;
use Carbon\Carbon;
use DB;
class ChucvuController extends Controller
{
    //
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('chucvu')->where('tencv',$request->search)->value('id_cv');
        $id_chucvu = Chucvu::find($tim_khoachinh);
        if(isset($id_chucvu)){
            return view('admin.chucvu.danhsachcv',['id_chucvu'=>$id_chucvu]);
        }else
        {
            return redirect('admin/chucvu/danhsachcv')->with('thongbao2','Tài khoản không tồn tại !');
        }
    }
    public function getDanhSachcv(){
        $chucvu = Chucvu::all();
        return view('admin.chucvu.danhsachcv',['chucvu'=>$chucvu]);
    }

    public function getThemcv(){
        return view('admin.chucvu.themcv');
    }

    public function postThemcv(Request $request){
        $this->validate($request,
        [
            'tencv' => 'bail|required|',   
        ],
        [
            'tencv.requied'=>'Bạn chưa nhập tên chức vụ !'         
       
        ]);

        $taikhoan = DB::table('chucvu')->where('tencv',$request->tencv)->value('tencv');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/chucvu/themcv')->with('thongbao2','tencv'.$taikhoan.' đã tồn tại !');
            

        }
        else
        {
            $chucvu = new Chucvu;
            $chucvu->tencv = $request->tencv;
            $chucvu->created_at = Carbon::now();
            $chucvu->updated_at = Carbon::now();
            $chucvu->save();
            return redirect('admin/chucvu/themcv')->with('thongbao','Thêm thành công');
        }
    }
  public function getSuacv($id_cv){
        $chucvu = Chucvu::find($id_cv);
        return view('admin.chucvu.suacv',['chucvu'=>$chucvu]);
    }
    public function postSuacv(Request $request, $id_cv){
        $chucvu = Chucvu::find($id_cv);
        $this->validate($request,
        [
            'tencv' => 'bail|required|',
           
        ],
        [
             'tencv.requied'=>'Bạn chưa nhập tên chức vụ !'     
           
        ]);    
            $chucvu->tencv = $request->tencv;
            $chucvu->created_at = Carbon::now();
            $chucvu->updated_at = Carbon::now();
            $chucvu->save();
            return redirect('admin/chucvu/suacv/'.$id_cv)->with('thongbao','Sửa thành công');
    }

    public function getXoacv($id_cv){
        $chucvu = Chucvu::find($id_cv);
        $chucvu->delete();

        return redirect('admin/chucvu/danhsachcv')->with('thongbao','Xóa thành công !');
    }

}


