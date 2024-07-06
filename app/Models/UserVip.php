<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserVip extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "user_vip";
    
    protected $fillable = [
        'ten_vip',
        'gia',
        'ngay_hh',
        'dac_quyen'
    ];
    public function like(){
        return $this->hasMany(Like::class);
    }
    public function binhluan(){
        return $this->hasMany(Binhluan::class);
    }
    public function profile(){
        return $this->hasMany(Profile::class);
    }
    public function baidang(){
        return $this->hasMany(Baidang::class);
    }
    public function binhluanid(){
        return $this->hasMany(Binhluanid::class);
    }
}
