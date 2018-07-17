<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/send','MailController@send');



Route::get('/','Home\HomeIndexController@index');
Route::get('/list/{id}','Home\HomeIndexController@list');
Route::get('/item/{id}','Home\HomeIndexController@item');
//前台产品详情页 查询
Route::post('/Home/check/meal','Home\HomeIndexController@meal');

Route::get('/downloads','Home\HomeIndexController@Downloads');
Route::get('/Search','Home\HomeIndexController@Search');
//前台文章显示
Route::get('/news','Home\HomeNewsController@index');
Route::get('/news/{id}','Home\HomeNewsController@show');
//售后网点
Route::get('/aftersale_site','Home\HomeAfterSaleController@index');
//登录注册操作
Route::get('/login','Home\UserLoginController@Login');
Route::post('/login/select','Home\UserLoginController@LoginIndex');
Route::get('/reg','Home\UserLoginController@Register');
Route::post('/reg/create','Home\UserLoginController@RegCreate');
Route::get('/User/VerifyMimaCode','Home\UserLoginController@VerifyMimaCode');
Route::post('/User/Ajax','Home\UserLoginController@Ajax');
Route::post('/User/SetMima','Home\UserLoginController@SetPassword');
Route::post('/User/SavePassword','Home\UserLoginController@UpdatePasswd');

Route::get('/logout','Home\UserLoginController@logout');

Route::post('/admin/user/ajax','Admin\AdminUserController@Ajax');

Route::group(['middleware'=>'Home_Session'],function() {
  Route::get('/user/index','Home\UserIndexController@index');
  Route::get('/user/user','Home\UserIndexController@Uindex');
  //订单中心
  Route::get('/user/user','Home\UserOrderController@index');
  //修改我的资料
  Route::post('/User/My/Ajax','Home\UserController@Ajax');
  Route::get('/user/my_information','Home\UserMyInformationController@index');

  //售后服务
  Route::get('/user/aftersale','Home\UserAfterSaleController@index');

});
//
/**
 *  Auth：IXiongmao
 *  DES：后台全部操作管理
 */
 // 后台登录
 Route::get('/admin666',function() {
   return redirect('/admin/login');
 });
 Route::get('/admin/login','Admin\AdminLoginController@index');
 Route::post('/admin/login/select','Admin\AdminLoginController@Save');
 Route::get('/admin/login/logout','Admin\AdminLoginController@logout');
 //后台路由组
 Route::group(['middleware'=>'Admin_Session'],function() {
   // 后台文章管理
   Route::get('/admin/news/index','Admin\AdminNewsController@index');
   Route::get('/admin/news/create','Admin\AdminNewsController@create');
   Route::post('/admin/news/store','Admin\AdminNewsController@store');
   Route::get('/admin/news/edit/{id}','Admin\AdminNewsController@edit');
   Route::post('/admin/news/update/{id}','Admin\AdminNewsController@update');
   Route::get('/admin/news/del/{id}','Admin\AdminNewsController@destroy');

   // 后台显示
   Route::get('/admin/index','Admin\AdminIndexController@index');
   //后台空白页
   Route::get('/admin/blank','Admin\AdminIndexController@blank');
   // 后台员工操作
   Route::get('/admin/admin/index','Admin\AdminAdminController@index');
   Route::post('/admin/admin/ajax','Admin\AdminAdminController@Ajax');
   Route::get('/admin/admin/create','Admin\AdminAdminController@create');
   Route::post('/admin/admin/store','Admin\AdminAdminController@store');
   Route::get('/admin/admin/edit/{id}','Admin\AdminAdminController@edit');
   Route::post('/admin/admin/update/{id}','Admin\AdminAdminController@update');
   Route::get('/admin/admin/del/{id}','Admin\AdminAdminController@destroy');
   Route::get('/admin/admin/record/{id}','Admin\AdminAdminController@Record_index');

   //后台商品分类
  Route::get('/admin/cate/create','Admin\AdminCateController@create');
  Route::post('/admin/cate/store','Admin\AdminCateController@store');
  Route::get('/admin/cate/index','Admin\AdminCateController@index');
  // Route::get('/admin/cate/del/{id}','Admin\AdminCateController@destroy');
  Route::get('/admin/cate/edit/{id}','Admin\AdminCateController@edit');
  // Route::post('/admin/cate/update/{id}','Admin\AdminCateController@update');


   //后台 商品添加模块
   Route::get('/admin/goods/index','Admin\AdminGoodsController@index');
   Route::get('/admin/goods/create','Admin\AdminGoodsController@create');
   Route::post('/admin/goods/store','Admin\AdminGoodsController@store');
   Route::get('/admin/goods/edit/{id}','Admin\AdminGoodsController@edit');
   Route::get('/admin/goods/update/{id}','Admin\AdminGoodsController@update');
   Route::get('/admin/goods/destroy/{id}','Admin\AdminGoodsController@destroy');
   //Route::post('/admin/good/delAll','Admin\GoodsController@delAll');

   //后台商品模块AJAX验证
   Route::post('/admin/good_ajax/store','Admin\GoodsAjaxController@store');

   //后台组合套餐模块
   Route::get('/admin/meal/create','Admin\AdminMealController@create');
   Route::post('/admin/meal/store','Admin\AdminMealController@store');
   Route::get('/admin/meal/index','Admin\AdminMealController@index');
   Route::get('/admin/meal/edit/{id}','Admin\AdminMealController@edit');
   Route::post('/admin/meal/update','Admin\AdminMealController@update');
   Route::get('/admin/meal/delete/{id}','Admin\AdminMealController@delete');


   // 后台广告操作
   Route::get('/admin/ad/index','Admin\AdminAdController@index');
   Route::get('/admin/ad/create','Admin\AdminAdController@create');
   Route::post('/admin/ad/store','Admin\AdminAdController@store');
   Route::get('/admin/ad/edit/{id}','Admin\AdminAdController@edit');
   Route::post('/admin/ad/update/{id}','Admin\AdminAdController@update');

   // 后台会员管理操作
   Route::get('/admin/user/index','Admin\AdminUserController@index');
   Route::get('/admin/user/create','Admin\AdminUserController@create');
   Route::post('/admin/user/store','Admin\AdminUserController@store');
   Route::get('/admin/user/edit/{id}','Admin\AdminUserController@edit');
   Route::post('/admin/user/update/{id}','Admin\AdminUserController@update');
   Route::get('/admin/user/destroy/{id}','Admin\AdminUserController@destroy');//会员回收站
   Route::get('/admin/user/recycled','Admin\AdminUserController@recycled');//会员回收站显示
   Route::get('/admin/user/recover/{id}','Admin\AdminUserController@recover');//会员回收站恢复
   Route::get('/admin/user/del/{id}','Admin\AdminUserController@delete');//会员彻底删除
   //后台文件下载
   Route::get('/admin/qudong/create','Admin\AdminQuDongController@create');
   Route::post('/admin/qudong/store','Admin\AdminQuDongController@store');
   Route::get('/admin/qudong/index','Admin\AdminQuDongController@index');
   Route::get('/admin/qudong/del/{id}','Admin\AdminQuDongController@destroy');
   Route::get('/admin/qudong/edit/{id}','Admin\AdminQuDongController@edit');
   Route::post('/admin/qudong/update/{id}','Admin\AdminQuDongController@update');

   // 后台会员反馈操作
   Route::get('/admin/feedback/index','Admin\AdminFeedbackController@index');
   //Route::get('/admin/feedback/edit/{id}','Admin\AdminFeedbackController@edit');
   Route::get('/admin/feedback/del/{id}','Admin\AdminFeedbackController@destroy');

   // 后台首页幻灯片操作
   Route::get('/admin/banner/index','Admin\AdminBannerController@index');
   Route::get('/admin/banner/create','Admin\AdminBannerController@create');
   Route::post('/admin/banner/store','Admin\AdminBannerController@store');
   Route::get('/admin/banner/edit/{id}','Admin\AdminBannerController@edit');
   Route::post('/admin/banner/update/{id}','Admin\AdminBannerController@update');
   Route::get('/admin/banner/del/{id}','Admin\AdminBannerController@destroy');

   // 后台增值服务操作
   Route::get('/admin/zengzhi/index','Admin\AdminZengZhiController@index');
   Route::get('/admin/zengzhi/create','Admin\AdminZengZhiController@create');
   Route::post('/admin/zengzhi/store','Admin\AdminZengZhiController@store');
   Route::get('/admin/zengzhi/edit/{id}','Admin\AdminZengZhiController@edit');
   Route::post('/admin/zengzhi/update/{id}','Admin\AdminZengZhiController@update');
   Route::get('/admin/zengzhi/del/{id}','Admin\AdminZengZhiController@destroy');

   // 后台网站配置
   Route::get('/admin/system/index','Admin\AdminSystemController@index');
   Route::post('/admin/system/update/{id}','Admin\AdminSystemController@update');

   // 后台记录管理
   Route::get('/admin/record/index','Admin\AdminRecordController@index');
   Route::post('/admin/Record/Ajax','Admin\AdminRecordController@Ajax');
   //Route::post('/admin/system/update/{id}','Admin\AdminSystemController@update');

   // 后台友情链接操作
   Route::get('/admin/links/index','Admin\AdminLinksController@index');
   Route::get('/admin/links/create','Admin\AdminLinksController@create');
   Route::post('/admin/links/store','Admin\AdminLinksController@store');
   Route::get('/admin/links/edit/{id}','Admin\AdminLinksController@edit');
   Route::post('/admin/links/update/{id}','Admin\AdminLinksController@update');
   Route::get('/admin/links/del/{id}','Admin\AdminLinksController@destroy');

   // 后台售后网点操作
   Route::get('/admin/aftersale_site/index','Admin\AdminAfterSaleController@index');
   Route::get('/admin/aftersale_site/create','Admin\AdminAfterSaleController@create');
   Route::post('/admin/aftersale_site/store','Admin\AdminAfterSaleController@store');
   Route::get('/admin/aftersale_site/edit/{id}','Admin\AdminAfterSaleController@edit');
   Route::post('/admin/aftersale_site/update/{id}','Admin\AdminAfterSaleController@update');
   Route::get('/admin/aftersale_site/del/{id}','Admin\AdminAfterSaleController@destroy');
 });
