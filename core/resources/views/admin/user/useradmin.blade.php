@include('layouts.header')

<section class="content-header">
      <h1>
        Tài khoản người dùng
        <small>Admin</small>
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
		<form action="{{route('us_getSearch1')}}" method="POST" class="sidebar-form">
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
					
						@if(isset($id_user))

						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>HỌ TÊN</th>
									<th>GIỚI TÍNH</th>
									<th>USERNAME</th>
									<!-- <th>PASSWORD</th> -->
									<th>EMAIL</th>
									<th>PHÒNG BAN</th>
									<th>CHỨC VỤ</th>
									<th>QUYỀN</th>
									<th>NGÀY TẠO</th>
									<th>CẬP NHẬT MỚI NHẤT</th>

								</tr>
							</THEAD>
							<td>{{$id_user->id}}</td>
							<td>{{$id_user->name}}</td>
							<td>@if($id_user->gioitinh == 0)
									{{'Nam'}}
								@elseif($id_user->gioitinh == 1)
									{{'Nữ'}}
								@endif</td>
							<td>{{$id_user->username}}</td>
							<!-- <td>{{$id_user->check_pass}}</td> -->
							<td>{{$id_user->email}}</td>
							<td>
										@foreach($phongban as $pb)
											@if($id_user->id_pb == $pb->id_pb)
												{{$pb->tenpb}}
											@endif
										@endforeach

									</td>
									<td>
										@foreach($chucvu as $cv)
											@if($id_user->id_cv == $cv->id_cv)
												{{$cv->tencv}}
											@endif
										@endforeach

									</td>
							<td>
								@if($id_user->quyen == 0)
									{{'Admin'}}
								@elseif($id_user->quyen == 1)
									{{'Nhân Viên'}}
								@endif
							</td>
							<td>{{$id_user->created_at}}</td>
							<td>{{$id_user->updated_at}}</td>
							<td><i><a href="sua/{{$id_user->id}}">edit</a></i></td>
							<td><i><a href="xoa/{{$id_user->id}}">delete</a></i></td>
							<td><i><a href="getpass/{{$id_user->id}}">View Password</a></i></td>
							</table>
						@else

						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>HỌ TÊN</th>
									<th>GIỚI TÍNH</th>
									<th>USERNAME</th>
									<!-- <th>PASSWORD</th> -->
									<th>EMAIL</th>
									<th>PHÒNG BAN</th>
									<th>CHỨC VỤ</th>
									<th>QUYỀN</th>
									<th>NGÀY TẠO</th>
									<th>CẬP NHẬT MỚI NHẤT</th>

								</tr>
							</THEAD>
							@foreach($ds_user as $u)
								<tr align="left">
									<td>{{$u->id}}</td>
									<td>{{$u->name}}</td>
									<td>@if($u->gioitinh == 0)
									{{'Nam'}}
								@elseif($u->gioitinh == 1)
									{{'Nữ'}}
								@endif</td>
									<td>{{$u->username}}</td>
									<!-- <td>{{$u->check_pass}}</td> -->
									<td>{{$u->email}}</td>
									<td>
										@foreach($phongban as $pb)
											@if($u->id_pb == $pb->id_pb)
												{{$pb->tenpb}}
											@endif
										@endforeach

									</td>
									<td>
										@foreach($chucvu as $cv)
											@if($u->id_cv == $cv->id_cv)
												{{$cv->tencv}}
											@endif
										@endforeach

									</td>
									<td>
										@if($u->quyen == 0)
											{{'Admin'}}
										@elseif($u->quyen == 1)
											{{'Nhân Viên'}}
										
										@endif
									</td>
									<td>{{$u->created_at}}</td>
									<td>{{$u->updated_at}}</td>
									<td><i><a href="sua/{{$u->id}}">edit</a></i></td>
									<td><i><a href="xoa/{{$u->id}}">delete</a></i></td>
									<td><i><a href="getpass/{{$u->id}}">View Password</a></i></td>
								</tr>
							@endforeach
							</table>
							<center>{!! $ds_user->links()!!}</center>
						@endif
				</tbody>
				
			

	</div>
     
          
    @include('layouts.footer')