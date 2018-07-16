@extends('Home.User.Ucommon')

@section('User_content')
                    <div class="my_nala_centre ilizi_centre">
                        <div class="ilizi cle">
                            <div class="box">
                                <div class="box_1">
                                    <div class="userCenterBox boxCenterList clearfix" style="_height:1%; font-size:14px;">
                                        <div class="user-card">
                                            <h2 class="username">
                                              <script type="text/javascript">
                                              function dtime() {
                                                //获取当前的时间
                                                var tdate = new Date;
                                                //获取当前小时
                                                var ho = tdate.getHours();
                                                if (ho < 6) {
                                                 document.write('凌晨了，该休息了，安');
                                                }else if (ho < 9) {
                                                 document.write('早晨好:');
                                                }else if (ho < 11) {
                                                 document.write('上午好:');
                                                }else if (ho < 13) {
                                                 document.write('中午好:');
                                               }else if (ho < 17) {
                                                 document.write('下午好:');
                                               }else if (ho < 18) {
                                                 document.write('傍晚好:');
                                               }else if (ho < 22) {
                                                 document.write('晚上好:');
                                               }else{
                                                 document.write('夜里好,该去休息了');
                                               }
                                              }
                                                dtime();
                                              </script>
                                            {{ $get_session['u_name'] }}</h2>
                                            <p class="tip" style="margin-top: 10px">欢迎您回到 ~</p>
                                            <a class="link" href="http://www.leishen.cn/user/profile">修改个人资料</a>
                                            <img class="avatar" src="{{ $get_session['u_photo'] }}"></div>
                                        <div class="user-actions">
                                            <ul class="action-list">
                                                <li>用户名：{{ $get_session['u_name'] }}</li>
                                                <li>您的等级: 普通用户</li>
                                                <li>您的上一次登录时间：2018-07-12 10:12:01</li>
                                                <li style="color: #B9000F">
                                                    <a href="http://www.leishen.cn/companies_register" style="text-align:center;color: #fff;background: #B9000F;border-radius: 3px;line-height: 30px;height: 30px;width: 180px;display: inline-block">升级为企业用户</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portal-sub">
                                        <ul class="info-list clearfix" style="margin-left: 30px">
                                            <li>
                                                <h3>余额：
                                                    <span class="num">{{ $get_session['u_money'] }}</span></h3>
                                                <a href="http://www.leishen.cn/user/my_money">查看您的账户余额
                                                    <i class="iconfont"></i></a>
                                                <img src="/Home/static/images/user/index/portal-icon-1.png"></li>
                                            <li>
                                                <h3>优惠券：
                                                    <span class="num">共计 1 个,价值 200.00</span></h3>
                                                <a href="http://www.leishen.cn/user/bonus">查看您的账户优惠券
                                                    <i class="iconfont"></i></a>
                                                <img src="/Home/static/images/user/index/portal-icon-2.png"></li>
                                            <li>
                                                <h3>可用雷魂：
                                                    <span class="num">10雷魂</span></h3>
                                                <h4 style="color: #333;">雷魂可用于
                                                    <a style="color: #B9000F;" href="http://www.leishen.cn/try_list">0元抽奖</a>抽奖</h4>
                                                <img src="/Home/static/images/user/index/portal-icon-3.png"></li>
                                            <li>
                                                <h3>用户提醒：
                                                    <span class="num">您最近30天内提交了0个订单
                                                        <br></span></h3>
                                                <img src="/Home/static/images/user/index/portal-icon-4.png"></li>
                                        </ul>
                                    </div>
                                    <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
                                        <h1>我的订单</h1>
                                        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                            <tbody>
                                                <tr align="center">
                                                    <td bgcolor="#ffffff">订单号</td>
                                                    <td bgcolor="#ffffff">下单时间</td>
                                                    <td bgcolor="#ffffff">订单总金额</td>
                                                    <td bgcolor="#ffffff">订单状态</td>
                                                    <td bgcolor="#ffffff">服务</td>
                                                    <td bgcolor="#ffffff">操作</td></tr>
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
