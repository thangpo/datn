<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anhsp extends Model
{
    use HasFactory;
    protected $table = 'anh_theo_sp';

    protected $fillable = [
        'sanpham_id',
        'anh_phu',
    ];

    public function sanpham()
    {
        return $this->hasMany(Sanpham::class);
    }
}
