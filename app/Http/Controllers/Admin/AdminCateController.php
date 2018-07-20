<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\CateModel;
class AdminCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
        foreach ($data as $k => $v) {
             $n = substr_count($v->path,',');
             $data[$k]->cname = str_repeat('|----',$n).$data[$k]->cname;
        }
        return view('Admin.Cate.list',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
        foreach ($data as $k => $v) {
             $n = substr_count($v->path,',');
             $data[$k]->cname = str_repeat('|----',$n).$data[$k]->cname;
        }
        return view('Admin.Cate.add',['data'=>$data]);
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
        check_admin_purview('0');
        $data = new CateModel;
        $pid = $request -> input('pid','');
        if ($pid == 0) {
            $data -> path = '0';
        } else {
            $parent_data = CateModel::find($pid);
            $data -> path = $parent_data->path.','.$parent_data->id;
        }
        $data -> cname = $request -> input('cname','');
        $data -> pid = $pid;
        $data -> save();
        if ($data -> save()) {
            return redirect('/admin/cate/index')->with('Success','添加成功');
        }else{
            return back()->with('Error','添加失败');
        }
    }


    /**
     * 修改商品分类
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cate = CateModel::find($id);
        $cates = CateModel::all();

        /*echo "<pre>";
        var_dump($cate);*/
        return view('Admin.Cate.edit',['cate'=>$cate,'cates'=>$cates]);

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
