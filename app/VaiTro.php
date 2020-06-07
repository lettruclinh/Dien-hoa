<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaiTro extends Model
{
    //
    protected $table='vaitro';
    public function quyen()
    {
    	return $this->hasMany('App\User','quyen','id');
    }

}
