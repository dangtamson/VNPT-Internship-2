@include('layouts.header')
<section class="content-header">
      <h1>
        Tài khoản
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
		<form action="{{route('us_getSearch1')}}" method="POST" class="sidebar-form">
	        <div class="input-group">
	        	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	          	<input type="text" name="search" class="form-control" placeholder="Nhập username viên..." value="@if(isset($id_hocvien)){{$id_hocvien->ma_hv}}@elseif(isset($id_lop)){{$ma_lop}}@endif">
	          	<span class="input-group-btn">
	                <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
	                </button>
	              </span>
	        </div>
      	</form>
	</div>

	
			<table class="table table-hover table-striped">
				<THEAD>
					<tr align="center">
						<th>ID</th>
						<th>HỌ TÊN</th>
						<th>USERNAME</th>
						<th>PASSWORK</th>
						<th>EMAIL</th>
						<th>PHÒNG BAN</th>
						<th>CÔNG VIỆC</th>
						<th>QUYỀN</th>
						<th>NGÀY TẠO</th>

					</tr>
				</THEAD>


				<tbody>
					<tr align="left">
						@if(isset($id_user))
							<td>{{$id_user->id}}</td>
							<td>{{$id_user->name}}</td>
							<td>{{$id_user->username}}</td>
							<td>{{$id_user->check_pass}}</td>
							<td>{{$id_user->email}}</td>
							<td>
								@if($id_user->id_pb == 0)
									{{'Khối chính quyền'}}
								@elseif($id_user->id_pb == 1)
									{{'Khối doanh nghiệp'}}
								
								@endif
							</td>
							<td>
								@if($id_user->id_cv == 0)
									{{'Quản lý'}}
								@elseif($id_user->id_cv == 1)
									{{'Nhân Viên'}}
								
								@endif
							</td>
							<td>
								@if($id_user->quyen == 0)
									{{'Admin'}}
								@elseif($id_user->quyen == 1)
									{{'Nhân Viên'}}
								
								@endif
							</td>
							<td>{{$id_user->created_at}}</td>
							<td><i><a href="sua/{{$id_user->id}}">edit</a></i></td>
							<td><i><a href="xoa/{{$id_user->id}}">delete</a></i></td>
					</tr>
						@else
							@foreach($ds_user as $u)
								<tr align="left">
									<td>{{$u->id}}</td>
									<td>{{$u->name}}</td>
									<td>{{$u->username}}</td>
									<td>{{$u->check_pass}}</td>
									<td>{{$u->email}}</td>
									<td>
										@if($u->id_pb == 0)
											{{'Khối chính quyền'}}
										@elseif($u->id_pb == 1)
											{{'Khối doanh nghiệp'}}
										
										@endif
									</td>
									<td>
										@if($u->id_cv == 0)
											{{'Quản lý'}}
										@elseif($u->id_cv == 1)
											{{'Nhân Viên'}}
										
										@endif
									</td>
									<td>
										@if($u->quyen == 0)
											{{'Admin'}}
										@elseif($u->quyen == 1)
											{{'Nhân Viên'}}
										
										@endif
									</td>
									<td>{{$u->created_at}}</td>
									<td><i><a href="sua/{{$u->id}}">edit</a></i></td>
									<td><i><a href="xoa/{{$u->id}}">delete</a></i></td>
								</tr>
							@endforeach
						@endif
				</tbody>
			</table>

</div>
@include('layouts.footer')