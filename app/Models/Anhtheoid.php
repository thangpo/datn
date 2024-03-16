<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anhtheoid extends Model
{
    use HasFactory;
    protected $table = 'anhtheoid';

    protected $fillable = [
        'idol_id',
        'anhid',
    ];

public function idol(){
    return $this->hasMany(Idol::class);
}
}
