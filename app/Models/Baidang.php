<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baidang extends Model
{
    use HasFactory;
    protected $table = 'baidang';

    protected $fillable = [
        'users_id',
        'noidung',
        'anhbd',
        'like',
        'comment',
  ];
public function like(){
    return $this->hasMany(Like::class);
}
public function binhluan(){
    return $this->hasMany(Binhluan::class);
}
public function binhluanid(){
    return $this->hasMany(Binhluanid::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
