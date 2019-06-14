<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linhvuc;
use Carbon\Carbon;
use DB;
class LinhvucController extends Controller
{
    //
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('linhvuc')->where('tenlv',$request->search)->value('id_lv');
        $id_linhvuc = Linhvuc::find($tim_khoachinh);
        if(isset($id_linhvuc)){
            return view('admin.linhvuc.danhsach',['id_linhvuc'=>$id_linhvuc
        ]);
        }else
        {
            return redirect('admin/linhvuc/danhsachlv')->with('thongbao2','Tài khoản không tồn tại !');
        }
    }
    public function getDanhSachlv(){
        $linhvuc = Linhvuc::Paginate(5);
        return view('admin.linhvuc.danhsach',['linhvuc'=>$linhvuc]);
    }

    public function getThemlv(){
        return view('admin.linhvuc.them');
    }

    public function postThemlv(Request $request){
        $this->validate($request,
        [
            'tenlv' => 'bail|required|',   
        ],
        [
            'tencv.requied'=>'Bạn chưa nhập tên lĩnh vực !'         
       
        ]);

        $taikhoan = DB::table('linhvuc')->where('tenlv',$request->tenlv)->value('tenlv');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/linhvuc/themlv')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        }
        else
        {
            $linhvuc = new Linhvuc;
            $linhvuc->tenlv = $request->tenlv;
            $linhvuc->created_at = Carbon::now();
            $linhvuc->updated_at = Carbon::now();
            $linhvuc->save();
            return redirect('admin/linhvuc/themlv')->with('thongbao','Thêm thành công');
        }
    }
  public function getSualv($id_lv){
        $linhvuc = Linhvuc::find($id_lv);
        return view('admin.linhvuc.sua',['linhvuc'=>$linhvuc]);
    }
    public function postSualv(Request $request, $id_lv){
        $linhvuc = Linhvuc::find($id_lv);
        $this->validate($request,
        [
            'tenlv' => 'bail|required|',
           
        ],
        [
             'tenlv.requied'=>'Bạn chưa nhập tên lĩnh vực !'     
           
        ]);     
        $taikhoan = DB::table('linhvuc')->where('tenlv',$request->tenlv)->value('tenlv');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/linhvuc/danhsachlv')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        }
        else
            $linhvuc->tenlv = $request->tenlv;
            $linhvuc->updated_at = Carbon::now();
            $linhvuc->save();
            return redirect('admin/linhvuc/danhsachlv')->with('thongbao','Sửa thành công');
    }

    public function getXoalv($id_lv){
        $linhvuc = Linhvuc::find($id_lv);
        $linhvuc->delete();

        return redirect('admin/linhvuc/danhsachlv')->with('thongbao','Xóa thành công !');
    }

}


