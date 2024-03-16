<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhluanNhac extends Model
{
    use HasFactory;
    protected $table = 'binhluannhac';

    protected $fillable = [
        'nhac_id',
        'users_id',
        'noidung',
  ];

public function users(){
    return $this->hasMany(User::class);
}
public function nhac(){
    return $this->hasMany(Nhac::class);
}
}
