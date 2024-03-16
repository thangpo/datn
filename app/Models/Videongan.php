<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videongan extends Model
{
    use HasFactory;
    protected $table = 'videongan';

    protected $fillable = [
        'idol_id',
        'tieude',
        'video',
  ];

public function idol(){
    return $this->hasMany(Idol::class);
}
public function likevideon(){
    return $this->hasMany(Likevideon::class);
}
public function binhluanvdngan(){
    return $this->hasMany(Binhluanvdngan::class);
}
}
