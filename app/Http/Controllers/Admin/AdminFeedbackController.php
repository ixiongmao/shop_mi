<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\FeedbackModel;

class AdminFeedbackController extends Controller
{
  
    /**
     * 反馈显示
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('fk_guanjianzi','');
        $data = FeedbackModel::where('feedbacks_name','like','%'.$search.'%')->orderBy('id','asc')->paginate(25);
        return view('Admin.Feedback.list',['data'=>$data,'search'=>$search]);
    }

    /**
     * 反馈删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = DB::table('u_feedbacks')->where('id','=',$id)->delete();
        //$res = $del -> delete();
        if ($del) {
          return redirect('/admin/feedback/index')->with('Success','删除成功');
        } else {
          return back()->with('Error', '删除失败');
        }

    }
}
