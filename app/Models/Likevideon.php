<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likevideon extends Model
{
    use HasFactory;
    protected $table = 'likevideon';

    protected $fillable = [
        'videongan_id',
        'users_id',
    ];

public function users(){
    return $this->hasMany(User::class);
}
public function videongan(){
    return $this->hasMany(videongan::class);
}
}
