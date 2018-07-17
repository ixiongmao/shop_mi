@extends('Admin.common')

@section('AD2_title', '套餐添加')

@section('Left_Nav')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">@yield('AD2_title')</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="/admin/meals/update/{{ $meal['id'] }}" method="post">
                              {{ csrf_field() }}
                              @if (session('Error'))
                              <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ session('Error') }}
                              </div>
                              @endif
                                <div class="form-group input-group">
                                    <span class="input-group-addon">套餐名称</span>
                                    <input type="text" class="form-control" name="goods_meals_name" value="{{ $meal['goods_meals_name'] }}" placeholder="请输入套餐名称">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">套餐详情</span>
                                    <input type="text" class="form-control" name="goods_meals_detail" value="{{ $meal['goods_meals_detail'] }}" placeholder="请输入套餐详情">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon">套餐价格</span>
                                    <input type="text" class="form-control" name="goods_meals_price" value="{{ $meal['goods_meals_price'] }}" placeholder="请输入套餐详情">
                                </div>
                                <input type="submit" class="btn btn-primary" value="提交">
                                <input type="reset" class="btn btn-default" value="重置">
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
@endsection
