<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    use HasFactory;
    protected $table = 'donhang';

    protected $fillable = [
        'users_id',
        'vexem_id',
        'nganhang',
        'soluongve'
  ];

public function vexem(){
    return $this->hasMany(Vexem::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
