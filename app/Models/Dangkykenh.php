<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dangkykenh extends Model
{
    use HasFactory;
    protected $table = 'dangkykenh';

    protected $fillable = [
        'nhomnhac_id',
        'users_id',
  ];

public function nhomnhac(){
    return $this->hasMany(Nhomnhac::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
