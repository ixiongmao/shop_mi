<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminSystemController extends Controller
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
        $data = DB::table('systems')->where('id','=','1')->first();
        return view('Admin.System',['get_session'=>$get_session,'data'=>$data]);
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
        $db = DB::table('systems')->where('id','=',$id)->update([
          'system_status'=>$data['system_status'],
          'system_name'=>$data['system_name'],
          'system_keywords'=>$data['system_keywords'],
          'system_description'=>$data['system_description'],
          'system_logo'=>$data['system_logo'],
          'system_weixin'=>$data['system_weixin'],
          'system_qq'=>$data['system_qq'],
          'system_phone'=>$data['system_phone'],
          'system_copyright'=>$data['system_copyright']
        ]);
        if ($db) {
          return back()->with('Success','修改成功');
        } else {
          return back()->with('Error','修改失败');
        }
    }
}
