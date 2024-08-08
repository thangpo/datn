<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;

    protected $table = "danhmuc";

    protected $fillable = [
        'id',
        'ten_sanpham',
        'hinh_anh'
    ];

    public function san_pham_an_theo(){
        return $this->hasMany(Sanpham::class);
    }
}
