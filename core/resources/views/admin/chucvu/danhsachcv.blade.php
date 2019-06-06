@include('layouts.header')

<section class="content-header">
      <h1>
        Thông tin chức vụ
        <small>Danh sách chức vụ</small>
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

		<form action="{{route('us_getSearch3')}}" method="POST" class="sidebar-form">
	        <div class="input-group">
	        	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	          	<input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập tên chức vụ..." value="@if(isset($id_hocvien)){{$id_hocvien->ma_hv}}@elseif(isset($id_lop)){{$ma_lop}}@endif">
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
						<th>TÊN CHỨC VỤ</th>
						<th>NGÀY TẠO</th>
					</tr>
				</THEAD>
				<tbody>
					<tr align="left">

						@if(isset($id_chucvu))	
							<td>{{$id_chucvu->id_cv}}</td>										
							<td>{{$id_chucvu->tencv}}</td>
							<td>{{$id_chucvu->created_at}}</td>
							<td><i><a href="suacv/{{$id_chucvu->id_cv}}">edit</a></i></td>
							<td><i><a href="xoacv/{{$id_chucvu->id_cv}}">delete</a></i></td>

					</tr>
						@else
							@foreach($chucvu as $u)
								<tr align="left">
									<td>{{$u->id_cv}}</td>
									<td>{{$u->tencv}}</td>						
									<td>{{$u->created_at}}</td>
									<td><i><a href="suacv/{{$u->id_cv}}">edit</a></i></td>
									<td><i><a href="xoacv/{{$u->id_cv}}">delete</a></i></td>

								</tr>
							@endforeach
						@endif
				</tbody>
				
			</table>

	</div>
     
          
@include('layouts.footer')
