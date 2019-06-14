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

                                </tr>
                            </THEAD>
                            
                                @foreach($tieuchidanhgia as $tc)
                                @if($khaosat->id_ks == $tc->id_ks)
                             <tr align="left">                              
                            <td>{{$tc->noidungch}}</td>       
                            <td><input type="radio" name="tl" value="1"></td>
                            <td><input type="radio" name="tl" value="2"></td>
                            <td><input type="radio" name="tl" value="3"></td>
                            <td><input type="radio" name="tl" value="4"></td>
                            <td><input type="radio" name="tl" value="5"></td>
                            </tr>
                            @endif
                                @endforeach
                            
                    </table>
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <a href="/admin/khaosat/danhsach" name="btn_submit" class="btn btn-success" style="width: 8em">Back</a>
                            </td>
                        </tr>
                   
                </div>
            </form>
        </div>
</div>

           
     @include('layouts.footer')
