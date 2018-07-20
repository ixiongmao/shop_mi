@extends('Admin.common')

@section('AD2_title', '订单管理')

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
                    <form action="/admin/orders/index" method="get">
                        <div class="col-sm-12" style="float:  right;">
                            <div class="form-group input-group">
                              <label>请输入关键字</label>
                                <input type="text" name="Search" class="form-control" style="border-radius: 5px 0px 0px 5px;">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="submit" style="margin-top: 25px;"><i class="fa fa-search" title="点击搜索"></i></button></span>
                            </div>
                        </div>
                    </form>
                  </div>
                    <div class="table-responsive">
                        @if (session('Success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('Success') }}
                        </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>状态</th>
                                    <th>用户</th>
                                    <th>购买的商品</th>
                                    <th>购买的价格(单价)</th>
                                    <th>订单总金额</th>
                                    <th>数量</th>
                                    <th>支付方式</th>
                                    <th>订单号</th>
                                    <th>服务</th>
                                    <th>积分</th>
                                    <th>下单时间</th>
                                    <th>收货人</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $k=>$v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>
                                    @if ($v['orders_status'] == 0)
                                      <font color="red"><strong>已支付</strong></font>
                                    @elseif ($v['orders_status'] == 1)
                                      <font color="#eea236"><strong>未发货</strong></font>
                                    @elseif ($v['orders_status'] == 2)
                                      <font color="#31b0d5"><strong>已发货</strong></font>
                                    @elseif ($v['orders_status'] == 3)
                                      <font color="#06c1ae"><strong>已签收</strong></font>
                                    @endif
                                    </td>
                                    <td>{{ $v->UsersInfo->u_name }}</td>
                                    <td><a href="/item/{{ $v->GoodsInfo->id }}" target="_blank">{{ $v->GoodsInfo->goods_name }}</a></td>
                                    <td>{{ $v['orders_buying_price'] }}</td>
                                    <td>{{ $v['orders_price'] }}</td>
                                    <td>{{ $v['orders_number'] }}</td>
                                    <td>{{ $v['orders_paymethod'] }}</td>
                                    <td>{{ $v['orders_orderid'] }}</td>
                                    <td>申请售后</td>
                                    <td>{{ $v['orders_score'] }}</td>
                                    <td>{{ date('Y-m-d H:i:s',$v['orders_time']) }}</td>
                                    <td><button type="button" class="btn btn-outline btn-default btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm-consignee-{{ $v->id }}">点击查看收货人</button></td>
                                    <td><a href="https://m.kuaidi100.com/result.jsp?nu={{ $v['orders_odd'] }}" target="_blank">查看快递信息</a> |
                                      @if ($v['orders_status'] != 3)<button type="button" class="btn btn-outline btn-default btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm-{{ $v->id }}">点击填写单号</button> |
                                      @endif<a href="/admin/admin/edit/" class="btn btn-primary btn-sm">修改</a><!--  |
                                        <a href="/admin/admin/destroy/" class="btn btn-danger btn-sm" onclick="return confirm('删除后放入回收站，你确定要删除吗？(可在回收站恢复)')">删除</a>-->
                                    </td>
                                </tr>
                                <!-- 开始 -->
                                <div class="modal fade bs-example-modal-sm-consignee-{{ $v->id }}" id="myModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">随意点击框外面其他处，即可关闭</h4></div>
                                            <div class="modal-body">
                                              姓名：{{ $v->AddressInfo->address_name }} </br>
                                              电话：{{ $v->AddressInfo->address_phone }} </br>
                                              地址：{{ $v->AddressInfo->address_address }} </br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 结束 -->

                                <!-- 开始 -->
                                <div class="modal fade bs-example-modal-sm-{{ $v->id }}" id="myModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">随意点击框外面其他处，即可关闭</h4></div>
                                            <div class="modal-body">
                                              <form class="" action="index.html" method="post">
                                                <div class="form-group">
                                                  <label for="recipient-name" class="control-label">单号:</label>
                                                  <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <button type="button" class="btn btn-primary" style="margin-left:25%">Send message</button>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 结束 -->
                                @endforeach
                              </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                              {!! $data->render() !!}
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
@endsection
