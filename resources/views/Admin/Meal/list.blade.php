@extends('Admin.common')

@section('AD2_title', '组合套餐商品')

@section('Left_Nav')
    @parent
@endsection

@section('content')


<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <h3>商品主</h3> -->
            <div class="table-responsive">
                <div class="panel-body text-center">
                    <div class="table-responsive">
                       
                        <table style="width:800px;" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="5">组合套餐商品列表</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>序号</th>
                                    <th>组合套餐商品名</th>
                                    <th>套餐说明</th>
                                    <th>组合商品价格</th> 
                                    <th>操作</th> 
                                </tr>
                                @foreach($meal as $k=>$v )
                                <tr>
                                    <td>{{ $v['id']}}</td>
                                    <td>{{ $v['goods_meals_name']}}</td>
                                    <td>{{ $v['goods_meals_detail']}}</td>
                                    <td>{{ $v['goods_meals_price']}}</td>
                                    <td>
                                        <a href="/admin/meal/edit/{{ $v['id'] }}"><button class="btn btn-info">修改</button></a>
                                        <a href="/admin/meal/delete/{{ $v['id'] }}"><button class="btn btn-danger">删除</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

                                