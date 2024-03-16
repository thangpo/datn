<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albumvideo extends Model
{
    use HasFactory;
    protected $table = 'albumvideo';

    protected $fillable = [
        'baihat_id',
        'danhmucvd_id',
  ];

public function baihat(){
    return $this->hasMany(Baihat::class);
}
public function danhmucvd(){
    return $this->hasMany(Danhmucvd::class);
}
}
