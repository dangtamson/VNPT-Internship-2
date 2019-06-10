@include('layouts.header')

<section class="content-header">
      <h1>
        Thông tin lĩnh vực
        <small>Danh sách lĩnh vực</small>
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

		<form action="{{route('us_getSearch4')}}" method="POST" class="sidebar-form">
	        <div class="input-group">
	        	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	          	<input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập tên chức vụ..." value="@if(isset($id_hocvien)){{$id_hocvien->ma_hv}}@elseif(isset($id_lop)){{$ma_lop}}@endif">
	          	<span class="input-group-btn">
	                <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
	                </button>
	              </span>
	        </div>
      	</form>
	
			
				<tbody>
					@if(isset($id_linhvuc))	
					<table class="table table-hover table-striped">
						<THEAD>
							<tr align="center">
								<th>ID</th>
								<th>TÊN LĨNH VỰC</th>
								<th>NGÀY TẠO</th>
							</tr>
						</THEAD>
						
							<td>{{$id_linhvuc->id_lv}}</td>										
							<td>{{$id_linhvuc->tenlv}}</td>
							<td>{{$id_linhvuc->created_at}}</td>
							<td><i><a href="sualv/{{$id_linhvuc->id_lv}}">edit</a></i></td>
							<td><i><a href="xoalv/{{$id_linhvuc->id_lv}}">delete</a></i></td>

					</table>
						@else
						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>TÊN LĨNH VỰC</th>
									<th>NGÀY TẠO</th>
								</tr>
							</THEAD>
							@foreach($linhvuc as $u)
								<tr align="left">
									<td>{{$u->id_lv}}</td>
									<td>{{$u->tenlv}}</td>						
									<td>{{$u->created_at}}</td>
									<td><i><a href="sualv/{{$u->id_lv}}">edit</a></i></td>
									<td><i><a href="xoalv/{{$u->id_lv}}">delete</a></i></td>

								</tr>
							@endforeach
							</table>
							<center>{!! $linhvuc->links()!!}</center>
						@endif
				</tbody>
				
			

	</div>
     
          
    @include('layouts.footer')
