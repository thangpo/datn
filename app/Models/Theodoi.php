<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theodoi extends Model
{
    use HasFactory;
    protected $table = 'theodoi';

    protected $fillable = [
        'users_id',
        'idol_id',
  ];

public function idol(){
    return $this->hasMany(Idol::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
