<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idol extends Model
{
    use HasFactory;
    protected $table = 'idol';

    protected $fillable = [
        'id_nhomn',
        'tenid',
        'tuoi',
        'qquan',
        'anh',
        'chieucao',
        'cannang',
        'gioitinh'
  ];

  public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function theodoi(){
        return $this->hasMany(theodoi::class);
    }

    public function like(){
        return $this->hasMany(like::class);
    }

    public function likebinhluan(){
        return $this->hasMany(likebinhluan::class);
    }

}
