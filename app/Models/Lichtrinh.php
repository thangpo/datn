<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lichtrinh extends Model
{
    use HasFactory;
    protected $table = 'lichtrinh';

    protected $fillable = [
        'nhomnhac_id',
        'tenlt',
        'thoigian',
        'diadiem',
        'slve',
        'anhbn',
        'cktrinhdien',
  ];
}
