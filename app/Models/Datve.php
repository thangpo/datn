<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datve extends Model
{
    use HasFactory;
    protected $table = 'datve';

    protected $fillable = [
        'vexem_id',
        'users_id',
  ];

public function vexem(){
    return $this->hasMany(Vexem::class);
}
public function users(){
    return $this->hasMany(User::class);
}
}
