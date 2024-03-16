<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    use HasFactory;
    protected $table = 'binhluan';

    protected $fillable = [
        'baidang_id',
        'users_id',
        'noidung',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function baidang(){
    return $this->hasMany(Baidang::class);
}
}
