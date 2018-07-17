@extends('Admin.common')

@section('AD2_title', '售后网点管理')

@section('Left_Nav')
    @parent
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">@yield('AD2_title')</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div class="row">
            <form action="/admin/feedback/index" method="get">
                <!-- <div class="col-sm-4">
                    <div class="form-group">
                        <label>请选择类型查询</label>
                          <select class="form-control" name="fk_fenlei">
                            <option value="0">请选择</option>
                            <option value="1">用户名</option>
                            <option value="2">反馈标题</option>
                          </select>
                    </div>
                </div> -->
                <div class="col-sm-12" style="float:  right;">
                    <div class="form-group input-group">
                      <label>请选择相关类型的关键字</label>
                        <input type="text" name="fk_guanjianzi" class="form-control" style="border-radius: 5px 0px 0px 5px;">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit" style="margin-top: 25px;"><i class="fa fa-search" title="点击搜索"></i></button></span>
                    </div>
                </div>
            </form>
          </div>
          <div class="table-responsive">
            @if (session('Success'))
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{ session('Success') }}
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>名称</th>
                      <th>名称</th>
                      <th>编号</th>
                      <th>类别</th>
                      <th>图片</th>
                      <th>价格</th>
                      <th>是否促销</th>
                      <th>促销价格</th>
                      <th>开始时间</th>
                      <th>结束时间</th>
                      <th>是否上架</th>
                      <th>库存</th>
                      <th>套餐</th>
                      <th>操作人</th>
                      <th>添加时间</th>
                      <th>操作</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($data as $k => $v)
                  <tr>
                      <td class="sorting_1">
                          <input type="checkbox" class="ck checkbox-inline" name="item[]" value="{{ $v['id'] }}">
                      </td>
                      <td>{{ $v['id'] }}</td>
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
                      <td>{{ $va['goods_set_meals'] }}</td>
                      @endif
                      @endforeach
                      <td>{{ $v['handler'] }}</td>
                      <td >{{ $v['hander_time'] }}</td>
                      <td><a href="/admin/goods/edit/{{ $v['id'] }}" class="btn btn-primary btn-sm">修改</a> | <a href="/admin/goods/del/{{ $v['id'] }}" class="btn btn-danger btn-sm">删除</a></td>
                  </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-sm-6">
              <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                  <ul class="pagination">
                    分页和搜索
                  </ul>
              </div>
          </div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
  </div>
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
