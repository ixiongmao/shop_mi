<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeIndexController extends Controller
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
        $banner = DB::table('banners')->get();
        return view('Home.Index',['get_session'=>$get_session,'banner'=>$banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request,$id)
    {
        //
        $get_session = session('Home_Session');
        return view('Home.list',['get_session'=>$get_session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item(Request $request,$id)
    {
        //
        $get_session = session('Home_Session');
        $url = $request->url();
        return view('Home.item',['get_session'=>$get_session,'url'=>$url]);
    }

}
