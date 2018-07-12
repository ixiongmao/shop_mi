@extends('Admin.common')

@section('AD2_title', '商品详情添加')

@section('Left_Nav')
    @parent
@endsection

@section('content')

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <h3>商品主</h3> -->
            <div class="table-responsive">
                 <form action="/admin/good/update/" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                 <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th colspan="8"><code>商品主表信息栏</code></th>
                        </tr>
                    </thead>
                    @foreach($goods as $key => $val)
                    <tbody>
                        <tr>
                            <th>商品名称</th>
                            <td style="width: 300px;">
                                <input type="hidden" name="id" value="{{ $val['id'] }}">
                                <input type="text" id="n1" name="goods_name" value="{{ $val['goods_name'] }}"><span class="s1"></span>
                            </td>
                            <th>商品编号</th>
                            <td style="width:250px;">
                                <input type="text" name="goods_sn" value="{{ $val['goods_sn'] }}">
                            </td>
                            <th>商品说明</th>
                            <td colspan="3">
                                <input type="text" name="goods_discript" value="{{ $val['goods_discript'] }}" size="30">
                            </td>
                        </tr>
                        <tr>
                            <th>商品图片：</th>
                            <td>
                                <input type="file" name="goods_pic" value="{{ $val['goods_pic'] }}">
                            </td>
                            <th>分类：</th>
                            <td>{{ $val['goods_cates'] }}</td>
                            <th>分类更改：</th>
                            <td colspan="3">
                                <select name="nid" id="">
                                    <option>--请选择--</option>
                                        @foreach($cate as $k=>$v)
                                        @if(substr_count($v->path,',')==0)
                                        <option value="{{ $v->id }}">{{ $v->cname}}</option>
                                        @endif
                                        @endforeach
                                </select>
                                <select name="c12" id="c12">
                                    <option>--请选择--</option>
                                        @foreach($cate as $k=>$v)
                                        @if(substr_count($v->path,',')==1)
                                        <option id="{{ $v->pid }}" value="{{ $v->id }}">{{ $v->cname}}</option>
                                        @endif
                                        @endforeach
                                </select>
                                <select name="goods_cates" id="">
                                    <option>--请选择--</option>
                                        @foreach($cate as $k=>$v)
                                        @if(substr_count($v->path,',')==2)
                                        <option id="{{ $v->pid }}" value="{{ $v->id }}">{{ $v->cname}}</option>
                                        @endif
                                        @endforeach
                                </select>
                            </td>
                               
                         </tr>

                        <tr>
                            <th>商品价格：</th>
                            <td>
                                <code><input type="text" name="goods_price" value="{{ $val['goods_price'] }}"></code>
                            </td>
                            <th>是否上架</th>
                            <td>{{ $val['display'] }}</td>
                            <td class="text-muted">
                                <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="dispaly" id="optionsRadiosInline1" value="1" checked>是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="dispaly" id="optionsRadiosInline2" value="0">否
                            </label>
                            </td>
                             <th>操作人：</th>
                                <td>{{ $val['handler'] }} </td>
                            <td> 
                                <button type="reset" class="btn btn-info text-center">重置</button>
                            </td>
                        </tr>
                    </tbody>   
                    @endforeach        
                </table>
                <br/>

       <!-- 商品详情表栏 -->
              
                 <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th colspan="6"><code>商品详情表添加栏</code></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($details as $ka => $va)
                                <th>商品品牌</th>
                                <td><input type="text" name="goods_brand" value="{{ $va['goods_brand'] }}"></td>
                                <th>商品库存</th>
                                <td colspan="2">
                                    <input type="text" name="goods_nums" value="{{ $va['goods_nums'] }}">
                                </td>
                              
                            </tr>
                            <tr>   
                                <th>商品副图：</th>
                                <td>{{ $va['goods_pics'] }}</td>
                                <td colspan="5">
                                    <input type="file" name="goods_pics[]" value="" multiple>
                                </td>
                            </tr>
                            <tr>
                                <th>商品详请</th>
                                <td colspan="6">
                                    <textarea style="width: 1200px;height:100px" name="goods_tail" value="">{{ $va['goods_tail'] }}</textarea>
                                </td>
                            </tr>
                            <tr>
                                    
                                <td colspan="2">
                                    <button type="reset" class="btn btn-info">重置</button>
                                </td>
                            </tr> 
                       
                            <tr>
                                <td colspan="6">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                    
                                </td>
                            </tr>

                        </tbody>
                     </table>
                      @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.s1').hide();
    g1 = $('#n1').val();
    $.ajaxSetup({
        headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
    });


    $('#n1').blur(function(){
        var gname = $(this).val();
        if(gname!=g1){
            $.post('/admin/good_ajax/store',{'goods_name':gname},function(msg){
                console.log(msg);
                if(msg==1){
                    $('.s1').show();
                }else{
                    $('.s1').hide();
                }
            });
        }
    });

</script>

<script type="text/javascript">
    

    $('select[name=c12] option').hide();
    $('select[name=goods_cates] option').hide();


    $('select:first').change(function(){
        var ids = $(this).val();
        vids = ids;
        console.log(ids);
        $('select:eq(1) option[id='+ids+']').show();
        $('select:eq(1) option[id!='+ids+']').hide();
    });

    $('select:eq(1)').change(function(){
        var ids = $(this).val();
        console.log(ids);
        $('select:eq(2) option[id='+ids+']').show();
        $('select:eq(2) option[id!='+ids+']').hide();
    });

</script>

@endsection

                                