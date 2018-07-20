<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_session = session('Home_Session');
        $data = DB::table('u_address')->where('uid','=',$get_session['id'])->get();
        return view('Home.My.Address',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $get_session = session('Home_Session');
        $count = DB::table('u_address')->where('uid','=',$get_session['id'])->count();
        if ($count >= 5) {
          return back()->with('Error','收货地址最多5个');
        } else {
          $data =  $request->except('_token');
          $db = DB::table('u_address')->insert([
            'uid'=>$data['m_id'],
            'address_name'=>$data['add_name'],
            'address_phone'=>$data['add_phone'],
            'address_address'=>$data['add_detail']
          ]);
          if ($db) {
            return redirect('/user/my_address')->with('Success','添加成功');
          }else{
            return back()->with('Error','添加失败');
          }
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
        //
        $data = DB::table('u_address')->where('id','=',$id)->first();
        return view('Home.My.Address_edit',['data'=>$data]);
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
        //
        $data =  $request->except('_token');
        $db = DB::table('u_address')->where('id','=',$id)->update([
          'address_name'=>$data['add_name'],
          'address_phone'=>$data['add_phone'],
          'address_address'=>$data['add_detail']
        ]);
        if ($db) {
          return redirect('/user/my_address')->with('Success','修改成功');
        }else{
          return back()->with('Error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $get_session = session('Home_Session');
        $db = DB::table('u_address')->where('uid','=',$get_session['id'])->delete($id);
        if ($db) {
          return redirect('/user/my_address')->with('Success','删除成功');
        }else{
          return back()->with('Error','删除失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function default($id)
    {
        //
        $get_session = session('Home_Session');
        $count = DB::table('u_address')->where('address_status','=','1')->count();
        if ($count >= 1) {
          return back()->with('Error','只能默认一个地址');
        }
        $db = DB::table('u_address')->where('id','=',$id)->update(['address_status'=>'1']);
        if ($db) {
          return redirect('/user/my_address')->with('Success','设置成功');
        }else{
          return back()->with('Error','设置失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Nodefault($id)
    {
        //
        $get_session = session('Home_Session');
        $db = DB::table('u_address')->where('id','=',$id)->update(['address_status'=>'0']);
        if ($db) {
          return redirect('/user/my_address')->with('Success','取消成功');
        }else{
          return back()->with('Error','取消失败');
        }
    }

}
