<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietTL_NL extends Model
{
    //
    protected $table="ChiTietTL";
    public function lo(){
        return $this->belongsTo('App\Lo', 'idLo', 'idLo');
    }

    public function phieuthanhly(){
        return $this->belongsTo('App\PhieuThanhLy', 'idPTL', 'idPTL');
    }
}
