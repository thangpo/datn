<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewSanpham extends Model
{
    use HasFactory;
    protected $table = 'view_sanpham';

    protected $fillable = [
        'user_id',
        'so_tien'
    ];

    public function san_pham_an_theo()
    {
        return $this->hasMany(Sanpham::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
