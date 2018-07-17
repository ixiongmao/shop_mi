<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Models\Admin\CateModel;
use App\Models\Admin\GoodsModel;
use App\Models\Admin\GoodsDetails;
use App\Http\Composer\ViewComposers;

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

        $banner = DB::table('banners')->where('banner_status','=','1')->get();
        $guanggao = DB::table('advertises')->where('ad_status','=','1')->paginate(2);
        $News = DB::table('news')->where('news_status','=','1')->orderBy('id','desc')->paginate(5);
        $zengzhi = DB::table('goods_vas')->where('vas_status','=','1')->paginate(30);
        return view('Home.Index',['banner'=>$banner,'guanggao'=>$guanggao,'zengzhi'=>$zengzhi,'News'=>$News]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request,$id)
    {
        //
        $Cate = CateModel::select('id','cname','pid','path','status',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->paginate(25);
        return view('Home.list',['Cate'=>$Cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item(Request $request,$id)
    {
        //
        $goods = GoodsModel::find($id);
        $three = CateModel::find($goods->goods_cates)->cname;
        $secondid = CateModel::find($goods->goods_cates)->pid;
        $second = CateModel::find($secondid)->cname;
        $firstid = CateModel::find($secondid)->pid;
        $first = CateModel::find($firstid)->cname;
        $details = DB::table('goods_details')->where('gid','=',$id)->get();
        $details = $details[0];
        $meals = DB::table('goods_meals')->select('id','goods_meals_detail','goods_meals_price')->get();

        $url = $request->url();
        return view('Home.item',['url'=>$url,'goods'=>$goods,'first'=>$first,'firstid'=>$firstid,'second'=>$second,'secondid'=>$secondid,'three'=>$three,'details'=>$details,'meals'=>$meals]);
    }
    /**
     *
     *
     *
     */
    public function meal(Request $request)
    {
        $ids = $request -> input('ids');
        $prices = DB::table('goods_meals')->whereIn('id',$ids)->sum('goods_meals_price');
        if($prices){
            echo $prices;
        }else{
            echo 1;
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Downloads()
    {
        //
        $Downloads = DB::table('qudongs')->paginate(10);
        return view('Home.downloads',['Downloads'=>$Downloads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {
        //
        $data = $request->input('key');
        $jiage = isset($_GET['jiage']) ? $_GET['jiage'] : '';
        if ($jiage == 'asc') {
          $Search = DB::table('goods')->where('goods_name','like','%'.$data.'%')->orderBy('goods_price','asc')->paginate(2);
        } else {
          $Search = DB::table('goods')->where('goods_name','like','%'.$data.'%')->orderBy('goods_price','desc')->paginate(25);
        }
        return view('Home.search',['Sdata'=>$data,'Search'=>$Search,'jiage'=>$jiage]);
    }

}
