<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thanhtoanvip extends Model
{
    use HasFactory;
    protected $table = 'thanhtoanvip';

    protected $fillable = [
        'id_user',
        'id_vip',
        'so_tien',
        'ngayhethan',
        'pttt'
  ];

public function userVip(){
    return $this->hasMany(UserVip::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
