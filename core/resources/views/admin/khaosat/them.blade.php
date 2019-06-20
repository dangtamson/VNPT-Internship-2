@include('layouts.header')

<section class="content-header">
      <h1>
        Quản lý khảo sát
        <small>Thêm</small>
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
            @if(session('thongbao2'))
                <div class="alert alert-danger">
                    {{session('thongbao2')}}
                </div>
            @endif


            <form action="them" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên khảo sát: </label></td>
                            <td><input type="text" name="tenks" class="form-control" placeholder="Nhập tên khảo sát"></td>
                        </tr>
                        
                        <tr>
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaybd" class="date" placeholder="Chọn ngày bắt đầu">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaykt" class="date" placeholder="Chọn ngày kết thúc">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Trạng thái: </label></td>
                            <td>
                                <select name="trangthai" class="form-control" id="gioitinh">
                                    <option value="0">Đóng khảo sát</option>
                                    <option value="1">Mở khảo sát</option>
                                    
                                </select>
                            </td>
                        </tr>
                    

                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Thêm</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>

           
     @include('layouts.footer')
