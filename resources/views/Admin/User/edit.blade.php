@extends('Admin.common')

@section('AD2_title', '会员修改')

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
                <div class="col-lg-12">
                  <form action="/admin/user/update/{{ $data -> id}}" method="post" id="isForm">
                    {{ csrf_field() }}
                    @if (session('Error'))
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      {{ session('Error') }}
                    </div>
                    @endif
                      <div class="form-group">
                          <label>状态</label>
                          <label class="radio-inline">
                              <input type="radio" name="u_status" value="0" id="radio" @if ($data['u_status'] == 0)
                                checked
                              @endif >冻结
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="u_status" value="1" id="radio" @if ($data['u_status'] == 1)
                                checked
                              @endif >正常
                          </label>
                      </div>
                      <div class="form-group">
                          <label>性别</label>
                          <label class="radio-inline">
                              <input type="radio" name="u_sex" value="0" id="radio" @if ($data['u_sex'] == 0)
                                checked
                              @endif >保密
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="u_sex" value="1" id="radio" @if ($data['u_sex'] == 1)
                                checked
                              @endif >女
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="u_sex" value="2" id="radio" @if ($data['u_sex'] == 2)
                                checked
                              @endif >男
                          </label>
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">用户名</span>
                          <input class="form-control" type="text" placeholder="Disabled input" value="{{ $data -> u_name}}" disabled="">
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">密码</span>
                          <input type="text" class="form-control" name="u_password" value="{{ $data['u_password'] }}" placeholder="请输入密码" data-toggle="tooltip" data-placement="top" data-original-title="6~16个字符，可使用字母、数字、下划线、星号.">
                          <span class="input-group-addon" id="u_password"></span>
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">确认密码</span>
                          <input type="text" class="form-control" name="u_passwd" placeholder="请重复密码">
                          <span class="input-group-addon" id="u_passwd"></span>
                      </div>
                      <hr>
                      <div class="form-group input-group">
                          <span class="input-group-addon">支付密码</span>
                          <input type="text" class="form-control" name="u_paypassword" value="{{ $data['u_paypassword'] }}" placeholder="请输入支付密码" data-toggle="tooltip" data-placement="top" data-original-title="6~16个字符，可使用字母、数字.">
                          <span class="input-group-addon" id="u_paypassword"></span>
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">确认支付密码</span>
                          <input type="text" class="form-control" name="u_paypasswd" placeholder="请重复输入支付密码">
                          <span class="input-group-addon" id="u_paypasswd"></span>
                      </div>
                      <hr>
                      <div class="form-group input-group">
                          <span class="input-group-addon">头像(点击文本框进行上传)</span>
                          <input type="text" name="u_photo" id="picture" value="{{ $data['u_photo'] }}" class="form-control"  />
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">邮箱</span>
                          <input type="text" class="form-control" name="u_email" value="{{ $data['u_email'] }}" placeholder="请输入用户邮箱">
                          <span class="input-group-addon" id="u_email"></span>
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">手机号</span>
                          <input type="text" class="form-control" name="u_phone" value="{{ $data['u_phone'] }}" placeholder="请输入用户手机号">
                          <span class="input-group-addon" id="u_phone"></span>
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">余额</span>
                          <input type="text" class="form-control" name="u_money" value="{{ $data['u_money'] }}" placeholder="请输入用户余额">
                      </div>
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

      <script type="text/javascript">
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          isPass = false;
          isPayPass = false;
          isEmail = false;
          isPhone = false;

          //测试密码强度
          $('input[name=u_password]').blur(function() {
          // .focus(function() {
          //   $(this).attr('data-original-title','6~16个字符，可使用字母、数字、下划线、星号.');
          //     //layer.msg('6~16个字符，可使用字母、数字、下划线、星号，需以字母开头.');
          //     //$('#u_password').html('<font style="color:red">字母/数字/下划线/星号，不能以数字开头，用户名长度在6到16之间</font>');
          // })

              var password = $('input[name=u_password]').val();
              var password_prega = /[0-9]{6,16}/g;
              var password_pregb = /[a-z]{6,16}/g;
              var password_pregc = /[a-z|A-z|0-9_*]{6,16}/g;
              if (password_prega.test(password)) {
                  $('#u_password').html('<font style="color:red">密码强度:弱</font>');
              } else if (password_pregb.test(password)) {
                  $('#u_password').html('<font style="color:red">密码强度:中等</font>');
              } else if (password_pregc.test(password)) {
                  $('#u_password').html('<font style="color:red">密码强度:强</font>');
              } else {
                  $('#u_password').html('<font style="color:red">密码格式不正确</font>');
              }
          });

          //验证密码
          $('input[name=u_passwd]')
          .focus(function() {
              $('#u_passwd').html('<font style="color:red">请再次输入密码</font>');
          })
          .blur(function() {
              var password = $('input[name=u_password]').val();
              var npassword = $('input[name=u_passwd]').val();
              if (password != npassword) {
                  $('#u_passwd').html('<font style="color:red">两次输入的密码不一致</font>');
              } else {
                  isPass = true;
                  $('#u_passwd').html('<font style="color:red"></font>');
              }
          });


          //验证支付密码
          $('input[name=u_paypassword]').blur(function() {
          // .focus(function() {
          //   $(this).attr('data-original-title','6~16个字符，可使用字母、数字.');
          //   //  $('#u_paypassword').html('<font style="color:red">字母/数字,长度在6到18之间</font>');
          // })

              var password = $('input[name=u_paypassword]').val();
              var password_prega = /[0-9]{6,18}/g;
              var password_pregb = /[a-zA-Z0-9]{6,18}/g;
              if (password_prega.test(password)) {
                  $('#u_paypassword').html('<font style="color:red">密码强度:弱</font>');
              } else if (password_pregb.test(password)) {
                  $('#u_paypassword').html('<font style="color:red">密码强度:强</font>');
              } else {
                  $('#u_paypassword').html('<font style="color:red">密码格式不正确</font>');
              }
          });

          //验证支付密码
          $('input[name=u_paypasswd]').focus(function() {
              $('#u_paypasswd').html('<font style="color:red">请再次输入密码</font>');
          }).blur(function() {
              var password = $('input[name=u_paypassword]').val();
              var npassword = $('input[name=u_paypasswd]').val();
              if (password != npassword) {
                  isPayPass = false;
                  $('#u_paypasswd').html('<font style="color:red">两次输入的密码不一致</font>');
              } else {
                  isPayPass = true;
                  $('#u_paypasswd').html('<font style="color:red"></font>');
              }
          });

          $('input[name=u_email]').focus(function() {
              $('#u_email').html('<font style="color:red">请输入邮箱</font>');
          }).blur(function() {
              var email = $('input[name=u_email]').val();
              var email_preg = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
              if (email_preg.test(email)) {
                  isEmail = true;
                  $('#u_email').html('<font style="color:#2bf666">邮箱格式正确</font>');
              } else {
                  $('#u_email').html('<font style="color:red">邮箱格式不正确</font>');
              }
          });

          $('input[name=u_phone]').focus(function() {
              $('#u_phone').html('<font style="color:red">请输入手机号</font>');
          }).blur(function() {
              var phone = $('input[name=u_phone]').val();
              var phone_preg = /^1[345678]\d{9}$/;
              if (phone_preg.test(phone)) {
                  isPhone = true;
                  $('#u_phone').html('<font style="color:#3c763d">手机号格式正确</font>');
              } else {
                  $('#u_phone').html('<font style="color:red">手机号不格式正确</font>');
              }
          });

          $('#isForm').submit(function() {
              if ((isPass || $('input[name=u_password]').val() == $('input[name=u_passwd]').val()) && (isPayPass || $('input[name=u_paypassword]').val() == $('input[name=u_paypassword]').val()) && (isEmail || $('input[name=u_email]').val() == isEmail) && (isPhone || $('input[name=u_phone]').val() == isPhone)) {
                  return true;
              }
              return false;
          })
        </script>
@endsection
