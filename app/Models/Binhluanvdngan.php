<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluanvdngan extends Model
{
    use HasFactory;
    protected $table = 'binhluanvdngan';

    protected $fillable = [
        'users_id',
        'videongan_id',
        'noidung',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function videongan(){
    return $this->hasMany(Videongan::class);
}
}
