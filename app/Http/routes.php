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

Route::get('/', function () {
    return view('welcome');
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
 Route::post('/admin/login/select','Admin\AdminLoginController@save');
 Route::get('/admin/login/logout','Admin\AdminLoginController@logout');
 //后台路由组
 Route::group(['middleware'=>'Admin_Login'],function() {
   // 后台显示
   Route::get('/admin/index','Admin\AdminIndexController@index');

   //分类
   Route::get('/admin/cate/create','Admin\AdminCateController@create');
   Route::post('/admin/cate/store','Admin\AdminCateController@store');
   Route::get('/admin/cate/index','Admin\AdminCateController@index');
   // Route::get('/admin/cate/del/{id}','Admin\AdminCateController@destroy');
   // Route::get('/admin/cate/edit/{id}','Admin\AdminCateController@edit');
   // Route::post('/admin/cate/update/{id}','Admin\AdminCateController@update');

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
   Route::post('/admin/user/ajax','Admin\AdminUserController@Ajax');
   Route::post('/admin/user/update/{id}','Admin\AdminUserController@update');
   Route::get('/admin/user/destroy/{id}','Admin\AdminUserController@destroy');//会员回收站
   Route::get('/admin/user/recycled','Admin\AdminUserController@recycled');//会员回收站显示
   Route::get('/admin/user/recover/{id}','Admin\AdminUserController@recover');//会员回收站恢复
   Route::get('/admin/user/del/{id}','Admin\AdminUserController@delete');//会员彻底删除
   //驱动
   Route::get('/admin/qudong/create','Admin\AdminQuDongController@create');
   Route::post('/admin/qudong/store','Admin\AdminQuDongController@store');
   Route::get('/admin/qudong/index','Admin\AdminQuDongController@index');
   Route::get('/admin/qudong/del/{id}','Admin\AdminQuDongController@destroy');
   Route::get('/admin/qudong/edit/{id}','Admin\AdminQuDongController@edit');
   Route::post('/admin/qudong/update/{id}','Admin\AdminQuDongController@update');

   // 后台会员反馈操作
   Route::get('/admin/feedback/index','Admin\AdminFeedbackController@index');
   Route::get('/admin/feedback/edit/{id}','Admin\AdminFeedbackController@edit');
   Route::get('/admin/feedback/del/{id}','Admin\AdminFeedbackController@destroy');
 });
