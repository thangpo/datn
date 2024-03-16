<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhluanVd extends Model
{
    use HasFactory;
    protected $table = 'binhluanvd';

    protected $fillable = [
        'baihat_id',
        'users_id',
        'noidung',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function baihat(){
    return $this->hasMany(Baihat::class);
}
}
