<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminSerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Search = $request->input('Search');
        $get_session = session('Admin_Session');
        $data = DB::table('server')->where('title','like','%'.$Search.'%')->paginate(25);
        return view('Admin.Ser.list',['data'=>$data,'get_session'=>$get_session,'Search'=>$Search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $get_session = session('Admin_Session');
        return view('Admin.Ser.add',['get_session'=>$get_session]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $db = DB::table('server')->insert([
          'title'=>$data['title'],
          'content'=>$data['content'],
        ]);
        if ($db) {
          return redirect('/admin/ser/index')->with('Success','添加成功');
        } else {
          return back()->with('Error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get_session = session('Admin_Session');
        $data = DB::table('server')->where('id','=',$id)->first();
        return view('Admin.Ser.edit',['data'=>$data,'get_session'=>$get_session]);
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
        $data = $request->except('_token');
        $db = DB::table('server')->where('id','=',$id)->update([
          'title'=>$data['title'],
          'content'=>$data['content'],
        ]);
        if ($db) {
          return redirect('/admin/ser/index')->with('Success','修改成功');
        } else {
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
        $db = DB::table('server')->where('id','=',$id)->delete();
        if ($db) {
          return redirect('/admin/ser/index')->with('Success','删除成功');
        } else {
          return back()->with('Error','删除失败');
        }
    }
}
