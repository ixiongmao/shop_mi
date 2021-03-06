<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodInsertRequest;
use App\Models\Admin\GoodsModel;
use App\Models\Admin\GoodsDetails;
use App\Models\Admin\CateModel;
use App\Models\GoodsMondels;

class AdminGoodsController extends Controller
{
    /**
     * 上
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        check_admin_purview('4');
        //默认分页 没页显示25条信息
        $data = GoodsModel::paginate(25);
        $detail = GoodsDetails::all();
        $cate = CateModel::all();

        return view('Admin.Goods.list',['data'=>$data,'detail'=>$detail,'cate'=>$cate]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        check_admin_purview('4');
        $user = DB::table('users')->get();
        $cate = CateModel::all();
        $meal = DB::table('goods_meals')->select('id','goods_meals_detail')->get();

        return view('Admin.Goods.add',['user'=>$user,'cate'=>$cate,'meal'=>$meal]);
    }

    /**
     * 保存上传商品数据
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        check_admin_purview('4');
         $data = $request -> all();
         $get_session = session('Admin_Session');
          //事务回滚开始
         DB::beginTransaction();
          // 判断主图片是否存在
         if($data['goods_pic']){

           //执行添加数据  返回ID
           if($data['goods_sales_status']){
             $gid =  DB::table('goods')->insertGetId([
               'goods_name'=>$data['goods_name'],
               'goods_sn'=>$data['goods_sn'],
               'goods_cates'=>$data['goods_cates'],
               'goods_discript'=>$data['goods_discript'],
               'goods_pic'=>$data['goods_pic'],
               'goods_price'=>$data['goods_price'],
               'goods_sales_status'=>$data['goods_sales_status'],
               'goods_sales_price'=>$data['goods_sales_price'],
               'goods_sales_start'=>strtotime($data['goods_sales_start']),
               'goods_sales_end'=>strtotime($data['goods_sales_end']),
               'goods_status'=>$data['goods_status'],
               'handler'=>$get_session['a_name'],
               'hander_time'=>date('Y-m-d H:i:s',time())
             ]);
           }else{
              $gid =  DB::table('goods')->insertGetId(['goods_name'=>$data['goods_name'],'goods_sn'=>$data['goods_sn'],'goods_cates'=>$data['goods_cates'],'goods_discript'=>$data['goods_discript'],'goods_pic'=>$data['goods_pic'],'goods_price'=>$data['goods_price'],'goods_status'=>$data['goods_status'],'handler'=>$get_session['a_name'],'hander_time'=>date('Y-m-d H:i:s',time())]);
           }
          }


          //创建多文件上传对象
          if($data['goods_pics']){
            $goods_set_meals = $data['meal1'].','.$data['meal2'];
            //执行添加数据  返回ID
            $num = DB::table('goods_details')->insert([
              'gid'=>$gid,'goods_score'=>$data['goods_score'],
              'goods_nums'=>$data['goods_nums'],
              'goods_pics'=>$data['goods_pics'],
              'goods_tail'=>$data['goods_tail'],
              'goods_set_meals'=>$goods_set_meals,
              'goods_detail_pic'=>$data['goods_detail_pic']
            ]);
           }
           if($gid && $num){
                DB::commit();
                echo "success";
                return redirect('/admin/goods/index');
           }else{
                DB::rollBack();
                return back();
           }

    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //查询此id在关联数据
        check_admin_purview('4');
        $goods = DB::table('goods')->where('id','=',$id)->get();
        $details = DB::table('goods_details')->where('gid','=',$id)->get();
        $cate = CateModel::all();
        if($goods && $details){
          return view('Admin.Goods.edit',['goods'=>$goods,'details'=>$details,'cate'=>$cate]);
        }else{
          return back();
        }


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
        check_admin_purview('4');
        $data = $request->all();

         //事务回滚开始
           DB::beginTransaction();
          // var_dump($data);
           if($request -> hasFile('goods_pic')){
            //创建文件上传对象
           $profile = $request -> file('goods_pic');
           $ext = $profile->getClientOriginalExtension();
           //处理文件名称
           $temp_name = str_random(15);
           $name = $temp_name.'.'.$ext;
           $dirname = date('Ymd',time());
           $res = $profile -> move('./Admin/uploads/'.$dirname,$name);
   /*        $path = $dirname.'/'.$name;*/
          }
          if($res){
              $gid =  DB::table('goods')->insertGetId(['goods_name'=>$data['goods_name'],'goods_sn'=>$data['goods_sn'],'goods_cates'=>$data['goods_cates'],'goods_discript'=>$data['goods_discript'],'goods_pic'=>$res,'goods_price'=>$data['goods_price'],'goods_sales_time'=>$data['goods_sales_time'],'display'=>$data['display'],'handler'=>$data['handler']]);
            }

            $profile = $request->file('goods_pics');
            $names = [];
            foreach($profile as $k => $v){
             $ext = $v->getClientOriginalExtension();
            //处理文件名称
             $temp_name = str_random(5);
             $name = $temp_name.'.'.$ext;
             $dirname = date('Ymd',time());
             $res = $v -> move('./Admin/uploads_pic/'.$dirname,$name);
             $names[] = '/Admin/uploads_pic/'.$dirname.'/'.$name;
        }

           $num = DB::table('goods_details')->insert(['gid'=>$gid,'goods_brand'=>$data['goods_brand'],'goods_nums'=>$data['goods_nums'],'goods_pics'=>implode(",",$names),'goods_tail'=>$data['goods_tail']]);


           if($gid && $num){
                DB::commit();
                echo "success";
                return redirect('/admin/good/index');
           }else{
                DB::rollBack();
                return back();
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
        check_admin_purview('4');
        $order = GoodsModel::find($id);
        if($order -> delete()){
            return redirect('/admin/good/index');
        }else{
            return redirect('/admin/good/index');
        }

    }

    public function delAll(Request $request)
    {
        //
      $res = $request ->all();
      var_dump($res);
     /* DB::beginTransaction();
      if($res['item']){
        $num1 = DB::table('goods')->whereIn('id',$res['item'])->delete();
        $num2 = DB::table('goods_details')->whereIn('gid',$res['item'])->delete();
      }
      if($num1 && $num2){
        DB::commit();
        return redirect('/admin/good/index');
      }else{
        DB::rollBack();
        return back();
      }*/
    }
}
