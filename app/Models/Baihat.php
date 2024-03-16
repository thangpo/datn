<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baihat extends Model
{
    use HasFactory;
    protected $table = 'baihat';

    protected $fillable = [
        'id_nn',
        'tenbh',
        'ngayph',
        'nhac',
        'view_count',
        'theloai',
        'anhbh',
        'solnx',
  ];

public function nhomnhac(){
    return $this->hasMany(Nhomnhac::class);
}
public function binhluanvd(){
    return $this->hasMany(BinhluanVd::class);
}
public function likevideo(){
    return $this->hasMany(Likevideo::class);
}
public function thongbaovd(){
    return $this->hasMany(Thongbaovd::class);
}
}
