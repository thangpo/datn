<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluanid extends Model
{
    use HasFactory;
    protected $table = 'binhluanid';

    protected $fillable = [
        'idol_id',
        'users_id',
        'baidang_id',
        'binhluan',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function idol(){
    return $this->hasMany(Idol::class);
}
public function baidang(){
    return $this->hasMany(Baidang::class);
}
}
