<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        //
          // $name = '学院君';
          //   $imgPath = 'http://laravelacademy.org/wp-statics/images/carousel/LaravelAcademy.jpg';
          //   $flag = Mail::send('Home.mail',['name'=>$name,'imgPath'=>$imgPath],function($message){
          //       $to = '764523371@qq.com';
          //       $message->to($to)->subject('测试邮件');
          //
          //       // $attachment = storage_path('app/files/test.doc');
          //       // //在邮件中上传附件
          //       // $message->attach($attachment,['as'=>"=?UTF-8?B?".base64_encode('测试文档')."?=.doc"]);
          //   });
        
    }
}
