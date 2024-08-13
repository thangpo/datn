<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThoiGian extends Model
{
    use HasFactory;
    protected $table = 'thoi_gian';

    protected $fillable = [
        'sanpham_id',
        'user_id',
        'gia_sanpham'
    ];

    public function san_pham_an_theo()
    {
        return $this->hasMany(Sanpham::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
