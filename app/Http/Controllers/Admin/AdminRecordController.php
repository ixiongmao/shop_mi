<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        check_admin_purview('1');
        return view('Admin.Record.list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Ajax()
    {
        //
        isset($_GET['do']) ?  $_GET['do'] : '';

        if ($_GET['do'] == 'AdminRecord') {
          $d = strtotime('-1 month');//获取30天
          echo date('Y-m-d H:i:s',$d);

        }
    }

}
