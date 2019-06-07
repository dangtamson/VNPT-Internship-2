               
@include('layouts.header')
<section class="content-header">
      <h1>
        Sủa thông tin phòng ban
        <small>{{$phongban->tenpb}}</small>
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


            <form action="/admin/phongban/sua/{{$phongban->id_pb}}" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên phòng ban: </label></td>
                            <td><input type="text" name="tenpb" class="form-control" value="{{$phongban->tenpb}}"></td>
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