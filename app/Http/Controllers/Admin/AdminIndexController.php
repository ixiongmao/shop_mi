<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\UsersModel;
use App\Models\Admin\FeedbackModel;


class AdminIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      check_admin_purview('0');
      $U_count = UsersModel::where('u_status','=','1')->count();
      $Feedback_count = FeedbackModel::count();
      return view('Admin.index',['U_count'=>$U_count,'Feedback_count'=>$Feedback_count]);
    }

}
