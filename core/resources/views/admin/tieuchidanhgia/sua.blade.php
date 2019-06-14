@include('layouts.header')
        
<section class="content-header">
      <h1>
        Tiêu chí đánh giá
        <small>Sửa</small>
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


            <form action="/admin/tieuchidanhgia/sua/{{$tieuchidanhgia->id_ch}}" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Nội dung: </label></td>
                            <td><input type="text" name="noidungch" class="form-control" value =" {{$tieuchidanhgia->noidungch}}"></td>
                        </tr>
                       
                        <!-- <tr>
                            <td><label class="control-label">Trạng thái: </label></td>
                            <td>
                                <select name="trangthai" class="form-control" id="gioitinh">
                                    <option value="0"
                                        @if($tieuchidanhgia->trangthai == 0)
                                            {{"selected"}}
                                        @endif>
                                        Ẩn</option>
                                    <option value="1"
                                        @if($tieuchidanhgia->trangthai == 1)
                                            {{"selected"}}
                                        @endif>
                                        Hiện
                                    </option>
                                    
                                </select>
                            </td>
                        </tr> -->
                        <tr>
                            <td><label class="control-label">Lĩnh vực: </label></td>
                            <td>
                                <select name="id_lv" class="form-control" id="sel1">

                                    @foreach ($linhvuc_array as $data)
                                    <option value="{{ $data->id_lv }}">{{ $data->tenlv}}</option>
                                    @endforeach
                                    
                                </select>
                            </td>
                            
                        </tr>
                        <!-- <tr>
                            <td><label class="control-label">Đợt khảo sát: </label></td>
                            <td>
                                <select name="id_ks" class="form-control" id="sel1">

                                    @foreach ($khaosat_array as $data)
                                    <option value="{{ $data->id_ks }}">{{ $data->tenks}}</option>
                                    @endforeach
                                    
                                </select>
                            </td>
                        </tr> -->
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Lưu</button>
                                <a href="/admin/tieuchidanhgia/danhsach" name="btn_back" class="btn btn-info" style="width: 8em">Back</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>

           
     @include('layouts.footer')
