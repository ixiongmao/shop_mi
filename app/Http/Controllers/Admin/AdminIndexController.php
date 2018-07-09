<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\UsersModel;

class AdminIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //echo '<pre>';
      $val = session('Admin_Login');
      $db = $request->session()->get('a_admin');
      $U_count = UsersModel::where('u_status','=','1')->count();
      return view('Admin.index',['U_count'=>$U_count]);
    }
}
