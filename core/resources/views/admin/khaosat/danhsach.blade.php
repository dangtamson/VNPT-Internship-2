
@include('layouts.header')

<section class="content-header">
      <h1>
        Quản lý đợt khảo sát
        <small>Danh sách</small>
      </h1>

</section>
<br>
    <div>
    <div class="col-lg-7">
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif

    @if(session('thongbao2'))
        <div class="alert alert-danger">
            {{session('thongbao2')}}
        </div>
    @endif

    </div>

    <div style="padding-left: 3%"> 
    </div>
        <form action="{{route('us_getSearch6')}}" method="POST" class="sidebar-form">
            <div class="input-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập username..." value="@if(isset($id_hocvien)){{$id_hocvien->ma_hv}}@elseif(isset($id_lop)){{$ma_lop}}@endif">
                <span class="input-group-btn">
                    <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
    
            
                <tbody>
                    
                        @if(isset($id_ks))
                        <table class="table table-hover table-striped">
                            <THEAD>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>TÊN KHẢO SÁT</th>
                                    <th>NGÀY BẮT ĐẦU</th>
                                    <th>NGÀY KẾT THÚC</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>NGÀY TẠO</th>
                                    <th>CẬP NHẬT MỚI NHẤT</th>

                                </tr>
                            </THEAD>
                            <td>{{$id_ks->id_ks}}</td>
                            <td>{{$id_ks->tenks}}</td>
                            <td>{{$id_ks->ngaybd}}</td>
                            <td>{{$id_ks->ngaykt}}</td>
                            <td>
                                @if($id_ks->trangthai == 0)
                                    {{'Đóng khảo sát'}}
                                @elseif($id_ks->trangthai == 1)
                                    {{'Mở khảo sát'}}
                                @endif
                                    </td>
                            <td>{{$id_ks->created_at}}</td>
                            <td>{{$id_ks->updated_at}}</td>
                            <!-- <td><i><a href="sua/{{$id_ks->id_ks}}">view more</a></i></td> -->
                            <td><i><a href="sua/{{$id_ks->id_ks}}">edit</a></i></td>
                            <td><i><a href="xoa/{{$id_ks->id_ks}}">delete</a></i></td>
                    </table>
                        @else
                        <table class="table table-hover table-striped">
                            <THEAD>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>TÊN KHẢO SÁT</th>
                                    <th>NGÀY BẮT ĐẦU</th>
                                    <th>NGÀY KẾT THÚC</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>NGÀY TẠO</th>
                                    <th>CẬP NHẬT MỚI NHẤT</th>

                                </tr>
                            </THEAD>
                            @foreach($khaosat as $u)
                                <tr align="left">
                                    <td>{{$u->id_ks}}</td>
                                    <td>{{$u->tenks}}</td>
                                    <td>{{$u->ngaybd}}</td>
                                    <td>{{$u->ngaykt}}</td>
                                    <td>
                                        @if($u->trangthai == 0)
                                            {{'Đóng khảo sát'}}
                                        @elseif($u->trangthai == 1)
                                            {{'Mở khảo sát'}}
                                        @endif
                                    </td>
                                    <td>{{$u->created_at}}</td>
                                    <td>{{$u->updated_at}}</td>
                                    <!-- <td><i><a href="xem/{{$u->id_ks}}">view more</a></i></td> -->
                                    <td><i><a href="sua/{{$u->id_ks}}">edit</a></i></td>
                                    <td><i><a href="xoa/{{$u->id_ks}}">delete</a></i></td>
                                </tr>
                            @endforeach
                            </table>
                            <center>{!! $khaosat->links()!!}</center>
                        @endif
                </tbody>
                
            

    </div>
     
          
  @include('layouts.footer')