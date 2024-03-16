<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vexem extends Model
{
    use HasFactory;
    protected $table = 'vexem';

    protected $fillable = [
        'lichtrinh_id',
        'tenve',
        'giave',
        'soluong',
        'loaighe'
  ];

public function lichtrinh(){
    return $this->hasMany(Lichtrinh::class);
}
}
