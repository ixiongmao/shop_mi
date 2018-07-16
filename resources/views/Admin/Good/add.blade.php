@extends('Admin.common')

@section('AD2_title', '商品添加')

@section('Left_Nav')
    @parent
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">商品主表信息栏</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <form action="/admin/good/store" method="post" enctype="multipart/form-data" id="myform">
                               {{ csrf_field() }}
                                <div class="form-group input-group" style="width: 500px;">
                                    <span class="input-group-addon">商品名称</span>
                                    <input id="n1" type="text" name="goods_name" value="" class="form-control" placeholder="请输入商品名称" style="width: 250px;"><span class="s1"></span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品编号</span>
                                    <input id="n2" type="text" name="goods_sn" value="" class="form-control" placeholder="请输入商品编号" style="width: 250px;"><span class="s2"></span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品说明</span>
                                     <input type="text" name="goods_discript" value="" class="form-control" style="width: 250px;"><span class="s3"></span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品图片</span>
                                    <input type="file" name="goods_pic" value="" >
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">分类：</span>
                                    <select name="hid" id="">
                                        @foreach($cate as $k => $v)  
                                        <option value="{{$v->id}}">{{$v->cname}}</option>
                                        @endforeach
                                    </select>
                                    
                                     <select name="nid" id="" class="form-control" style="width:200px;">   
                                        <option value="">--请选择--</option>
                                        @foreach($cate as $k => $v)
                                            @if(substr_count($v->path,',')==0)
                                        <option value="{{$v->id}}">{{$v->cname}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <select name="cl2" id="cl2" class="form-control"  style="width:200px;">
                                        <option value="0">--请选择--</option>
                                        @foreach($cate as $k => $v)
                                            @if(substr_count($v->path,',')==1)
                                        <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <select name="goods_cates" id="" class="form-control"  style="width:200px;">  
                                        <option value="0">--请选择--</option>
                                        @foreach($cate as $k => $v)
                                            @if(substr_count($v->path,',')==2)
                                        <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                                            @endif
                                        @endforeach
                                    </select> 
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品价格：</span>
                                    <input type="number" name="goods_price" value="" class="form-control" style="width: 250px;">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">是否促销：</span>
                                    <input type="radio" name="goods_sales_status" id="gss1" value="1" cheched=""  style="width:50px;">是
                                    <input type="radio" name="goods_sales_status" id="gss2" value="0" checked style="width:50px;">否
                                </div>

                                   


                                <divm id="goods_discount" class="form-group input-group">
                                    <span class="input-group-addon">促销价格：</span>
                                     <input type="number" name="goods_sales_price" value="" >元        
                                </div>
                                <div id="goods_start" class="form-group input-group">
                                    <span class="input-group-addon">开始时间：</span>
                                    <input type="datetime" name="goods_sales_start" value=""  class="form-control" placeholder="请输入开始时间">
                                </div>
                                <div id="goods_end" class="form-group input-group">
                                    <span class="input-group-addon">结束时间：</span>
                                    <input type="text" class="form-control" name="goods_sales_end" value="" placeholder="请输入结束时间" id="end_time" lay-key="1">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">是否上架：</span>
                                    <input type="radio" name="display" value="1" checked>是
                                    <input type="radio" name="display" value="0">否
                                </div>
                                 <div class="form-group input-group">
                                    <span class="input-group-addon">商品积分：</span>
                                    <input type="text" name="goods_score" class="form-control"></td><span class="s5"></span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品库存：</span>
                                    <input type="text" name="goods_nums" value="" class="form-control"><span class="s6"></span>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品组图</span>
                                    <input type="file" name="goods_pics[]" value="" multiple>
                                </div>
                                <!-- 商品详情图 预留 -->
                                <div class="form-group input-group">
                                    <span class="input-group-addon">商品组合套餐</span>
                                    <select name="meal1" class="form-control" style="width：250px;">
                                        <option value="0">--请选择--</option>
                                        @foreach($meal as $k=>$v)
                                        <option id="op1" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>
                                        @endforeach
                                    </select>
                                    <select name="meal2" class="form-control" style="width：250px;">
                                        <option value="">--请选择--</option>
                                        @foreach($meal as $k=>$v)
                                        <option id="op2" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">详细参数：</span>
                                    <textarea style="width: 1150px;height:100px" name="goods_tail" placeholder="请严格按照要求填写参数，例如：填写笔记本规格参数："></textarea>
                                </div>
                                <div class="form-group input-group">
                                    <button id="bt1" type="submit" class="btn btn-primary">提交</button>
                                    <button type="reset" class="btn btn-info">重置</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col-lg-6 (nested) -->
                      </div>
                    <!-- /.row (nested) -->
                  </div>
                <!-- /.panel-body -->
              </div>
            <!-- /.panel -->
          </div>
        <!-- /.col-lg-12 -->
      </div>
    <!-- /.row -->
  
                    

<script type="text/javascript">
      layui.use('laydate', function(){
        var laydate = layui.laydate;
        //执行一个laydate实例
        laydate.render({
          elem: '#end_time', //指定元素
          type:'datetime'
        });
      });
</script>


<script type="text/javascript">
    
    $.ajaxSetup({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
    });

    isGood = false;
    isSerial = false;

    //判断商品名
    $('#n1').focus(function(){
        $('.s1').html('请输入商品名');
    });

    $('#n1').blur(function(){
        var gname = $(this).val();
        var user_preg = /^[a-zA-Z\u4e00-\u9fa5]{2,}\-*[a-zA-Z0-9\u4e00-\u9fa5]*$/;
        if(user_preg.test(gname)){
             $.post('/admin/good_ajax/store',{'goods_name':gname},function(msg){
                //console.log(msg);
                if(msg==1){
                    $('.s1').html("<code>商品名称已存在</code>");
                }else{
                    isGood = true;
                    $('.s1').html('<font color="green">商品名可用</font>');
                }
            });
        }else{
            $('.s1').html('<code><q title="商品名必须是汉字或者字母开头">商品名不符合要求</q></code>');
        }
    });


    //判断商品编号
    $('#n2').focus(function(){
        $('.s2').html('请输入商品编号');
    });

     $('#n2').blur(function(){
        var sn = $(this).val();
        var user_preg = /^[a-zA-Z]{2,}[0-9]{4,}$/;
        if(user_preg.test(sn)){
            isSerial = true;
            console.log(isSerial);
            $('.s2').html('<font color="green">商品名可用</font>');
        }else{
            $('.s2').html('<code><q title="商品编号必须是字母开头，以数字结尾">商品编号不符合要求</q></code>');
        }

    });

    myform.onsubmit = function(){
        if(isGood && isSerial){
            return true;
        }else{
          return false;  
        }
     }

</script>

<!-- 商品分类列表 -->
<script>
        $('select[name=hid]').hide()
        $('select[name=cl2]').hide()
        $('select[name=goods_cates]').hide()
        $('select[name=cl2] option').hide()
        $('select[name=goods_cates] option').hide()

        $('select[name=nid]').change(function(){
            $('select[name=cl2]').show();
            /*var sc1 = $('select[name=nid]');*/
         /*   if(sc1){*/
                ids=$('select[name=nid] option:selected').val();
                console.log(ids);
                if(ids){
                    for(var i=0;i<$('select[name=hid] option').length;i++){
                        $('select[name=cl2] option[id='+ids+']').eq(i).show();
                        $('select[name=cl2] option[id!='+ids+']').eq(i).hide();
                        $('select[name=cl2] option[id!='+ids+']').eq(0).attr('selected',true)
                        //$('select[name=goods_cates] option[id!='+ids+']').eq(0).attr('selected',true)  
                    }
                 }else{
                    $('select[name=cl2]').hide();
                    $('select[name=goods_cates]').hide();

                   /*  $('select[name=c12] option[value="0"]').attr('selected',true);  
                     $('select[name=goods_cates] option').eq(0).attr('selected',true);  */
                 }
        })

        $('select[name=cl2]').change(function(){
            $('select[name=goods_cates]').show()
            var ids=$('select[name=cl2] option:selected').val()
            for(var i=0;i<$('select[name=hid] option').length;i++){
                $('select[name=goods_cates] option[id='+ids+']').eq(i).show()
                $('select[name=goods_cates] option[id!='+ids+']').eq(i).hide()
                $('select[name=goods_cates] option[id!='+ids+']').eq(0).attr('selected',true)  
            }
        })
</script>

<!-- 搭配套餐 -->
<script type="text/javascript">
     $('select[name=meal2] option').hide();
     $('select[name=meal1]').change(function(){
        var m1 = $(this).val();
        var m2 = $('select[name=meal2]').val();
        console.log(m2);
        if(m1){
            //console.log(m1);
            $('select[name=meal2] option[value!='+m1+']').show();
            $('select[name=meal2] option[value ='+m1+']').hide();
        }else{
            $('select[name=meal1] option').show();
            $('select[name=meal2] option').hide();
            $('select[name=meal2] option[value="0"]').attr('selected',true);
        } 
     });

     $('select[name=meal2]').change(function(){
        var m3 = $('select[name=meal1]').val();
        var m4 = $(this).val();
        if(m4){
            $('select[name=meal1] option[value='+m4+']').hide();
            $('select[name=meal1] option[value!='+m4+']').show();
        }else{
            $('select[name=meal1] option').show();
            $('select[name=meal2] option[value="0"]').attr('selected',true);
        }
     });





</script>

<!-- 是否隐藏折扣选项 -->
<script type="text/javascript">

       $('#goods_discount').hide();
       $('#goods_start').hide();
       $('#goods_end').hide();
       
       $('#gss1').click(function(){

            if($('#gss1:checked')){
               $('#goods_discount').show(); 
               $('#goods_start').show();
               $('#goods_end').show();
            }
        });

       $('#gss2').click(function(){
            if($('#gss1:checked')){
               $('#goods_discount').hide(); 
               $('#goods_start').hide();
               $('#goods_end').hide();
            }
        });

</script>



@endsection



                                