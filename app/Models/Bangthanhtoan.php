<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangthanhtoan extends Model
{
    use HasFactory;
    protected $table = 'bangthanhtoan';

    protected $fillable = [
        'users_id',
        'vexem_id',
        'lichtrinh_id',
        'profile_id',
        'soluongve',
        'tongtien',
        'pttt',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function vexem(){
    return $this->hasMany(Vexem::class);
}
public function lichtrinh(){
    return $this->hasMany(Lichtrinh::class);
}
public function profile(){
    return $this->hasMany(Profile::class);
}
}
