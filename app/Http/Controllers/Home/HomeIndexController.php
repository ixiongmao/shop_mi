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
        $Promotion = DB::table('goods')->where('goods_sales_status','=','1')->orderBy('hander_time','desc')->get();
        $I_Cates = DB::table('cates')->get();
        $I_Goods = DB::table('goods')->paginate(10);
        return view('Home.Index',['banner'=>$banner,'guanggao'=>$guanggao,'News'=>$News,'Promotion'=>$Promotion,'I_Goods'=>$I_Goods,'I_Cates'=>$I_Cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request,$id)
    {
        //
        $F_Cates = DB::table('cates')->where('id','=',$id)->first();
        $Cates = DB::table('cates')->get();
        $L_Goods = DB::table('goods')->orderBy('id','desc')->paginate(5);
        return view('Home.list',['F_Cates'=>$F_Cates,'Cates'=>$Cates,'L_Goods'=>$L_Goods]);
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
        $goods = GoodsModel::find($id);
        //var_dump($goods);
        if ($goods == '') {
          return redirect('/shelves')->with('Error','商品不存在！');
        }
        if (($goods->goods_status) == 0) {
          return redirect('/shelves')->with('Error','商品已下架！');
        }
        $three = CateModel::find($goods->goods_cates)->cname;
        $secondid = CateModel::find($goods->goods_cates)->pid;
        $second = CateModel::find($secondid)->cname;
        $firstid = CateModel::find($secondid)->pid;
        $first = CateModel::find($firstid)->cname;
        $details = DB::table('goods_details')->where('gid','=',$id)->get();
        $details = $details[0];
        $meals = DB::table('goods_meals')->select('id','goods_meals_detail','goods_meals_price')->get();

        //商品评论
        $U_user = DB::table('users')->get();
        $U_comments = DB::table('u_comments')->where('goods_id','=',$id)->orderBy('id','desc')->paginate(2);
        $U_comments_num = DB::table('u_comments')->where('goods_id','=',$id)->where('comment_status','=','1')->count();
        $U_orders = DB::table('u_orders')->where('user_id','=',$get_session['id'])->where('goods_id','=',$id)->first();
        $url = $request->url();
        return view('Home.item',['url'=>$url,'goods'=>$goods,'first'=>$first,'firstid'=>$firstid,'second'=>$second,'secondid'=>$secondid,'three'=>$three,'details'=>$details,'meals'=>$meals,'U_comments'=>$U_comments,'U_comments_num'=>$U_comments_num,'U_orders'=>$U_orders,'U_user'=>$U_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
          $Search = DB::table('goods')->where('goods_name','like','%'.$data.'%')->orderBy('goods_price','asc')->paginate(5);
        } else {
          $Search = DB::table('goods')->where('goods_name','like','%'.$data.'%')->orderBy('goods_price','desc')->paginate(5);
        }
        return view('Home.search',['Sdata'=>$data,'Search'=>$Search,'jiage'=>$jiage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shelves(Request $request)
    {
        //
        return view('Home.Not_Found');
    }

}
