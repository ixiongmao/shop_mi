<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminMealController extends Controller
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
        $meal = DB::table('goods_meals')->paginate(25);

        return view('Admin.Meals.list',['meal'=>$meal,'get_session'=>$get_session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $get_session = session('Admin_Session');
        return view('Admin.Meals.add',['get_session'=>$get_session]);
    }

    /**
     * 保存组合套餐数据
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $meal = $request->all();
        $num = DB::table('goods_meals')->insert(['goods_meals_name'=>$meal['goods_meals_name'],'goods_meals_detail'=>$meal['goods_meals_detail'],'goods_meals_price'=>$meal['goods_meals_price']]);

        if($num){
            return redirect('/admin/meals/index')->with('Success','添加成功');
        }


    }

    /**
     * 修改组合套餐
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $get_session = session('Admin_Session');
        $meal = DB::table('goods_meals')->where('id','=',$id)->get();
        $meal = $meal[0];

        if($meal){
            return view('Admin.Meals.edit',['meal'=>$meal,'get_session'=>$get_session]);
        }
    }

    /**
     *  更新组合套餐商品
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $meal = $request->all();

         $num = DB::table('goods_meals')->where('id','=',$id)->update(['goods_meals_name'=>$meal['goods_meals_name'],'goods_meals_detail'=>$meal['goods_meals_detail'],'goods_meals_price'=>$meal['goods_meals_price']]);

         if($num){
            return redirect('/admin/meals/index')->with('Success','修改成功');
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
        //
    }
}
