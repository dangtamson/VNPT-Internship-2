<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tieuchidanhgia;
use App\Linhvuc;
use App\Khaosat;
use Carbon\Carbon;
use DB;
class TieuchidanhgiaController extends Controller
{
    //
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('tieuchidanhgia')->where('id_ch',$request->search)->value('id_ch');
        $id_user = Tieuchidanhgia::find($tim_khoachinh);
        $linhvuc = Linhvuc::all();
       
        if(isset($id_user)){
            return view('admin.tieuchidanhgia.danhsach',['id_user'=>$id_user, 'linhvuc'=>$linhvuc]);
        }else
        {
            return redirect('admin/tieuchidanhgia/danhsach')->with('thongbao2','Tiêu chí đánh giá không tồn tại !');
        }
    }
    public function getDanhSach(){
        $tieuchidanhgia = Tieuchidanhgia::Paginate(5);
        $linhvuc = Linhvuc::all();
        $khaosat = Khaosat::all();
        return view('admin.tieuchidanhgia.danhsach',['tieuchidanhgia'=>$tieuchidanhgia, 'linhvuc'=>$linhvuc, 'khaosat'=>$khaosat]);
    }

    // public function getDanhSachan(){
    //     $tieuchidanhgia = Tieuchidanhgia::where('trangthai',0)->Paginate(5);
    //     $linhvuc = Linhvuc::all();
    //     $khaosat = Khaosat::all();
    //     return view('admin.tieuchidanhgia.danhsachan',['tieuchidanhgia'=>$tieuchidanhgia, 'linhvuc'=>$linhvuc, 'khaosat'=>$khaosat]);
    // }

    public function getThem(){
        return view('admin.tieuchidanhgia.them');
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'noidungch' => 'bail|required|',
        ],
        [
            'noidungch.required'=>'Bạn chưa nhập nội dung câu hỏi !'
       
        ]);

        // $cauhoi = DB::table('tieuchidanhgia')->where('noidungch',$request->noidungch)->value('noidungch');z


        // if(isset($cauhoi) != '')
        // {  

        //     return redirect('admin/tieuchidanhgia/them')->with('thongbao2',''.$cauhoi.' đã tồn tại !');
            

        // }
        // else
        // {
            $tieuchidanhgia = new Tieuchidanhgia;
            $tieuchidanhgia->noidungch = $request->noidungch;
            $tieuchidanhgia->id_lv = $request->id_lv;
            // $tieuchidanhgia->trangthai = $request->trangthai;
            // $tieuchidanhgia->id_ks = $request->id_ks;
            $tieuchidanhgia->created_at = Carbon::now();
            $tieuchidanhgia->updated_at = Carbon::now();
            $tieuchidanhgia->save();
            return redirect('admin/tieuchidanhgia/danhsach')->with('thongbao','Thêm thành công');

    }

        public function getSua($id_ch){
        $tieuchidanhgia = Tieuchidanhgia::find($id_ch);
        return view('admin.tieuchidanhgia.sua',['tieuchidanhgia'=>$tieuchidanhgia]);
    }

   
    public function postSua(Request $request, $id_ch){
        $tieuchidanhgia = Tieuchidanhgia::find($id_ch);
        $this->validate($request,
        [
           'noidungch' => 'bail|required|',
          
        ],
        [
            'noidungch.required'=>'Bạn chưa nhập nội dung câu hỏi !'
       
        ]);
        // $cauhoi = DB::table('tieuchidanhgia')->where('noidungch',$request->noidungch)->value('noidungch');


        // if(isset($cauhoi) != '')
        // {  

        //     return redirect('admin/tieuchidanhgia/danhsach')->with('thongbao2',''.$cauhoi.' đã tồn tại !');
            

        // }
        // else
            
            $tieuchidanhgia->noidungch = $request->noidungch;
            $tieuchidanhgia->id_lv = $request->id_lv;
            // $tieuchidanhgia->id_ks = $request->id_ks;
            // $tieuchidanhgia->trangthai = $request->trangthai;
            $tieuchidanhgia->updated_at = Carbon::now();
            $tieuchidanhgia->save();
            return redirect('admin/tieuchidanhgia/danhsach/')->with('thongbao','Sửa thành công');
    }

    public function getXoa($id_ch){
        $tieuchidanhgia = Tieuchidanhgia::find($id_ch);
        $tieuchidanhgia->delete();

        return redirect('admin/tieuchidanhgia/danhsach')->with('thongbao','Xóa thành công !');
    }

   



}



