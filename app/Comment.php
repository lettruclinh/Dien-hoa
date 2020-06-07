<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    public function sanpham(){
    	return $this->belongsTo('App\SanPham', 'idSanPham', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'idUser', 'id');
    }
}
