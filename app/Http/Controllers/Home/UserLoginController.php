<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Models\Admin\CateModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    /**
     * 前台用户登录显示
     *
     * @return \Illuminate\Http\Response
     */
    public function Login()
    {
        if (session('Home_Session')) {
          return back()->with('Error','您已经登录，请先退出！');
        } else {
          $Cate = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
          return view('Home.User.login',['Cate'=>$Cate]);
        }

    }

    /**
     * 前台用户注册显示
     *
     * @return \Illuminate\Http\Response
     */
    public function Register()
    {
        //
        if (session('Home_Session')) {
          return back()->with('Error','您已经登录，请先退出！');
        } else {
          $get_session = session('Home_Session');
          $Cate = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
          return view('Home.User.register',['get_session'=>$get_session,'Cate'=>$Cate]);
        }

    }

    /**
     * 前台用户忘记密码显示
     *
     * @return \Illuminate\Http\Response
     */
    public function VerifyMimaCode()
    {
        //
        $Cate = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
        return view('Home.User.VerifyMimaCode',['Cate'=>$Cate]);
    }
    /**
     * 前台用户登录
     *
     * @return \Illuminate\Http\Response
     */
    public function LoginIndex(Request $request)
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
    public function RegCreate(Request $request)
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

    /**
     * 前台用户注册手机号重复验证、前台用户找回密码
     *
     * @return \Illuminate\Http\Response
     */
    public function Ajax(Request $request)
    {
        //
        $m_phone = $request->input('m_phone');
        isset($_GET['do']) ? $_GET['do'] : '';
        if ($_GET['do'] == 'isPhone') {
          $db = DB::table('users')->where('u_phone','=',$m_phone)->first();
          if ($db == null) {
            echo 'Success';
          } else {
           echo 'Error';
          }
        }
        if ($_GET['do'] == 'VerifyMimaCode') {
          $m_name = $request->input('m_name');
          $m_phone = $request->input('m_phone');
          $db = DB::table('users')->where('u_name','=',$m_name)->where('u_phone','=',$m_phone)->first();
          if ($db == null) {
            echo 'Error';
          } else {
           echo 'Success';
          }
        }
    }

    /**
     * 前台用户找回密码显示
     *
     * @return \Illuminate\Http\Response
     */
    public function SetPassword(Request $request)
    {
        //
        $data = $request->except('_token');
        $db = DB::table('users')->where('u_name','=',$data['m_name'])->where('u_phone','=',$data['m_phone'])->first();
        if ($db == null) {
          return back()->with('Error','验证失败！');
        } else {
          $Cate = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
          return view('Home.User.SetMima',['Cate'=>$Cate,'data'=>$db]);
        }
    }

    /**
     * 前台用户找回密码显示
     *
     * @return \Illuminate\Http\Response
     */
    public function UpdatePasswd(Request $request)
    {
        //
        $data = $request->except('_token');
        $db = DB::table('users')->where('id','=',$data['m_id'])->update(['u_password'=>Hash::make($data['m_password'])]);
        if ($db == '1') {
          return redirect('/login')->with('Error','修改成功');
        } else {
          return back()->with('Error','修改失败');
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
