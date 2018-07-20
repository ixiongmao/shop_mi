<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    //
    public $table = 'u_orders';
    public $primarykey = 'id';

    public function UsersInfo()
    {
      return $this->hasOne('App\Models\Admin\UsersModel','id','user_id');
    }

    public function GoodsInfo()
    {
      return $this->hasOne('App\Models\Admin\GoodsModel','id','goods_id');
    }

    public function AddressInfo()
    {
      return $this->hasOne('App\Models\Admin\AdminAddressModel','id','address_id');
    }

}
