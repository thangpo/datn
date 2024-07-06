<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhantin extends Model
{
    use HasFactory;
    protected $table = 'nhan_tin';

    protected $fillable = [
        'id_idol',
        'id_profile',
        'noidung',
        'anh'
  ];

public function profile(){
    return $this->hasMany(Profile::class);
}
public function idol(){
    return $this->hasMany(Idol::class);
}
}
