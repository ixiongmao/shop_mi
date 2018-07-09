@extends('Admin.common')

@section('AD2_title', '分类管理')

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
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('Success') }}
                        </div>
                        @elseif (session('Error'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{ session('Error') }}
                        </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>分类名称</th>
                                    <th>父类分类ID</th>
                                    <th>父类路径</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $k => $v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td class="text-left">{{ $v['cname'] }}</td>
                                    <td>{{ $v['pid'] }}</td>
                                    <td>{{ $v['path'] }}</td>
                                    <td>{{ $v['status'] }}</td>
                                    <td>
                                        <a href="/admin/qudong/edit/{{ $v->id }}" class="btn btn-primary btn-sm">修改</a> |
                                        <a href="/admin/qudong/del/{{ $v->id }}" class="btn btn-danger btn-sm" onclick="return confirm('你确定要删除吗？(不可恢复)')">删除</a></td>
                                </tr>
                                <!-- 反馈加载开始 -->
                                <div class="modal fade bs-example-modal-sm-{{ $v->id }}" id="myModel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">随意点击框外面其他处，即可关闭</h4></div>
                                            <div class="modal-body" style="text-align: center;">
                                              <a href="{{ $v->qudong_files }}" class="btn btn-outline btn-default btn-sm">点击下载</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 反馈加载结束 -->
                                @endforeach
                              </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                              {!! $data -> render() !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
              </div>
            <!-- /.panel -->
          </div>
        <!-- /.col-lg-6 -->
      </div>
@endsection
