@extends('Admin.common')

@section('AD2_title', '商品添加')

@section('Left_Nav')
    @parent
@endsection

@section('content')




<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <h3>商品主</h3> -->
            <div class="table-responsive">
                 <form action="/admin/good/store" method="post" enctype="multipart/form-data" id="myform">
                 {{ csrf_field() }}
            	 <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th colspan="7"><code>商品主表信息栏</code></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>商品名称</th>
                            <td style="width: 250px;" colspan="2">
                                <input id="n1" type="text" name="goods_name" value=""><span class="s1"></span>
                            </td>
                            <th>商品编号</th>
                            <td style="width:250px;">
                                <input id="n2" type="text" name="goods_sn" value=""><span class="s2"></span>
                            </td>
                            <th>商品说明</th>
                            <td>
                                <input type="text" name="goods_discript" value="" size="30"><span class="s3"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>商品图片：</th>
                            <td colspan="2">
                                <input type="file" name="goods_pic" value="">
                            </td>
                            <td colspan="4">
                            <div class="form-group col-xs-2">
                                分类：
                            </div>
                           

                            <select name="hid" id="">
                                            @foreach($cate as $k => $v)  
                                            <option value="{{$v->id}}">{{$v->cname}}</option>
                                            @endforeach
                                        </select>
                                        
                                         <select name="nid" id="">
                                           
                                            <option value="">--请选择--</option>
                                            @foreach($cate as $k => $v)
                                                @if(substr_count($v->path,',')==0)
                                            <option value="{{$v->id}}">{{$v->cname}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="cl2" id="cl2">
                                           
                                            <option value="">--请选择--</option>
                                            @foreach($cate as $k => $v)
                                                @if(substr_count($v->path,',')==1)
                                            <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="goods_cates" id="">
                                           
                                            <option value="">--请选择--</option>
                                            @foreach($cate as $k => $v)
                                                @if(substr_count($v->path,',')==2)
                                            <option value="{{$v->id}}" id="{{$v->pid}}">{{$v ->cname}}</option>
                                                @endif
                                            @endforeach
                                        </select> 
                                    </td>
                                    </tr>

                                    <tr>
                                        <th>商品价格：</th>
                                        <td>
                                            <code><input type="text" name="goods_price" value=""></code><span class="s4"></span>
                                        </td>
                                         <th>是否促销：</th>
                                         <td>
                                            <input type="radio" name="goods_sales_status" id="gss1" value="1" cheched="">是
                                            <input type="radio" name="goods_sales_status" id="gss2" value="0" checked>否
                                        </td>
                                        <td>
                                            <div class="goods_discount">促销价格：
                                           <input type="text" name="goods_sales_price" value=""></div>
                                        </td>
                                        <th>是否上架</th>
                                        <td>
                                            <input type="radio" name="display" value="1" checked>是
                                            <input type="radio" name="display" value="0">否
                                        </td>
                                        <td> 
                                            <input type="hidden" name="handler" value="Admin session">
                                            <button type="reset" class="btn btn-info text-center">重置</button>
                                        </td>
                                    </tr>
                                </tbody>   
                            </table>
                            <br/>

                       <!-- 商品详情表栏 -->
                                 <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="6"><code>商品详情表添加栏</code></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>商品积分</th>
                                            <td><input type="text" name="goods_score"></td><span class="s5"></span>
                                            <th>商品库存</th>
                                            <td  colspan="2">
                                                <input type="text" name="goods_nums" value=""><span class="s6"></span>
                                            </td> 
                                        </tr>
                                        <tr>
                                        <th>商品副图：</th>
                                            <td>
                                                <input type="file" name="goods_pics[]" value="" multiple>
                                            </td>   
                                            <th>商品套餐组合</th>
                                            <td  colspan="4">
                                                <select name="meal1">
                                                    <option value="">--请选择--</option>
                                                    @foreach($meal as $k=>$v)
                                                    <option id="op1" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>
                                                    @endforeach
                                                </select>
                                                <select name="meal2">
                                                    <option value="">--请选择--</option>
                                                    @foreach($meal as $k=>$v)
                                                    <option id="op2" value="{{ $v['id'] }}">{{ $v['goods_meals_detail'] }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>商品详请</th>
                                            <td colspan="4">
                                                <textarea style="width: 1150px;height:100px" name="goods_tail" placeholder="请严格按照要求填写参数，例如：填写笔记本规格参数："></textarea>
                                            </td><span class="s7"></span>
                                            <td>
                                                <button type="reset" class="btn btn-info">重置</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                <button id="bt1" type="submit" class="btn btn-primary">提交</button>
                                                
                                            </td>
                                        </tr>

                                    </tbody>
                                 </table>
                       </form>
            </div>
        </div>
    </div>
</div>

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
            $('select[name=cl2]').show()
            var ids=$('select[name=nid] option:selected').val()
            for(var i=0;i<$('select[name=hid] option').length;i++){
                $('select[name=cl2] option[id='+ids+']').eq(i).show()
                $('select[name=cl2] option[id!='+ids+']').eq(i).hide()
                $('select[name=cl2] option[id!='+ids+']').eq(0).attr('selected',true)
                $('select[name=goods_cates] option[id!='+ids+']').eq(0).attr('selected',true)  
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
        if(m1){
            $('select[name=meal2] option[value!='+m1+']').show();
        }else{
            $('select[name=meal2] option').hide();
        }
     });

</script>

<script type="text/javascript">
    
    
    $('.goods_discount').hide();
    /*$(function(){
        if($('input[#gss1]:checked') == true){
           $('.goods_discount').show(); 
        }

    })*/


</script>



@endsection



                                