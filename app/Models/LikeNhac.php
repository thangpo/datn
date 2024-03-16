<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeNhac extends Model
{
    use HasFactory;
    protected $table = 'likenhac';

    protected $fillable = [
        'users_id',
        'nhac_id',
  ];

  public function users(){
    return $this->hasMany(User::class);
}
public function nhac(){
    return $this->hasMany(Nhac::class);
}
}
