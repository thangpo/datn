<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thongbaovd extends Model
{
    use HasFactory;
    protected $table = 'thongbaovd';

    protected $fillable = [
        'nhomnhac_id',
        'baihat_id',
  ];

public function nhomnhac(){
    return $this->hasMany(Nhomnhac::class);
}
public function baihat(){
    return $this->hasMany(Baihat::class);
}
}
