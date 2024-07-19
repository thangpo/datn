<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $table = 'san_pham_an_theo';

    protected $fillable = [
        'id_danhmuc',
        'ten_sanpham',
        'gia_sanpham',
        'hinh_anh',
        'mo_ta'
    ];


    public function danhmuc(){
        return $this->hasMany(Danhmuc::class);
    }
}