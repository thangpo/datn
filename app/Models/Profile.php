<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    protected $fillable = [
        'users_id',
        'tennd',
        'tuoi',
        'diachi',
        'sdt',
        'gioitinh',
        'anhnd'
  ];
}
