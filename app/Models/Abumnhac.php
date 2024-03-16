<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abumnhac extends Model
{
    use HasFactory;
    protected $table = 'abumnhac';

    protected $fillable = [
        'users_id',
        'tenab',
  ];

public function users(){
    return $this->hasMany(User::class);
}
}
