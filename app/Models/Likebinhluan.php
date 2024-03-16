<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likebinhluan extends Model
{
    use HasFactory;
    protected $table = 'likebinhluan';

    protected $fillable = [
        'users_id',
        'baidang_id',
        'idol_id'
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function idol(){
    return $this->hasMany(Idol::class);
}
public function baidang(){
    return $this->hasMany(Baidang::class);
}
}
