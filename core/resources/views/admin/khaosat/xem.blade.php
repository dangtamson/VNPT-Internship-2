@include('layouts.header')

<section class="content-header">
      <h1>
        Quản lý khảo sát
        <small>Xem khảo sát</small>
      </h1>

</section>
<br>
<div>
        <div class="col-lg-7">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>

            @endif

            @if(session('thongbao1'))
                <div class="alert alert-danger">
                    {{session('thongbao1')}}
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif


            <form action="" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên khảo sát: </label></td>
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            
                        </tr>
                        
                        <tr>
                            <td><a type="text" name="tenks" class="form-control" placeholder="Nhập tên khảo sát" value="">{{$khaosat->tenks}}</a></td>
                            <td>
                                <a type="date" class="form-control" name="ngaybd" class="date" placeholder="Chọn ngày bắt đầu" value="">{{$khaosat->ngaybd}}</a></td>
                            <td>
                                <a type="date" class="form-control" name="ngaykt" class="date" placeholder="Chọn ngày kết thúc" value="">{{$khaosat->ngaykt}}</a>
                            </td>
                        </tr>
                         </table>
                       
                        
                         <table class="table table-hover table-striped">
                            <THEAD>
                                <tr align="center">
                                    <th>TIÊU CHÍ ĐÁNH GIÁ</th>
                                    <th>RẤT KHÔNG HÀI LÒNG</th>
                                    <th>KHÔNG HÀI LÒNG</th>
                                    <th>BÌNH THƯỜNG</th>
                                    <th>HÀI LÒNG</th>
                                    <th>RẤT HÀI LÒNG</th>
                                    <th></th>

                                </tr>
                            </THEAD>
                            
                                @foreach($phieukhaosat as $tc)
                                    @foreach($tieuchidanhgia as $c)
                                        @if($khaosat->id_ks == $tc->id_ks && $tc->id_ch == $c->id_ch)

                               
                               
                                     <tr align="center">                              
                                    <td>{{$c->noidungch}}</td>  
                                       
                                    <td><input type="radio" name="{{$tc->id_pks}}" value="1"></td>
                                    <td><input type="radio" name="{{$tc->id_pks}}" value="2"></td>
                                    <td><input type="radio" name="{{$tc->id_pks}}" value="3"></td>
                                    <td><input type="radio" name="{{$tc->id_pks}}" value="4"></td>
                                    <td><input type="radio" name="{{$tc->id_pks}}" value="5"></td>
                                    <td><i><a href="/admin/phieukhaosat/xoa1/{{$tc->id_pks}}"><i style="color: red" class="fas fa-times"></i></a></i></td>
                                   
                                    </tr>
                                    @endif
                                    @endforeach
                                @endforeach
                            
                    </table>
                        <center>{!! $phieukhaosat->links()!!}</center>
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <center>
                                <a href="/admin/khaosat/danhsach" name="btn_submit"  class="btn btn-info"  style="width: 10em">Back</a>
                                <a href="/admin/phieukhaosat/them" name="btn_submit" class="btn btn-success" style="width: 10em">Thêm tiêu chí</a>
                                </center>
                            </td>
                        </tr>
                   
                </div>
            </form>
        </div>

</div>


@include('layouts.footer')
