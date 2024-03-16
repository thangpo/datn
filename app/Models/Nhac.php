<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhac extends Model
{
    use HasFactory;
    
    protected $table = 'nhac';

    protected $fillable = [
        'nhomnhac_id',
        'tenn',
        'anh',
        'view_count',
        'nhac',
        'loainhac',
        'tacgia',
  ];

public function likenhac(){
    return $this->hasMany(LikeNhac::class);
}
}
