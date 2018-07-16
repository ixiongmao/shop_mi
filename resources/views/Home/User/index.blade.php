@extends('Home.User.Ucommon')

@section('User_content')
                    <div class="my_nala_centre ilizi_centre">
                        <div class="ilizi cle">
                            <div class="box">
                                <div class="box_1">
                                    <div class="userCenterBox boxCenterList clearfix" style="_height:1%; font-size:14px;">
                                        <div class="user-card">
                                            <h2 class="username">欢迎你，{{ $get_session['u_name'] }}</h2>
                                            <p class="tip" style="margin-top: 10px">                                              <script type="text/javascript">
                                                                                          function dtime() {
                                                                                            //获取当前的时间
                                                                                            var tdate = new Date;
                                                                                            //获取当前小时
                                                                                            var ho = tdate.getHours();
                                                                                            if (ho < 6) {
                                                                                             document.write('凌晨了，该休息了，安');
                                                                                            }else if (ho < 9) {
                                                                                             document.write('早晨好：');
                                                                                            }else if (ho < 11) {
                                                                                             document.write('上午好：');
                                                                                            }else if (ho < 13) {
                                                                                             document.write('中午好：');
                                                                                           }else if (ho < 17) {
                                                                                             document.write('下午好：');
                                                                                           }else if (ho < 18) {
                                                                                             document.write('傍晚好：');
                                                                                           }else if (ho < 22) {
                                                                                             document.write('晚上好：');
                                                                                           }else{
                                                                                             document.write('夜里好,该去休息了');
                                                                                           }
                                                                                          }
                                                                                            dtime();
                                                                                          </script>{{ $get_session['u_name']}}~</p>
                                            <img class="avatar" src="{{ $get_session['u_photo'] }}"></div>
                                        <div class="user-actions">
                                            <ul class="action-list">
                                                <li>绑定手机：{{ $get_session['u_phone']}}</li>
                                                <li>您的等级: 普通用户</li>
                                                <li>您的上一次登录时间：2018-07-12 10:12:01</li>
                                                <li style="color: #B9000F">
                                                    <a href="/user/my_information" style="text-align:center;color: #fff;background: #B9000F;border-radius: 3px;line-height: 30px;height: 30px;width: 180px;display: inline-block">修改个人资料</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portal-sub">
                                        <ul class="info-list clearfix" style="margin-left: 30px">
                                            <li>
                                                <h3>余额：
                                                    <span class="num">{{ $get_session['u_money'] }}</span></h3>
                                                <a href="/user/my_balance">查看我账户的余额
                                                    <i class="iconfont"></i></a>
                                                <img src="/Home/static/images/user/index/portal-icon-1.png"></li>
                                            <li>
                                                <h3>积分：
                                                    <span class="num">共计 1 个,价值 200.00</span></h3>
                                                <a href="/user/my_integral">查看我账户的积分
                                                    <i class="iconfont"></i></a>
                                                <img src="/Home/static/images/user/index/portal-icon-2.png"></li>
                                            <li>
                                                <h3>可用雷魂：
                                                    <span class="num">10雷魂</span></h3>
                                                <h4 style="color: #333;">雷魂可用于
                                                    <a style="color: #B9000F;" href="http://www.leishen.cn/try_list">0元抽奖</a>抽奖</h4>
                                                <img src="/Home/static/images/user/index/portal-icon-3.png"></li>
                                            <li>
                                                <h3>收藏：
                                                        <span class="num">1000</span></h3>
                                                    <a href="/user/my_integral">查看我账户的收藏
                                                        <i class="iconfont"></i></a>
                                                    <img src="/Home/static/images/user/index/portal-icon-4.png"></li>
                                        </ul>
                                    </div>
                                    <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                                        <h1>我的登录记录</h1>
                                        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                            <tbody>
                                                <tr align="center">
                                                    <td bgcolor="#ffffff">IP地址</td>
                                                    <td bgcolor="#ffffff">时间</td>
                                                  </tr>
                                            </tbody>
                                        </table>
                                        <form name="selectPageForm" action="http://www.leishen.cn//user.php" method="get">
                                            <div class="clearfix">
                                                <div id="pager" class="pagebar">
                                                    <span class="f_l f6" style="margin-right:10px;">总计
                                                        <b>0</b>个记录</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
