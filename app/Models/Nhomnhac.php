<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhomnhac extends Model
{
    use HasFactory;
    protected $table = 'nhomnhac';

    protected $fillable = [
        'xoa_mem',
        'tennn',
        'logonn',
        'sltv',
        'ngaytl',
  ];

public function idol(){
    return $this->hasMany(Idol::class);
}
public function baihat(){
    return $this->hasMany(Baihat::class);
}
public function lichtrinh(){
    return $this->hasMany(Lichtrinh::class);
}
public function nhac(){
    return $this->hasMany(Nhac::class);
}
public function dangkykenh(){
    return $this->hasMany(Dangkykenh::class);
}
public function thongbaovd(){
    return $this->hasMany(Thongbaovd::class);
}
}
