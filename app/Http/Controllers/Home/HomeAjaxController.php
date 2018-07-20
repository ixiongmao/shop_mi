<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeAjaxController extends Controller
{
      public function Ajax(Request $request)
      {
        isset($_GET['do']) ? $_GET['do'] : '' ;
        if (empty($_GET['do'])) {
          return 'NotFound';
        }
        if ($_GET['do'] == 'Comment') {
          $data = $request->except('_token','do');
          if ($data['m_content'] == '') {
            return 'Undefined';
          }
          $db_comments = DB::table('u_comments')->where('user_id','=',$data['m_id'])->where('goods_id','=',$data['goods_id'])->first();
          if ($db_comments != null) {
            return 'HaveComments';
          }

          $db = DB::table('u_comments')->insert([
            'comment_status'=>'1',
            'user_id'=>$data['m_id'],
            'goods_id'=>$data['goods_id'],
            'comment_content'=>$data['m_content'],
            'comment_time'=>time()
          ]);
          $db1 = DB::table('u_orders')->where('user_id','=',$data['m_id'])->where('goods_id','=',$data['goods_id'])->update(['orders_status'=>'4']);
          if ($db && $db1) {
            echo 'Success';
          } else {
            echo 'Error';
          }

        }
      }
}
