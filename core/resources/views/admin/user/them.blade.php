@include('layouts.header')
        
<section class="content-header">
      <h1>
        Tài khoản người dùng
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

            @if(session('thongbao2'))
                <div class="alert alert-danger">
                    {{session('thongbao2')}}
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif


            <form action="them" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên người dùng: </label></td>
                            <td><input type="text" name="name" class="form-control" placeholder="Họ tên"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Username: </label></td>
                            <td><input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Password: </label></td>
                            <td><input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Nhập lại Password: </label></td>
                            <td><input type="password" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu"></td>
                        </tr>
                         <tr>
                            <td><label class="control-label">Email: </label></td>
                            <td><input type="text" name="email" class="form-control" placeholder="Nhập email"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Phòng ban: </label></td>
                            <td>
                                <select name="id_pb" class="form-control" id="sel1">
                                    <option value="0">Khối chính quyền</option>
                                    <option value="1">Khối doanh nghiệp</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Công việc: </label></td>
                            <td>
                                <select name="id_cv" class="form-control" id="sel1">
                                    <option value="0">Quản lý</option>
                                    <option value="1">Nhân viên</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Quyền người dùng: </label></td>
                            <td>
                                <select name="quyen" class="form-control" id="sel1">
                                    <option value="0">Admin</option>
                                    <option value="1">Nhân Viên</option>
                                    
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