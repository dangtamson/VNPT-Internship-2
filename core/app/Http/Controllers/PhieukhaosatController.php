<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tieuchidanhgia;
use App\Phieukhaosat;
use App\Khaosat;
use App\Linhvuc;
use Carbon\Carbon;
use DB;
class PhieukhaosatController extends Controller
{
    public function prodfunct(){
        $prod = Linhvuc::all();
        return view('admin.phieukhaosat.them', compact('prod'));
    }

    public function findProductName(Request $request){
        $data = Tieuchidanhgia::select('noidungch','id_ch')->where('id_lv', $request->id_lv)->take(100)->get();
        return response()->json($data);
    }
   
    public function getThem(){
        $prod = Linhvuc::all();
        return view('admin.phieukhaosat.them', compact('prod'));
    }

    public function postThem(Request $request){
        $this->validate($request,
        [
            'id_ch' => 'required',
            'id_ks' => 'required',
            
        ],
        [
            'tench.requied'=>'Bạn chưa chọn câu hỏi !',
            'tenks.requied'=>'Bạn chưa chọn đợt khảo sát !',
                 
        ]);

        $check = [
            ['id_ch','=' , $request->id_ch ],
            ['id_ks','=',$request->id_ks],
        ];
        
        $get = DB::table('phieukhaosat')->where($check)->value('id_pks');
        
        if( $get != ''){
            return redirect('admin/phieukhaosat/them')->with('thongbao2','Đã tồn tại. Không thể thêm');
        }
        else
            $phieukhaosat = new Phieukhaosat;
            $phieukhaosat->id_ch = $request->id_ch;
            $phieukhaosat->id_ks = $request->id_ks;
            $phieukhaosat->created_at = Carbon::now();
            $phieukhaosat->updated_at = Carbon::now();
            $phieukhaosat->save();
            return redirect('admin/phieukhaosat/them')->with('thongbao','Thêm thành công');

    }

        
    public function getXoa1($id_pks){
        $phieukhaosat = Phieukhaosat::find($id_pks);
       // $khaosat = Khaosat::find($id_pks);
        
        $phieukhaosat->delete();
        // return redirect('admin/khaosat/xem/',['khaosat'=>$khaosat])->with('thongbao','Xóa thành công !');
        return redirect('admin/khaosat/danhsach');

        
    }

   



}



