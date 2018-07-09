<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Ixiongmao
        if (session('Admin_Login')) {
          return redirect('/admin/index')->with('Success','您已经登录成功，请先退出，重新登录');
        } else {
          return view('Admin.Login.Login');
        }

    }

    /**
     *  登录信息查询验证
     */
    public function Save(Request $request)
    {
      $data = $request -> except('_token');
      $a_name = $data['a_name'];
      $a_passwd = $data['a_password'];
      $db = DB::table('admins')->where('a_name','=',$a_name)->where('a_password','=',$a_passwd)->first();
      if ($db) {
        $request->session()->put('Admin_Login', $db);
        session(['a_admin'=>$a_name]);
        return redirect('/admin/index')->with('Success','登录成功');
      } else {
        return back()->with('Error','账号或密码错误');
      }
      //var_dump($db);
    }
    //退出登录
    public function logout()
    {
      if (session()->flush() == null) {
        return redirect('/admin/login')->with('Error','退出成功');
      }
    }
}
