@extends('Admin.common')

@section('AD2_title', '商品修改')

@section('Left_Nav')
    @parent
@endsection

@section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">@yield('AD2_title')</div>
          <div class="panel-body">
            <form action="/admin/goods/store" method="post" enctype="multipart/form-data" id="myform">
              {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-6">
                  <div class="form-group">
                    <label>状态</label>
                    <label class="radio-inline">
                      <input type="radio" name="goods_status" value="0">下架</label>
                    <label class="radio-inline">
                      <input type="radio" name="goods_status" value="1" checked>上架</label></div>
                  <div class="form-group input-group">
                    <span class="input-group-addon">商品名称</span>
                    <input type="text" class="form-control" name="" placeholder="请输入商品名称"></div>
                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">商品价格</span>
                        <input type="text" class="form-control" name="goods_price" placeholder="请输入商品价格"></div>
                      <!-- /input-group --></div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">商品库存</span>
                        <input type="text" class="form-control" name="goods_nums" placeholder="请输入商品库存"></div>
                      <!-- /input-group --></div>
                    <!-- /.col-lg-6 --></div>
                  <!-- /.row -->
                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>主分类</label>
                        <select class="form-control" name="nid" id="">
                          <option value="">--请选择--</option>
                          @foreach($cate as $k => $v)
                            @if(substr_count($v->path,',')==0)
                          <option value="{{$v->id}}">{{$v->cname}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>分类</label>
                        <select class="form-control" name="cl2" id="cl2">
                          <option value="0">--请选择--</option>
                          @foreach($cate as $k => $v)
                            @if(substr_count($v->path,',')==1)
                              <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>分类</label>
                        <select class="form-control" name="goods_cates" id="cl2">
                          <option value="0">--请选择--</option>
                          @foreach($cate as $k => $v)
                            @if(substr_count($v->path,',')==2)
                              <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <select class="form-control" name="hid" id="">
                          @foreach($cate as $k => $v)
                            <option value="{{$v->id}}">{{$v->cname}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group input-group">
                    <span class="input-group-addon">商品详细</span>
                    <input type="text" class="form-control" name="goods_discript" placeholder="请输入商品详细"></div>
                  <div class="form-group input-group">
                    <span class="input-group-addon">商品主图</span>
                    <input type="text" class="form-control" name="goods_pic" placeholder="请输入商品主图(点击框内即可提交上传)" id="picture"></div>
                  <div class="form-group">
                    <label>商品组图</label>
                    <textarea name="goods_pics[]" class="form-control" rows="3" id="slideshow"></textarea>
                  </div>
                  <div class="form-group">
                    <label>商品详细</label>
                    <textarea name="goods_tail" class="form-control" rows="3" id="d_content"></textarea>
                  </div>
                  <div class="form-group">
                    <label>商品参数</label>
                    <textarea name="goods_tail" class="form-control" rows="3" id="d_content"></textarea>
                  </div>
              </div>
              <!-- /.col-lg-6 (nested) -->
              <div class="col-lg-6">
                  <div class="form-group">
                    <label>是否促销</label>
                    <label class="radio-inline">
                      <input type="radio" name="goods_sales_status" value="1" id="gss1">是</label>
                    <label class="radio-inline">
                      <input type="radio" name="goods_sales_status" value="0" checked id="gss2">否</label></div>
                  <div id="goods_discount" class="form-group input-group">
                    <span class="input-group-addon">促销价格</span>
                    <input type="text" class="form-control" name="goods_sales_price" placeholder="请输入促销价格"></div>
                  <div id="goods_start" class="form-group input-group">
                    <span class="input-group-addon">开始时间</span>
                    <input type="text" class="form-control" name="goods_sales_start" placeholder="请输入开始时间"></div>
                  <div id="goods_end" class="form-group input-group">
                    <span class="input-group-addon">结束时间</span>
                    <input type="text" class="form-control" name="goods_sales_end" placeholder="请输入结束时间"></div>
                  <div class="row" style="margin-bottom: 15px;">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">商品编号</span>
                        <input type="text" class="form-control" name="goods_sn" placeholder="请输入商品编号" id="n2">
                        <span class="s2"></span>
                      </div>
                      <!-- /input-group --></div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">商品积分</span>
                        <input type="text" class="form-control" name="goods_score" placeholder="请输入商品积分">
                        <span class="s5"></span>
                      </div>
                      <!-- /input-group --></div>
                    <!-- /.col-lg-6 --></div>
                  <!-- /.row -->
                  <div class="form-group input-group">
                    <span class="input-group-addon">商品组合套餐</span>
                    <select name="meal1" class="form-control" style="width：250px;">
                      <option value="0">--请选择--</option>@foreach($meal as $k=>$v)
                      <option id="op1" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>@endforeach</select>
                    <select name="meal2" class="form-control" style="width：250px;">
                      <option value="">--请选择--</option>@foreach($meal as $k=>$v)
                      <option id="op2" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>@endforeach</select></div>
              </div>
              <!-- /.col-lg-6 (nested) --></div>
              <input type="submit" class="btn btn-primary" value="提交">
                </form>
            <!-- /.row (nested) --></div>
          <!-- /.panel-body --></div>
        <!-- /.panel --></div>
      <!-- /.col-lg-12 --></div>
    <!-- /.row -->
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
            $('select[name=hid]').hide();
            $('select[name=cl2]').hide();
            $('select[name=goods_cates]').hide();
            $('select[name=cl2] option').hide();
            $('select[name=goods_cates] option').hide();

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
