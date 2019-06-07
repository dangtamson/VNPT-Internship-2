
@include('layouts.header')

<section class="content-header">
      <h1>
        Phòng ban
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
        <form action="{{route('us_getSearch2')}}" method="POST" class="sidebar-form">
            <div class="input-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập username..." value="@if(isset($id_hocvien)){{$id_hocvien->ma_hv}}@elseif(isset($id_lop)){{$ma_lop}}@endif">
                <span class="input-group-btn">
                    <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
    
            <table class="table table-hover table-striped">
                <THEAD>
                    <tr align="center">
                        <th>ID</th>
                        <th>TÊN PHÒNG BAN</th>
                        <th>NGÀY TẠO</th>

                    </tr>
                </THEAD>
                <tbody>
                    <tr align="left">
                        @if(isset($id_pb))
                            <td>{{$id_pb->id_pb}}</td>
                            <td>{{$id_pb->tenpb}}</td>
                            
                            <td>{{$id_pb->created_at}}</td>
                            <td><i><a href="sua/{{$id_pb->id_pb}}">edit</a></i></td>
                            <td><i><a href="xoa/{{$id_pb->id_pb}}">delete</a></i></td>
                    </tr>
                        @else
                            @foreach($phongban as $u)
                                <tr align="left">
                                    <td>{{$u->id_pb}}</td>
                                    <td>{{$u->tenpb}}</td>
                                    <td>{{$u->created_at}}</td>
                                    <td><i><a href="sua/{{$u->id_pb}}">edit</a></i></td>
                                    <td><i><a href="xoa/{{$u->id_pb}}">delete</a></i></td>
                                </tr>
                            @endforeach
                        @endif
                </tbody>
                
            </table>

    </div>
     
          
  @include('layouts.footer')