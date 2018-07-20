<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserIndexController extends Controller
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
        $U_collect_goods = DB::table('u_collects')->where('uid','=',$get_session['id'])->count();
        $U_dlrecords = DB::table('u_dlrecords')->where('user_id','=',$get_session['id'])->orderBy('id','desc')->paginate(5);
        // var_dump($get_session);
        return view('Home.User.index',['U_dlrecords'=>$U_dlrecords,'U_collect_goods'=>$U_collect_goods]);
    }

}
