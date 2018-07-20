@extends('Home.User.Ucommon')

@section('Home_title','消费记录')

@section('User_content')
                    <div class="my_nala_centre ilizi_centre">
                        <div class="ilizi cle">
                            <div class="box">
                                <div class="box_1">
                                    <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                                        <h1>@yield('Home_title')</h1>
                                        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                            <tbody>
                                                <tr align="center">
                                                    <td bgcolor="#ffffff">状态</td>
                                                    <td bgcolor="#ffffff">金额</td>
                                                    <td bgcolor="#ffffff">订单号</td>
                                                    <td bgcolor="#ffffff">备注<small>(可点击查看订单)</small></td>
                                                    <td bgcolor="#ffffff">消费时间</td>
                                                </tr>
                                                @foreach ($U_expense as $v)
                                                <tr align="center">
                                                    <td bgcolor="#ffffff">
                                                    @if ($v['ex_status'] == 0)
                                                      <font color="red"><strong>支出</strong></font>
                                                    @else
                                                      <font color="#06c1ae"><strong>转入</strong></font>
                                                    @endif</td>
                                                    <td bgcolor="#ffffff">{{ $v['ex_money'] }}</td>
                                                    <td bgcolor="#ffffff">{{ $v['ex_orderid'] }}</td>
                                                    <td bgcolor="#ffffff">{!! $v['ex_remark'] !!}</td>
                                                    <td bgcolor="#ffffff">{{ date('Y-m-d H:i:s',$v['ex_time']) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="col-sm-6" style="margin-top: -30px;">
                                            <div class="dataTables_paginate paging_simple_numbers">
                                                <ul class="pagination">
                                                  {!! $U_expense->appends(['Records'=>'balance'])->render() !!}
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
