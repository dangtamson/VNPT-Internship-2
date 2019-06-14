@include('layouts.header')

<section class="content-header">
      <h1>
        Quản lý đợt khảo sát
        <small>Sửa</small>
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


            <form action="/admin/khaosat/sua/{{$khaosat->id_ks}}" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên khảo sát: </label></td>
                            <td><input type="text" name="tenks" class="form-control" placeholder="Nhập tên khảo sát" value="{{$khaosat->tenks}}"></td>
                        </tr>
                        
                        <tr>
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaybd" class="date" placeholder="Chọn ngày bắt đầu" value="{{$khaosat->ngaybd}}">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaykt" class="date" placeholder="Chọn ngày kết thúc" value="{{$khaosat->ngaykt}}">
                            </td>
                        </tr>

                        <tr>
                           
                            <td><label class="control-label">Trạng thái: </label></td>
                            <td>
                                <select name="trangthai" class="form-control" id="sel1">
                                    <option value="0" 
                                        @if($khaosat->trangthai == 0)
                                            {{"selected"}}
                                        @endif
                                        >Đóng khảo sát
                                    </option>
                                    <option value="1"
                                        @if($khaosat->trangthai == 1)
                                            {{"selected"}}
                                        @endif
                                        >Mở khảo sát
                                    </option>
                                </select>
                            </td>
                        
                        </tr>
                       <!--  -->
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Lưu</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>

           
     @include('layouts.footer')
