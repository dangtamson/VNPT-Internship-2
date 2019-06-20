@include('layouts.header')
        
<section class="content-header">
      <h1>
        Phiếu khảo sát
        <small>Tạo</small>
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

            <br><br>
            <form action="them" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                   
                            
    
                                
                                <label class="control-label" style="font-size: 17px" ><b>Lĩnh vực: </b></label>
                                <select name="id_lv" style="width: 700px"  class=" form-control productcategory" id="id_lv">
                                    
                                    <option value="0" disabled="true" selected="true">-Lĩnh vực-</option>
                                    @foreach($prod as $cat)
                                        <option value="{{$cat->id_lv}}">{{$cat->tenlv}}</option>
                                    @endforeach

                                </select>
                                
                                <br>
                              
                                <label class="control-label" style="font-size: 17px"><b>Tiêu chí đánh giá: </b></label>
                                
                                <select name="id_ch" style="width: 700px" class="form-control productname">

                                    <option value="0" disabled="true" selected="true">-Tiêu chí đánh giá-</option>
                                </select>
                            <br>
                                
                                <label class="control-label" style="font-size: 17px"><b>Đợt khảo sát: </b></label>
                                &nbsp
                                <select name="id_ks" style="width: 700px" class="form-control">

                                    <option value="0" disabled="true" selected="true">-Chọn đợt khảo sát-</option>
                                    @foreach ($khaosat_array as $data)
                                    <option value="{{ $data->id_ks }}">{{ $data->tenks}}</option>
                                    @endforeach
                                </select>


                            

                                
                            
                        
                        <!-- <tr style="background-color: white">
                            <td colspan="2" align="center"> -->
                                <br><br>
                               <center>
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Thêm</button>
                            </center>
                            <!-- </td>
                        </tr> -->
                    </table>
                </div>
            </form>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            // console.log("hmm its change");

            var id_lv=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id_lv':id_lv},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>Chọn tiêu chí đánh giá</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_ch+'">'+data[i].noidungch+'</option>';
                   }

                   div.find('.productname').html(" ");
                   div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });

        

    });
</script>

     
     @include('layouts.footer')
