@extends('Admin.common')

@section('AD2_title', '商品列表页')

@section('Left_Nav')
    @parent
@endsection

@section('content')

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default"  style="width:1500px;">
                <!-- 搜索开始 -->
                <div class="panel-heading" > 
                    <form class="form-inline" action="" method="">
                        <button type="submit" class="btn btn-info">搜索</button> 
                        <div  style="float:right">                  
                            <div class="form-group">
                                <label for="exampleInputName2">商品名称</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入名称">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail2">操作人</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="类别">
                            </div>
                        </div>     
                    </form>
                </div>
                <!-- 搜索结束 -->
                <div class="panel-body"  style="width:1500px height:800px;">
                    <div style="width:1480px;height:500px;overflow:scroll;">
                    <table style="width:1480px;" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="width:20px;">ID</th>
                                <th style="width:180px;">名称</th>
                                <th >编号</th>
                                <th style="width:150px;">类别</th>
                                <th style="width:60px;">图片</th>
                                <th style="width:70px;">价格</th>
                                <th style="width:60px;">是否促销</th>
                                <th style="width:60px;">促销价格</th>
                                <th style="width:120px;">开始时间</th>
                                <th style="width:120px;">结束时间</th>
                                <th style="width:60px;">是否上架</th>
                                <th style="width:80px;">库存</th>
                                <th style="width:100px;">套餐</th>
                                <th style="width:120px;">操作人</th>
                                <th style="width:120px;">添加时间</th>
                                <th style="width:200px;" align="center">操作</th>
                                </div>
                            </tr>
                        </thead>
                        <tbody>   
                            @foreach($data as $k=>$v)
                            <tr class="gradeA odd" role="row">
                            <td class="sorting_1">
                                <input type="checkbox" class="ck checkbox-inline" name="item[]" value="{{ $v['id'] }}">
                            </td>
                            <td class="sorting_1">{{ $v['id'] }}</td>
                            <td>{{ $v['goods_name'] }}</td>
                            <td>{{ $v['goods_sn'] }}</td>
                            @foreach($cate as $ka=>$va)
                            @if($v['goods_cates'] == $va['id'])
                            <td>{{ $va['cname'] }}</td>
                            @endif
                            @endforeach
                            <td><img style="width:50px;" src="{{ $v['goods_pic'] }}"></td>
                            <td>{{ $v['goods_price'] }}</td>  
                            @if($v['goods_sales_status']==1)
                            <td><code>√</code></td>  
                            <td>{{ $v['goods_sales_price'] }}</td>
                            <td>{{ date('Y-m-d h:i:s',$v['goods_sales_start']) }}</td>
                            <td>{{ date('Y-m-d h:i:s',$v['goods_sales_end']) }}</td>
                            @else
                            <td>×</td> 
                            <td>-</td>  
                            <td>-</td>
                            <td>-</td>
                            @endif
                            <td>{{ $v['display'] }}</td>
                            @foreach($detail as $ka => $va)
                            @if($v['id']==$va['gid'])
                            <td>{{ $va['goods_nums'] }}</td> 
                            <td class="center">{{ $va['goods_set_meals'] }}</td>
                            @endif
                            @endforeach
                            <td class="center">{{ $v['handler'] }}</td>
                            <td class="center">{{ $v['hander_time'] }}</td>
                            <td class="center">
                                <a href="/admin/good/edit/{{ $v['id'] }}"><button class="btn btn-primary">修改</button></a>
                                <a href="/admin/good/destroy/{{ $v['id'] }}"><button class="btn btn-danger">删除</button></a>
                            </td>
                           </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- 用来全选 -->
                    全选&nbsp;<input type="checkbox" class="checkbox-inline" onclick="checkAll(this)">&nbsp;&nbsp;
                    <!-- 批量删除 -->
                    <button class="btn btn-danger">批量删除</button>
     
                    <!-- 分页开始 -->
                    <div class="text-center">
                        {!! $data->render() !!}
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</body>


<!-- //行滚动
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
          </tr>  
 -->

<script type="text/javascript">
		
	 	// 全选
        var ck = $('.ck');
        function checkAll(qx)
        {
            if(qx.checked){
                for(var i=0; i<ck.length; i++){        
                    //ck[i].setAttribute("checked", "checked");
                    ck[i].checked = true;
                }
            }else{
                for (var i=0; i < ck.length; i++) {
                    ck[i].checked = false;
                }
            }    
        }

       
</script>


@endsection