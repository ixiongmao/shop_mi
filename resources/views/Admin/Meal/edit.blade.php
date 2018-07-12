@extends('Admin.common')

@section('AD2_title', '商品套餐添加')

@section('Left_Nav')
    @parent
@endsection

@section('content')


<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <h3>商品主</h3> -->
            <div class="table-responsive">
                <div class="panel-body">
                    <div class="table-responsive">
                        <form action="/admin/meal/update" method="post" class="myform">
                            {{ csrf_field() }}
                        <table style="width:800px;" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="4">商品套餐添加栏</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">组合套餐商品名:</th>
                                    <td colspan="2">
                                        <input type="text" name="goods_meals_name" style="width:350px;" value="{{ $meal['goods_meals_name'] }}">
                                        <input type="hidden" name="id" value="{{ $meal['id'] }}">
                                    </td><span class="s1"></span>
                                </tr>
                                <tr>
                                    <th class="text-center">组合套餐详情:</th>
                                    <td colspan="2"><input type="text" name="goods_meals_detail" style="width:350px;"  value="{{ $meal['goods_meals_detail'] }}"></td><span class="s2"></span>
                                </tr>
                                <tr>
                                    <th class="text-center">组合套餐价:</th>
                                    <td colspan="2"><input type="text" name="goods_meals_price" style="width:350px;"  value="{{ $meal['goods_meals_price'] }}"></td><span class="s3"></span>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="text-center">
                                            <button class="btn btn-info">提交</button>
                                            <button class="btn btn-default">重置</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                         </table>
                        </form>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

                                