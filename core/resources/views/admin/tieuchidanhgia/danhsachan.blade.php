@include('layouts.header')

<section class="content-header">
      <h1>
        Tiêu chí đánh giá
        <small>Danh sách ẩn</small>
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
		<form action="{{route('us_getSearch5')}}" method="POST" class="sidebar-form">
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
									<th>NỘI DUNG</th>
									<th>TRẠNG THÁI</th>
									<th>LĨNH VỰC</th>
									<th>ĐỢT KHẢO SÁT</th>
									<th>NGÀY TẠO</th>
									<th>CẬP NHẬT MỚI NHẤT</th>

								</tr>
							</THEAD>
							<td>{{$id_user->id_ch}}</td>
									<td>{{$id_user->noidungch}}</td>
									<td>@if($id_user->trangthai == 0)
									{{'Ẩn'}}
								@elseif($id_user->trangthai == 1)
									{{'Hiện'}}
								@endif</td>
									<td>
										@foreach($linhvuc as $lv)
											@if($id_user->id_lv == $lv->id_lv)
												{{$lv->tenlv}}
											@endif
										@endforeach

									</td>
									<td>
										@foreach($khaosat as $ks)
											@if($id_user->id_ks == $ks->id_ks)
												{{$ks->tenks}}
											@endif
										@endforeach

									</td>
									<td>{{$id_user->created_at}}</td>
									<td>{{$id_user->updated_at}}</td>
									<td><i><a href="sua/{{$id_user->id_ch}}">edit</a></i></td>
									<td><i><a href="xoa/{{$id_user->id_ch}}">delete</a></i></td>

					</table>
						@else
						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>NỘI DUNG</th>
									<th>TRẠNG THÁI</th>
									<th>LĨNH VỰC</th>
									<th>ĐỢT KHẢO SÁT</th>
									<th>NGÀY TẠO</th>
									<th>CẬP NHẬT MỚI NHẤT</th>

								</tr>
							</THEAD>
							@foreach($tieuchidanhgia as $u)
								<tr align="left">
									<td>{{$u->id_ch}}</td>
									<td>{{$u->noidungch}}</td>
									<td>@if($u->trangthai == 0)
									{{'Ẩn'}}
								@elseif($u->trangthai == 1)
									{{'Hiện'}}
								@endif</td>
									<td>
										@foreach($linhvuc as $lv)
											@if($u->id_lv == $lv->id_lv)
												{{$lv->tenlv}}
											@endif
										@endforeach

									</td>
									<td>
										@foreach($khaosat as $ks)
											@if($u->id_ks == $ks->id_ks)
												{{$ks->tenks}}
											@endif
										@endforeach

									</td>
									
									<td>{{$u->created_at}}</td>
									<td>{{$u->updated_at}}</td>
									<td><i><a href="sua/{{$u->id_ch}}">edit</a></i></td>
									<td><i><a href="xoa/{{$u->id_ch}}">delete</a></i></td>
									
								</tr>
							@endforeach
						
						</table>
						<center>{!! $tieuchidanhgia->links()!!}</center>
						@endif

				</tbody>

	</div>
     
          
    @include('layouts.footer')