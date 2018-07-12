<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    /**
     * 前台用户登录显示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('Home_Session')) {
          return back()->with('Error','您已经登录，请先退出！');
        } else {
          return view('Home.User.login');
        }

    }

    /**
     * 前台用户注册显示
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        return view('Home.User.register');
    }
    /**
     * 前台用户登录
     *
     * @return \Illuminate\Http\Response
     */
    public function loginIndex(Request $request)
    {
      $data = $request->except('_token');
      $u_name = $data['m_name'];
      $u_passwd = $data['m_password'];
      $db = DB::table('users')->where('u_name','=',$data['m_name'])->first();
      $res = Hash::check($u_passwd, $db['u_password']);
      if ($res) {
        session(['Home_Session'=>$db]);
        return redirect('/')->with('Success','登录成功');
      } else {
        return back()->with('Error','登录失败');
      }
    }
    /**
     * 前台用户注册添加
     *
     * @return \Illuminate\Http\Response
     */
    public function regCreate(Request $request)
    {
        //
        $data = $request->except('_token');
        $db = DB::table('users')->where('u_name','=',$data['m_name'])->first();
        if ($db == null) {
          $reg = DB::table('users')->insert([
            'u_name'=>$data['m_name'],
            'u_password'=>Hash::make($data['m_password']),
            'u_email'=>$data['m_email'],
            'u_sex'=>$data['m_sex'],
            'u_phone'=>$data['m_phone']
          ]);
          if ($reg) {
            return redirect('/login')->with('Success','注册成功');
          } else {
            return back()->with('Error','注册失败');
          }
        } else {
          return back()->with('Error','用户名已存在');
        }
    }

    public function logout()
    {
        if (!session('Home_Session')) {
          return redirect('/login')->with('Error','请先登录！');
        }else if (session()->flush() == null) {
          return redirect('/login')->with('Error','退出成功！');
        }
    }
}
