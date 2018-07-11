@extends('Admin.common')

@section('AD2_title', '驱动修改')

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
                <div class="col-lg-6">
                  <form action="/admin/cate/update/{{ $data -> id}}" method="post">
                    {{ csrf_field() }}
                    @if (session('Error'))
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      {{ session('Error') }}
                    </div>
                    @endif

                      <div class="form-group input-group">
                          <span class="input-group-addon">商品分类添加</span>
                          <input type="text" class="form-control" name="cname" value="{{ $data->qudong_name }}" placeholder="请输入文件名称">
                      </div>
                      <div class="form-group input-group">
                          <span class="input-group-addon">文件下载地址(点击文本框进行上传)</span>
                          <input type="text" class="form-control" name="file_file" value="{{ $data->qudong_files }}" placeholder="请上传文件下载地址" id="file">
                          <span class="input-group-addon">商品父类</span>
                            <select name="pid" class="form-control">
                              <option value="">请选择商品父类</option>
                              @foreach($cate as $k=>$v)
                                <option value="{{ $v['id'] }} ">{{ $v['cname'] }}</option>
                              @endforeach
                            </select>
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
@endsection
