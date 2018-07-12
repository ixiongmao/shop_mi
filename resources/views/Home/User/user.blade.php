@extends('Home.User.Ucommon')

@section('User_content')
<link rel="stylesheet" href="/Home/static/css/user/bin_other.css">
<link rel="stylesheet" href="/Home/static/css/user/form.css">
      <div class="my_nala_centre ilizi_centre">
          <div class="ilizi cle">
              <div class="box">
                  <div class="box_1">
                      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                          <h1>个人资料</h1>
                          <div class="user-edit">
                              <ul class="user-detail">
                                  <li class="touxiang">
                                      <div class="user-card">
                                          <img class="avatar" src="http://static.shenyou.tv/avatar/000/96/03/88_big.jpg?_=1531383130"></div>
                                      <div class="ada-btn-area" style="top:55px">
                                          <a class="n-btn ck" id="is_img_avatar1" onclick=""></a>
                                          <a class="n-btn ck" id="is_img_avatar" onclick="">修改</a>
                                      </div>
                                  </li>
                                  <li id="user-curr" class="click-row">
                                      <div class="font-img-item">
                                          <em class="fa-detail fa-user"></em>
                                          <p class="title-normal">基础资料</p>
                                          <p class="font-default">用于编辑基础资料编辑个人信息</p></div>
                                      <div class="ada-btn-area" style="top:30px">
                                          <a class="n-btn ck" onclick="">修 改</a>
                                      </div>
                                  </li>
                                  <li id="user-passd" class="click-row">
                                      <div class="font-img-item clearfix">
                                          <em class="fa-detail fa-lock"></em>
                                          <p class="title-normal">账号密码</p>
                                          <p class="font-default">用于保护账号信息和登录安全</p></div>
                                      <div class="ada-btn-area" style="top:30px">
                                          <a class="n-btn ck4" href="" onclick="">修 改</a>
                                      </div>
                                  </li>
                                  <li id="binding_mobile" class="clicl-row">
                                      <div class="font-img-item clearfix">
                                          <em class="fa-detail fa-phone"></em>
                                          <p class="title-normal">绑定手机号
                                              <span class="title-normal wap-desc"></span></p>
                                          <p class="font-default">绑定手机号可以用于登录雷神账号，重置密码或其他安全验证</p></div>
                                      <div class="ada-btn-area" style="top:30px">
                                          <a class="n-btn ck5" href="" onclick="">修 改</a>
                                      </div>
                                  </li>
                                  <li id="binding_mobile2" class="clicl-row">
                                      <div class="font-img-item clearfix" style="height:60px;">
                                          <em class="fa-detail fa-bind"></em>
                                          <p class="title-normal">绑定帐号</p>
                                          <p class="font-default">绑定第三方账号可以用于登录雷神账号</p></div>
                                      <div class="bind_main">
                                          <dl class="third_bind">
                                              <dt>
                                                  <div class="icon_bind icon_OPEN_QQ"></div>
                                              </dt>
                                              <dd>
                                                  <h3>QQ</h3>
                                                  <div class="status_bind">
                                                      <i class="iconfont icon-duihao1"></i>
                                                      <span>已绑定</span></div>
                                                  <a class="th_action_btn bind-del" href="javascript:void(0);" title="" onclick="other_unbind('qq')">取消绑定</a></dd>
                                          </dl>
                                          <dl class="third_bind">
                                              <dt>
                                                  <div class="icon_bind icon_WX"></div>
                                              </dt>
                                              <dd>
                                                  <h3>微信</h3>
                                                  <div class="status_bind">
                                                      <i class="iconfont icon-tanhao"></i>
                                                      <span>未绑定</span></div>
                                                  <a class="th_action_btn bind-del" href="javascript:void(0);" title="" onclick="weixin()">添加绑定</a></dd>
                                          </dl>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection
