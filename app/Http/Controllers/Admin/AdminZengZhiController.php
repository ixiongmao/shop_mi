<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminZengZhiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $get_session = session('Admin_Session');
        $data = DB::table('goods_vas')->paginate(25);
        return view('Admin.Zengzhi.list',['get_session'=>$get_session,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $get_session = session('Admin_Session');
        return view('Admin.Zengzhi.add',['get_session'=>$get_session]);
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
        $data = $request->except('_token');
        $db = DB::table('goods_vas')->insert([
          'vas_status'=>$data['v_status'],
          'vas_repertory'=>$data['v_repertory'],
          'vas_name'=>$data['v_name'],
          'vas_price'=>$data['v_price'],
          'vas_pic'=>$data['v_pic'],
          'vas_introduce'=>$data['v_introduce'],
          'vas_detail'=>$data['v_detail'],
          'vas_time'=>time()
        ]);
        if($db){
            return redirect('/admin/zengzhi/index')->with('Success','添加成功');
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
        //
        $get_session = session('Admin_Session');
        $data = DB::table('goods_vas')->where('id','=',$id)->first();
        return view('Admin.Zengzhi.edit',['data'=>$data,'get_session'=>$get_session]);
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
        $data = $request->except('_token');
        $db = DB::table('goods_vas')->where('id','=',$id)->update([
          'vas_status'=>$data['v_status'],
          'vas_repertory'=>$data['v_repertory'],
          'vas_name'=>$data['v_name'],
          'vas_price'=>$data['v_price'],
          'vas_pic'=>$data['v_pic'],
          'vas_introduce'=>$data['v_introduce'],
          'vas_detail'=>$data['v_detail']
        ]);
        if($db){
            return redirect('/admin/zengzhi/index')->with('Success','添加成功');
        }else{
            return back()->with('Error','添加失败');
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
    }
}
