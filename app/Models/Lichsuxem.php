<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lichsuxem extends Model
{
    use HasFactory;
    protected $table = 'lichsuxem';

    protected $fillable = [
        'baihat_id',
        'users_id',
  ];

public function baihat(){
    return $this->hasMany(Baihat::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
