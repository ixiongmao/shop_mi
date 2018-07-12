@extends('Admin.common')

@section('AD2_title', '商品列表页')

@section('Left_Nav')
    @parent
@endsection

@section('content')

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
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
                <div class="panel-body">
    
                    <table width="100%" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>批量删除</th>
                                <th>ID</th>
                                <th>商品名称</th>
                                <th>商品编号</th>
                                <th>商品类别</th>
                                <th>商品图片</th>
                                <th>图片名称</th>
                                <th>商品价格</th>
                                <th>商品库存</th>
                                <th>操作人</th>
                                <th>上线时间</th>
                                <th>操作</th>
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
                            <td><img style="width:50px;" src="/Uploads/{{ $v['goods_path'] }}"></td>
                            <td>{{ $v['goods_pic'] }}</td>
                            <td>{{ $v['goods_price'] }}</td>  
                            @foreach($detail as $ka => $va)
                            @if($v['id']==$va['gid'])
                            <td>{{ $va['goods_nums'] }}</td> 
                            @endif
                            @endforeach
                            <td class="center">{{ $v['handler'] }}</td>
                            <td class="center">{{ $v['created_at'] }}</td>
                            <td class="center">
                                <a href="/admin/good/edit/{{ $v['id'] }}"><button class="btn btn-primary">修改</button></a>
                                <a href="/admin/good/destroy/{{ $v['id'] }}"><button class="btn btn-danger">删除</button></a>
                            </td>
                           </tr>
                            @endforeach
                        </tbody>
                    </table>
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