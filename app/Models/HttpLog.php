<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HttpLog extends Model
{
    use HasFactory;

    public const UPDATED_AT = null;

    protected $fillable = [
        'method',
        'path',
        'ip',
        'data',
        'user_agent'
    ];
    protected $casts = [
      'data' => 'array',
   ];
}
