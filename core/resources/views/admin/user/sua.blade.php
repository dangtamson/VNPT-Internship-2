@include('layouts.header')

<section class="content-header">
      <h1>
        Tài khoản người dùng
        <small>{{$user->username}}</small>
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


			@if(session('thongbao'))
				<div class="alert alert-success">
					{{session('thongbao')}}
				</div>
			@endif


  			<form action="/admin/user/sua/{{$user->id}}" method="post" class="form-horizontal"> 
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="form-group">
					<table class="table table-hover table-striped">
						<tr>
							<td><label class="control-label">Tên người dùng: </label></td>
							<td><input type="text" name="name" class="form-control" placeholder="Họ tên" value="{{$user->name}}"></td>
						</tr>
						<tr>
							<td><label class="control-label">Username: </label></td>
							<td><input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản" value="{{$user->username}}" ></td>
						</tr>
						<!-- <tr>
							<td>
								<label class="control-label">Password mới </label>
							</td>
							<td><input type="text" name="password" class="form-control password" placeholder="Nhập mật khẩu mới" value="{{$user->check_pass}}"> 
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Nhập lại Password: </label></td>
							<td><input type="text" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu" value="{{$user->check_pass}}"></td>
						</tr> -->
						<tr>
							<td><label class="control-label">Email: </label></td>
							<td><input type="text" name="email" class="form-control" placeholder="Họ tên" value="{{$user->email}}"></td>
						</tr>
						<tr>
                           
							<td><label class="control-label">Giới tính: </label></td>
							<td>
								<select name="gioitinh" class="form-control" id="sel1">
									<option value="0" 
										@if($user->gioitinh == 0)
											{{"selected"}}
										@endif
										>Nam
									</option>
									<option value="1"
										@if($user->gioitinh == 1)
											{{"selected"}}
										@endif
										>Nữ
									</option>
								</select>
							</td>
						
                        </tr>
						<tr>
							<td><label class="control-label">Phòng ban: </label></td>
							<td>
								<select name="id_pb" class="form-control" id="sel1">
									 @foreach ($phongban_array as $data)
                                    <option value="{{ $data->id_pb }}">{{ $data->tenpb}}</option>
                                    @endforeach
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Chức vụ: </label></td>
							<td>
								<select name="id_cv" class="form-control" id="sel1">
									@foreach ($chucvu_array as $data)
                                    <option value="{{ $data->id_cv }}">{{ $data->tencv}}</option>
                                    @endforeach
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Quyền người dùng: </label></td>
							<td>
								<select name="quyen" class="form-control" id="sel1">
									<option value="0" 
										@if($user->quyen == 0)
											{{"selected"}}
										@endif
										>Admin
									</option>
									<option value="1"
										@if($user->quyen == 1)
											{{"selected"}}
										@endif
										>Nhân Viên
									</option>
								</select>
							</td>
						</tr>
						
						<tr style="background-color: white">
							<td colspan="2" align="center">
								<button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Lưu</button>
								<a href="/admin/user/danhsach" name="btn_back" class="btn btn-info" style="width: 8em">Back</a>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
</div>





  @include('layouts.footer')