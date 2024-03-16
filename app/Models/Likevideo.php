<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likevideo extends Model
{
    use HasFactory;
    protected $table = 'likevideo';

    protected $fillable = [
        'users_id',
        'baihat_id',
    ];

public function users(){
    return $this->hasMany(User::class);
}
public function baihat(){
    return $this->hasMany(Baihat::class);
}
}
