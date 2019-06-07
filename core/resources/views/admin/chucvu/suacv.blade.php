@include('layouts.header')

<section class="content-header">
      <h1>
        Thông tin chức vụ
        <small>{{$chucvu->tencv}}</small>
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


            <form action="/admin/chucvu/suacv/{{$chucvu->id_cv}}" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên chức vụ: </label></td>
                            <td><input type="text" name="tencv" class="form-control" placeholder="Tên chức vụ" value="{{$chucvu->tencv}}"></td>
                        </tr>                   
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Sửa</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>




@section('script')

@endsection
 @include('layouts.footer')