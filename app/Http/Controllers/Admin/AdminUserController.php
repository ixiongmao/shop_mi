<?php

namespace App\Http\Controllers\Admin;

use Hash;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\UsersModel;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示用户
        check_admin_purview('0');
        $get_session = session('Admin_Session');
        $search = $request->input('Search');
        $data = UsersModel::where('u_name','like','%'.$search.'%')->orderBy('id','asc')->paginate(25);
        return view('Admin.User.list',['data'=>$data,'search'=>$search,'get_session'=>$get_session]);
    }
    /**
     * 发送Ajax
     *
     * @return \Illuminate\Http\Response
     */

    public function Ajax(Request $request)
    {
        //check_admin_purview('0');
        $uname = $request->input('u_name');
        $data = DB::table('users')->where('u_name','=',$uname)->first();
        if($data == null){
            echo 'Success';
        }else{
            echo 'Error';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        check_admin_purview('0');
        $get_session = session('Admin_Session');
        return view('Admin.User.add',['get_session'=>$get_session]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        check_admin_purview('0');
        $data = $request->except('_token');
        $users = new UsersModel;
        $users -> u_status = $data['u_status'];
        $users -> u_name = $data['u_name'];
        $U_data = UsersModel::where('u_name','=',$data['u_name'])->first();
        if (!$U_data == null) {
          return back()->with('Error','用户名已存在');
        }
        $users -> u_password = Hash::make($data['u_password']);
        $users -> u_sex = $data['u_sex'];
        if (!$data['u_photo'] == null) {
          $users -> u_photo = $data['u_photo'];
        } else {
          $users -> u_photo = '/Uploads/default.jpg';
        }
        $users -> u_phone = $data['u_phone'];
        $users -> u_email = $data['u_email'];
        $users -> u_money = $data['u_money'];
        $users -> u_paypassword = Hash::make($data['u_paypassword']);
        $users -> u_time = time();
        $db = $users -> save();
        if($db){
            return redirect('/admin/user/index')->with('Success','添加成功');
        }else{
            return back()->with('Error','添加失败');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        check_admin_purview('0');
        $get_session = session('Admin_Session');
        $data =  UsersModel::find($id);
        return view('Admin.User.edit',['data'=>$data,'get_session'=>$get_session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        check_admin_purview('0');
        $data = $request->except('_token');
        $users = UsersModel::find($id);
        $users -> u_status = $data['u_status'];
        $users -> u_password = Hash::make($data['u_password']);
        $users -> u_sex = $data['u_sex'];
        $users -> u_photo = $data['u_photo'];
        $users -> u_phone = $data['u_phone'];
        $users -> u_email = $data['u_email'];
        $users -> u_money = $data['u_money'];
        $users -> u_paypassword = Hash::make($data['u_paypassword']);
        $db = $users -> save();
        if($db){
            return redirect('/admin/user/index')->with('Success','修改成功');
        }else{
            return back()->with('Error','修改失败');
        }
    }

    /**
     * 会员回收站管理
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        check_admin_purview('0');
        $data = UsersModel::find($id);
        $db = $data -> delete();
        if($db){
            return redirect('/admin/user/index')->with('Success','删除成功');
        }else{
            return back() -> with('Error','删除失败');
        }
    }
    /**
     * 会员回收站显示
     */
    public function recycled()
    {
        check_admin_purview('0');
        $get_session = session('Admin_Session');
        $data = UsersModel::onlyTrashed()->paginate(25);
        //var_dump($date);
        return view('Admin.User.recycled',['data'=>$data,'get_session'=>$get_session]);
    }
    /**
     * 会员回收站管理
     *
     * @param  int  $id
     */
    public  function recover($id)
    {
        check_admin_purview('0');
        $db = UsersModel::withTrashed()->where('id',$id)->restore();
        if($db){
            return redirect('/admin/user/recycled')->with('Success','恢复成功');
        } else {
            return back()->with('Error','恢复失败');
        }
    }

    public function delete($id)
    {
        check_admin_purview('0');
        $db = DB::table('users')->where('id','=',$id)->delete();
        if($db){
           return redirect('/admin/user/recycled')->with('Success','删除成功');
        }else{
           return back()->with('Error','删除失败');
        }

    }
}
