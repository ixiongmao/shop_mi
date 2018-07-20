@extends('Home.User.Ucommon')

@section('Home_title','我的收藏')

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
                                <td bgcolor="#ffffff">商品名称</td>
                                <td bgcolor="#ffffff">价格</td>
                                <td bgcolor="#ffffff">操作</td></tr>
                                @foreach($data as $k=>$v)
                                  @foreach($Collect_Goods as $kk=>$vv)
                                    @if($v['gid'] == $vv['id'])
                            <tr align="center">
                                <td bgcolor="#ffffff">
                                    <a href="/item/{{$vv['id']}}">{{ $vv['goods_name'] }}</a></td>
                                <td bgcolor="#ffffff">{{ $vv['goods_price'] }}</td>
                                <td bgcolor="#ffffff"><a href="/{{ $vv['id'] }}">加入购物车</a> | <a href="/user/my_collect_goods/del/{{ $v['id'] }}">删除</a></td>
                            </tr>
                                @endif
                              @endforeach
                            @endforeach</tbody>
                    </table>
                    <div class="col-sm-6" style="margin-top: -30px;">
                        <div class="dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">{!! $data -> render() !!}</ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
