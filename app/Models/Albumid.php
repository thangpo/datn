<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albumid extends Model
{
    use HasFactory;
    protected $table = 'albumid';

    protected $fillable = [
        'nhac_id',
        'abumnhac_id',
  ];

public function nhac(){
    return $this->hasMany(Nhac::class);
}
public function abumnhac(){
    return $this->hasMany(Abumnhac::class);
}
}
