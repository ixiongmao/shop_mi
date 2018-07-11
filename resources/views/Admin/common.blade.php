<!DOCTYPE html>
<html lang="zh-cn">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome -{{ Config::get('app.Admin_title') }}- @yield('AD2_title')</title>
    <link href="/Home/layui/layui/css/layui.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap 的 CSS -->
    <link href="/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu 的 CSS -->
    <link href="/Admin/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom 的 CSS -->
    <link href="/Admin/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="/Admin/assets/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/Admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="/Admin/assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Home/layui/layui/layui.all.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Admin/assets/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/Admin/assets/dist/js/sb-admin-2.js"></script>
    <!-- 以下为在线可视化HTML编辑器js 感谢提供者，开源无私：http://kindeditor.net/ -->
    <script charset="utf-8" src="/Editor/kindeditor-all-min.js"></script>
    <script charset="utf-8" src="/Editor/lang/zh_CN.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    KindEditor.ready(function(K) {
            K.create('#d_content');
            var editor = K.editor();
            K('#picture').click(function() {
                editor.loadPlugin('image',
                function() {
                    editor.plugin.imageDialog({
                        imageUrl: K('#picture').val(),
                        clickFn: function(url, title, width, height, border, align) {
                            K('#picture').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#slideshow').click(function() {
                editor.loadPlugin('multiimage',
                function() {
                    editor.plugin.multiImageDialog({
                        clickFn: function(urlList) {
                            var tem_val = '';
                            var tem_s = '';
                            K.each(urlList,
                            function(i, data) {
                                tem_val = tem_val + tem_s + data.url;
                                tem_s = '|';
                            });
                            K('#slideshow').val(tem_val);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#file').click(function() {
                editor.loadPlugin('insertfile',
                function() {
                    editor.plugin.fileDialog({
                        fileUrl: K('#file').val(),
                        clickFn: function(url, title) {
                            K('#file').val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
    <!-- HTML5垫片和回应。js IE8支持HTML5元素和媒体查询 -->
    <!-- 警告: 如果您通过文件://来查看页面，那么js无法工作 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrapper">
      <!-- 导航 -->
    @section('Left_Nav')
      <!-- 导航 -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">后台商城系统管理</a></div>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-tasks fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-tasks">
              <li>
                <a href="#">
                  <div>
                    <p>
                      <strong>Task 1</strong>
                      <span class="pull-right text-muted">40% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <p>
                      <strong>Task 2</strong>
                      <span class="pull-right text-muted">20% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <p>
                      <strong>Task 3</strong>
                      <span class="pull-right text-muted">60% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <p>
                      <strong>Task 4</strong>
                      <span class="pull-right text-muted">80% Complete</span></p>
                    <div class="progress progress-striped active">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete (danger)</span></div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a class="text-center" href="#">
                  <strong>See All Tasks</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-bell fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-comment fa-fw"></i> 今天用户反馈数
                    <span class="pull-right text-muted small">4 minutes ago</span></div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-user fa-fw"></i> 今天新用户数
                    <span class="pull-right text-muted small">12 minutes ago</span></div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-shopping-cart fa-fw"></i> 今天新订单数
                    <span class="pull-right text-muted small">4 minutes ago</span></div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-tasks fa-fw"></i>New Task
                    <span class="pull-right text-muted small">4 minutes ago</span></div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#">
                  <div>
                    <i class="fa fa-upload fa-fw"></i> 总共文件数
                    <span class="pull-right text-muted small">4 minutes ago</span></div>
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a class="text-center" href="#">
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i>
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li>
                <a href="#">
                  <i class="fa fa-user fa-fw"></i>{{ $get_session['a_name']}}</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-gear fa-fw"></i>设置</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/admin/login/logout">
                  <i class="fa fa-sign-out fa-fw"></i>退出</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- 左侧导航开始 -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                <a href="/admin/index">
                  <i class="fa fa-dashboard fa-fw"></i>后台首页</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>分类管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/cate/create">添加分类</a></li>
                  <li>
                    <a href="/admin/cate/index">查看分类</a></li>
                </ul>
              </li>
              <!-- 注释为Song -->
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>用户管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/user/create">添加用户</a></li>
                  <li>
                    <a href="/admin/user/index">查看用户</a></li>
                  <li>
                    <a href="/admin/user/recycled">回收站</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>文件管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/qudong/create">添加文件</a></li>
                  <li>
                    <a href="/admin/qudong/index">查看文件</a></li>
                </ul>
              </li>
              <!-- 注释为Song -->
              <!-- 注释为IXiongmao -->
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>广告管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/ad/create">添加广告</a></li>
                  <li>
                    <a href="/admin/ad/index">查看广告</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>反馈管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/feedback/index">查看反馈</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>友情连接
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/feedback/index">查看友情</a></li>
                </ul>
              </li>
              <!-- 注释为IXiongmao -->
              <li>
                <a href="#">
                  <i class="fa fa-bar-chart-o fa-fw"></i>员工管理
                  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="/admin/admin/create">添加员工</a></li>
                  <li>
                    <a href="/admin/admin/index">查看员工</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-wrench fa-fw"></i>网站设置</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- 左侧导航结束 -->
      </nav>
      @show
      <!-- 主体公共部分开始 -->
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">@yield('AD2_title')</h1>
          </div>
        </div>
        <!-- 继承部分开始 -->
        @yield('content')
        <!-- 继承部分结束 -->
      </div>
      <!-- 主体公共部分结束 -->
    </div>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    })
      $(function() {
        $('#submit').click(function() {
          var ixiongmao_radio = $('input[type=radio]:checked').val();
          var ixiongmao_pic = $('#picture').val();
          var ixiongmao_file = $('#file').val();
          var a_name = $('input[name=a_name]').val();
          var a_password = $('input[name=a_password]').val();
          var a_passwd = $('input[name=a_passwd]').val();
          var f_name = $('input[name=file_name]').val();
          // if (ixiongmao_pic == '') {
          //   layer.msg('请上传图片');
          //   return false;
          // }
          if (f_name == '') {
            layer.msg('请输入文件名称');
            return false;
          } else if (ixiongmao_file == '') {
            layer.msg('请上传文件');
            return false;
          } else if (ixiongmao_radio == undefined) {
            layer.msg('请选择状态或者属性');
            return false;
          } else if (a_name == '') {
            layer.msg('用户不能为空');
            return false;
          } else if ((a_password && a_passwd)  == ''){ // && 一端为false 2边都为false ，|| or 一边为false 另一端还是为true
            layer.msg('二次密码不能为空');
            return false;
          } else if (!(a_password == a_passwd)) {
            layer.msg('二次密码不一样');
            return false;
          }
        });
      });
    </script>
    <script type="text/javascript">
      layui.use('laydate', function(){
        var laydate = layui.laydate;
        //执行一个laydate实例
        laydate.render({
          elem: '#ht_time', //指定元素
          type:'datetime'
        });
      });
    </script>
    <style type="text/css">
    /*回到顶部*/
    #back-to-top {
    	color:#fff;
    	position:fixed;
    	bottom:20px;
    	right:20px;
    	z-index:99;
    	display:none;
    	text-align:center;
    	border-radius:5px;
    	-moz-border-radius:5px;
    	-webkit-border-radius:5px;
    	-o-border-radius:2px;
    	z-index:10000;
    	height:45px;
    	width:45px;
    	background-color:#337ab7;
    	background-repeat:no-repeat;
    	background-position:center;
    	transition:background-color 0.1s linear;
    	-moz-transition:background-color 0.1s linear;
    	-webkit-transition:background-color 0.1s linear;
    	-o-transition:background-color 0.1s linear;
    }
    #back-to-top i {
    	padding-top:12px;
    	font-size:17px;
    }
    #back-to-top:hover {
    	background:#B86662;
    	background:#337ab7;
    }

    </style>
    <a href="#top" id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <script type="text/javascript">
      //回到顶部
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#back-to-top').fadeIn('slow');
                } else {
                    $('#back-to-top').fadeOut('slow');
                }
            });
            $('#back-to-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                },
                600);
                return false;
            });
        });
      </script>
  </body>
</html>
