<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminAddressModel extends Model
{
    //
    public $table = 'u_address';
    public $primarykey = 'id';

    public function UsersInfo()
    {   //这个里面的App\Models\Admin\UsersModel字段 存的是当前$this 表当中的主键
        return $this->hasOne('App\Models\Admin\UsersModel','id','uid');
    }
}
