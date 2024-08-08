<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhluanSp extends Model
{
    use HasFactory;
    protected $table = 'binh_luan_sp';

    protected $fillable = [
        'user_id',
        'sanpham_id',
        'hinh_anh',
        'noi_dung',
        'so_sao'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function san_pham_an_theo()
    {
        return $this->hasMany(Sanpham::class);
    }
}
