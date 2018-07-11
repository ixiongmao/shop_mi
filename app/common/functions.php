<?php
    function check_admin_purview($t0) {
      $session = session('Admin_Session');
      $a_permission = $session['a_permission'];
      $arr_admin_permission = explode(',',$a_permission);
      if (in_array($t0,$arr_admin_permission)) {

      } else {
        echo '<script src="/Home/layui/layui/layui.all.js"></script>';
            echo '<script type="text/javascript">
            layer.open({
                icon: 5,
                title: "提示",
                content: "您无权限操作此页面",
                move: false, //拖拽关闭
                closeBtn: 0,
                yes: function(idnex, layero) {
                    location.href = "/admin/blank";
                },
            });
            </script>';
            exit();
      }
      return;
    }
?>
