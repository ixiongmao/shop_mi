@extends('Home.common')

@section('Home_title', '找回密码')

@section('Left_Nav')
    @parent
@endsection

@section('content')
    <link rel="stylesheet" href="/Home/static/css/login.css">
    <div id="main" style="margin:  5px;background:#fff;">
        <div class="n-frame device-frame reg_frame">
            <div class="title-item dis_bot35 t_c">
                <h4 class="title-big">@yield('Home_title')</h4></div>
            <div class="regbox" id="register_box">
                <form action="/User/SetMima" method="post">
                  {{ csrf_field() }}
                    <div class="phone_step1">
                        <div class="inputbg">
                            <label class="labelbox">
                                <input type="text" name="m_name" placeholder="请输入用户名"></label>
                        </div>
                        <div class="inputbg">
                            <label class="labelbox">
                                <input type="text" name="m_phone" placeholder="请输入对应用户名的手机号"></label>
                        </div>
                        <div class="fixed_bot mar_phone_dis1">
                            <input type="submit" value="找回密码" class="btn332 btn_reg_1 submit-step" id="submit"></div>
                        <div class="trig">已有账号?
                            <a href="/reg" class="trigger-box">点击注册</a><span class="sep">|</span><a href="/login" class="trigger-box">点击登录</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function() {
        isYanzheng = false;
        $('#submit').click(function() {
            m_name = $('input[name=m_name]').val();
            m_phone = $('input[name=m_phone]').val();
            if (m_name == '') {
                layer.msg('请输入账号');
                isYanzheng = false;
            } else if (m_phone == '') {
                layer.msg('请输入手机号');
                isYanzheng = false;
            }
            $.ajax({
                url: '/User/Ajax?do=VerifyMimaCode',
                type: 'POST',
                data: {
                    'm_name': m_name,
                    'm_phone': m_phone
                },
                success: function(msg) {
                    if (msg == 'Success') {
                        layer.msg('验证成功');
                        isYanzheng = true
                    } else {
                        layer.msg('验证失败');
                        isYanzheng = false;
                    }
                },
                dataType: 'HTMl',
                async: true
            });
            if (isYanzheng == true) {
              return true;
            }
            return false;

        });
    });
    </script>
@endsection
