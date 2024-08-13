<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewBh extends Model
{
    use HasFactory;
    protected $table = 'view_baihat';

    protected $fillable = [
        'user_id',
        'baihat_id',
        'lua_chon'
    ];

    public function baihat()
    {
        return $this->hasMany(Baihat::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
