<?php

namespace App\Providers;

use DB;
use App\Models\Admin\GoodsModel;
use App\Models\Admin\CateModel;
use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //视图Composer
        view()->composer('Admin.*',function($view){
          $get_session = session('Admin_Session');
             $view->with('get_session',$get_session);
         });

        view()->composer('Home.*',function($view){
          $get_session = session('Home_Session');
           $systems = DB::table('systems')->first();
           $Cate = CateModel::select('id','cname','pid','path',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
           $good = GoodsModel::select('id','goods_cates')->get();
           $Links = DB::table('links')->paginate(10);
             $view->with('get_session',$get_session);
             $view->with('systems',$systems);
             $view->with('good',$good);
             $view->with('Cate',$Cate);
             $view->with('Links',$Links);
         });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
