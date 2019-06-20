<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Khaosat;
use App\Phieukhaosat;
use App\Tieuchidanhgia;
use App\Linhvuc;
use Carbon\Carbon;
use DB;

class KhaosatController extends Controller
{
    public function getSearch(Request $request){
        $tim_khoachinh = DB::table('Khaosat')->where('tenks',$request->search)->value('id_ks');
        $id_ks = Khaosat::find($tim_khoachinh);
        if(isset($id_ks)){
            return view('admin.khaosat.danhsach',['id_ks'=>$id_ks]);
        }else
        {
            return redirect('admin/khaosat/danhsach')->with('thongbao2','Khảo sát không tồn tại !');
        }
    }
    public function getDanhSach(){
        $khaosat = Khaosat::Paginate(5);
        return view('admin.khaosat.danhsach',['khaosat'=>$khaosat]);
    }

    public function getThem(){
        return view('admin.khaosat.them');
    }

    public function postThem(Request $request){

        $now= Carbon::now();
         $this->validate($request, [
            'tenks' => 'bail|required|min:4|max:32',
            'ngaybd' => 'bail|required|min:$now',
            'ngaykt' => 'bail|required',
            'trangthai' => 'required',
            
        ],[
            'tenks.required'=>'Bạn chưa nhập tên khảo sát !',
            'tenks.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'tenks.max'=>'Tên người dùng tối đa 6 ký tự !',
            'ngaybd.required'=>'Bạn chưa chọn ngày bắt đầu !',
            'ngaybd.min' =>'Ngày bắt đầu phải lớn hơn hiện tại!',
            'ngaykt.required'=>'Bạn chưa chọn ngày kết thúc !',
            
        ]);
         $taikhoan = DB::table('khaosat')->where('tenks',$request->tenks)->value('tenks');

        if(isset($taikhoan) != '')
        {  

            return redirect('admin/khaosat/them')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        }
        else if($request['ngaybd']<= Carbon::now())
            return redirect('admin/khaosat/them')->with('thongbao2','Ngày bắt đầu phải lớn hơn hiện tại!');
        else if($request['ngaykt']<=$request['ngaybd'])
             return redirect('admin/khaosat/them')->with('thongbao2','Ngày kết thúc phải lớn hơn ngày bắt đầu!');
        else
        {
        $khaosat = new Khaosat;
        $khaosat->tenks = $request['tenks'];
        $khaosat->ngaybd = $request['ngaybd'];
        $khaosat->ngaykt = $request['ngaykt'];
        $khaosat->trangthai = $request['trangthai'];
        $khaosat->created_at = Carbon::now();
        $khaosat->updated_at = Carbon::now();
        $khaosat->save();
 
        return redirect('/admin/khaosat/them')->with('thongbao','Tạo khảo sát thành công!');
    }

    }
    public function getXem($id_ks){
        $khaosat = Khaosat::find($id_ks);
        $tieuchidanhgia = Tieuchidanhgia::all();
        $phieukhaosat = Phieukhaosat::Paginate(5);
        $linhvuc = Linhvuc::all();
        return view('admin.khaosat.xem',['khaosat'=>$khaosat, 'tieuchidanhgia'=>$tieuchidanhgia, 'phieukhaosat'=>$phieukhaosat, 'linhvuc' =>$linhvuc]);

    }

    public function getSua($id_ks){
        $khaosat = Khaosat::find($id_ks);
        // $ngaybd = DB::table('khaosat')->where('id_ks',$id_ks)->value('ngaybd');
        // if($ngaybd <= Carbon::now())
        // {  
           
        //     return redirect('admin/khaosat/danhsach/')->with('thongbao2','Đã hết thời gian thay đổi!');
        // }
        // else
         return view('admin.khaosat.sua',['khaosat'=>$khaosat]);

    }
    public function postSua(Request $request, $id_ks){
        $khaosat = Khaosat::find($id_ks);
        $this->validate($request,
       
        [
            'tenks' => 'required|min:4|max:32',
            'ngaybd' => 'required',
            'ngaykt' => 'required',
            'trangthai' => 'required',
    
        ],
        [
            'tenks.requied'=>'Bạn chưa nhập tên người dùng !',
            'tenks.min'=>'Tên người dùng ít nhất 4 ký tự !',
            'tenks.max'=>'Tên người dùng tối đa 6 ký tự !',
            'ngaybd.requied'=>'Bạn chưa chọn ngày bắt đầu !',
            'ngaykt.requied'=>'Bạn chưa chọn ngày kết thúc !',

           
        ]);

        //     $taikhoan = DB::table('khaosat')->where('tenks',$request->tenks)->value('tenks');


        // if(isset($taikhoan) != '')
        // {  

        //     return redirect('admin/khaosat/danhsach/')->with('thongbao2',''.$taikhoan.' đã tồn tại !');
            

        // }
        // else
            $khaosat->tenks = $request['tenks'];
            $khaosat->ngaybd = $request['ngaybd'];
            $khaosat->ngaykt = $request['ngaykt'];
            $khaosat->trangthai = $request['trangthai'];
            $khaosat->updated_at = Carbon::now();
            $khaosat->save();
            return redirect('admin/khaosat/danhsach/')->with('thongbao','Sửa thành công');

    }

    public function getXoa($id_ks){
        $khaosat = Khaosat::find($id_ks);
        $ngaybd = DB::table('khaosat')->where('id_ks',$id_ks)->value('ngaybd');
        // if($ngaybd <= Carbon::now())
        // {  
           
        //     return redirect('admin/khaosat/danhsach/')->with('thongbao2','Đã hết thời gian. Không thể xóa!');
        // }
        // else
        $khaosat->delete();

        return redirect('admin/khaosat/danhsach')->with('thongbao','Xóa thành công !');
    }

    
   

}
