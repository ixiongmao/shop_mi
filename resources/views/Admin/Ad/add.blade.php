@extends('Admin.common')

@section('AD2_title', '用户添加')

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
                            <form action="/admin/ad/store" method="post">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label>广告状态</label>
                                  <label class="radio-inline">
                                      <input type="radio" name="ad_status" value="0" id="radio">隐藏
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="ad_status" value="1" id="radio">显示
                                  </label>
                              </div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">广告名字</span>
                                  <input type="text" class="form-control" name="ad_name" placeholder="请输入广告名">
                              </div>
                              <div class="form-group">
                                  <label>广告位置</label>
                                  <select class="form-control" name="ad_position">
                                      <option value="0">导航顶部</option>
                                      <option value="1">首页中部</option>
                                      <option value="2">首页底部</option>
                                      <option value="3">分类中部</option>
                                      <option value="4">商品中部</option>
                                  </select>
                              </div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">广告备注</span>
                                  <input type="text" class="form-control" name="ad_remark"/></div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">广告图片(点击文本框进行上传)</span>
                                  <input type="text" id="picture" class="form-control" name="ad_pic" /></div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">广告地址</span>
                                  <input type="text" class="form-control" name="ad_dizhi" placeholder="请输入地址"></div>
                              <div class="form-group input-group">
                                  <span class="input-group-addon">到期时间</span>
                                  <input type="text" class="form-control" name="ad_etime" placeholder="请输入到期时间" id="ht_time"></div>
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
