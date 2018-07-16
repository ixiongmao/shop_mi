@extends('Admin.common')

@section('AD2_title', '增值服务添加')

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
                        <div class="col-lg-6">
                            <form action="/admin/zengzhi/store" method="post">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>状态</label>
                                  <label class="radio-inline">
                                      <input type="radio" name="v_status" value="0" id="radio">隐藏
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="v_status" value="1" id="radio" checked>显示
                                  </label>
                              </div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">库存</span>
                                  <input type="text" class="form-control" name="v_repertory" placeholder="请输入库存量">
                              </div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">商品名称</span>
                                  <input type="text" class="form-control" name="v_name" placeholder="请输入名称"/></div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">价格</span>
                                    <input type="text" class="form-control" name="v_price" placeholder="请输入价格"></div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">缩略图(点击文本框进行上传)</span>
                                  <input type="text" id="picture" class="form-control" name="v_pic" /></div>
                              <div class="form-group">
                                  <label>介绍</label>
                                  <textarea class="form-control" rows="3" name="v_introduce"></textarea></div>
                              <div class="form-group">
                                  <label>图片详细</label>
                                  <textarea class="form-control" rows="3" id="slideshow" name="v_detail"></textarea></div>
                              <input type="submit" class="btn btn-primary" value="提交" id="submit">
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
