<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\UsersModel;
class AdminUserRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $Search = $request->input('Search');
        $data = UsersModel::where('u_name','like','%'.$Search.'%')->orderBy('id','asc')->paginate(5);
        return view('Admin.User.record',['Search'=>$Search,'data'=>$data]);
    }

    /**
     * 消费记录显示
     *
     * @return \Illuminate\Http\Response
     */
    public function balance_index(Request $request)
    {
        //
        $Search = $request->input('Search');
        $data = UsersModel::where('u_name','like','%'.$Search.'%')->orderBy('id','asc')->paginate(5);
        return view('Admin.User.brecord',['Search'=>$Search,'data'=>$data]);
    }

    /**
     * 消费记录显示
     *
     * @return \Illuminate\Http\Response
     */
    public function dl_index(Request $request)
    {
        //
        $Search = $request->input('Search');
        $data = UsersModel::where('u_name','like','%'.$Search.'%')->orderBy('id','asc')->paginate(5);
        return view('Admin.User.dlrecord',['Search'=>$Search,'data'=>$data]);
    }

    /**
     * 消费记录显示
     *
     * @return \Illuminate\Http\Response
     */
    public function collect_index(Request $request)
    {
        //
        $Search = $request->input('Search');
        $data = UsersModel::where('u_name','like','%'.$Search.'%')->orderBy('id','asc')->paginate(5);
        return view('Admin.User.crecord',['Search'=>$Search,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($id)
    {
        //

        isset($_GET['Record']) ? $_GET['Record'] : '' ;
        if (empty($_GET['Record'])) {
          return redirect('/admin/user/record')->with('Error','页面不存在，请传入正确参数！');
        }
        //登录记录
        if ($_GET['Record'] == 'dlrecord') {
          $data = DB::table('u_dlrecords')->where('user_id','=',$id)->orderBy('id','desc')->paginate(5);
          return view('Admin.Record.Udl_Record',['data'=>$data]);
        }
        //收藏
        if ($_GET['Record'] == 'collect') {
          //$data = DB::table('users')->->paginate(25);
          $data = DB::table('u_collects')->where('uid','=',$id)->orderBy('id','desc')->paginate(5);
          $Goods_data = DB::table('goods')->get();
          return view('Admin.Record.U_collect',['data'=>$data,'Goods_data'=>$Goods_data]);
        }
        //消费
        if ($_GET['Record'] == 'balance') {
          $data = DB::table('u_expenses')->where('uid','=',$id)->orderBy('id','desc')->paginate(5);
          return view('Admin.Record.Ubalance_record',['data'=>$data]);
        }
    }

}
