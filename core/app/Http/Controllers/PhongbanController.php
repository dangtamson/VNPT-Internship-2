<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phongban;
use Carbon\Carbon;
use DB;
class PhongbanController extends Controller
{
    //
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('Phongban')->where('tenpb',$request->search)->value('id_pb');
        $id_pb = Phongban::find($tim_khoachinh);
        if(isset($id_pb)){
            return view('admin.phongban.danhsach',['id_pb'=>$id_pb]);
        }else
        {
            return redirect('admin/phongban/danhsach')->with('thongbao2','Tài khoản không tồn tại !');
        }
    }
    public function getDanhSach(){
        $phongban = Phongban::Paginate(5);
        return view('admin.phongban.danhsach',['phongban'=>$phongban]);
    }

    public function getThem(){
        return view('admin.phongban.them');
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'tenpb' => 'bail|required|min:4|max:32',
            
        ],
        [
            'tenpb.requied'=>'Bạn chưa nhập tên phòng ban !',
            'tenpb.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'tenpb.max'=>'Tên người dùng tối đa 6 ký tự !',        
        ]);

        $taikhoan = DB::table('phongban')->where('tenpb',$request->tenpb)->value('tenpb');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/phongban/them')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        }
        else
        {
            $phongban = new Phongban;
            $phongban->tenpb = $request->tenpb;
            $phongban->created_at = Carbon::now();
            $phongban->updated_at = Carbon::now();
            $phongban->save();
            return redirect('admin/phongban/them')->with('thongbao','Thêm thành công');
        }
    }

    public function getSua($id_pb){
        $phongban = Phongban::find($id_pb);
        return view('admin.phongban.sua',['phongban'=>$phongban]);
    }
    public function postSua(Request $request, $id_pb){
        $phongban = Phongban::find($id_pb);
        $this->validate($request,
        [
            'tenpb' => 'bail|required|min:4|max:32',
        ],
        [
            'tenpb.requied'=>'Bạn chưa nhập tên người dùng !',
            'tenpb.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'tenpb.max'=>'Tên người dùng tối đa 6 ký tự !',
           
        ]);

            $taikhoan = DB::table('phongban')->where('tenpb',$request->tenpb)->value('tenpb');


        if(isset($taikhoan) != '')
        {  

            return redirect('admin/phongban/danhsach/')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        }
        else
            $phongban->tenpb = $request->tenpb;
            $phongban->updated_at = Carbon::now();
            $phongban->save();
            return redirect('admin/phongban/danhsach/')->with('thongbao','Sửa thành công');

    }

    public function getXoa($id_pb){
        $phongban = Phongban::find($id_pb);
        $phongban->delete();

        return redirect('admin/phongban/danhsach')->with('thongbao','Xóa thành công !');
    }

}



