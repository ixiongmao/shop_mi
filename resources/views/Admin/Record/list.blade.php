@extends('Admin.common')

@section('AD2_title', '记录管理')

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
          <div class="table-responsive">
            @if (session('Success'))
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              {{ session('Success') }}
            </div>
            @endif
            <button name="button" class="btn btn-primary btn-block" id="AdminRecords">清除30天前员工登录记录</button>
          </div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
  </div>
  <script type="text/javascript">
    $(function() {
      $('#AdminRecords').click(function(){
        $.ajax({
          url:'/admin/Record/Ajax?do=AdminRecord',
          type:'POST',
          data:{},
          success:function(msg){

          },
          dataType:'HTML',
          async:true

        });
      })
    });
  </script>
@endsection
