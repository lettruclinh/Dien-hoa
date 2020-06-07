<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietLo extends Model
{
    protected $table="ChiTietLo";
    public function lo(){
        return $this->belongsTo('App\Lo', 'idLo', 'idLo');
    }
    public function loaihoa(){
        return $this->belongsTo('App\LoaiHoa', 'idLH', 'idLH');
    }
}
