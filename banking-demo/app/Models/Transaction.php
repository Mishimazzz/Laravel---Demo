<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//laravel 安全机制
class Transaction extends Model
{
    protected $fillable = [
        'description',
        'amount'
    ];
}