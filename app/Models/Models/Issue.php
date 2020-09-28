<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    // テーブル名
    protected $table = 'issues';

    // 可変項目
    protected $fillable = 
    [
        'goal',
        'now',
        'why',
        'action',
        'deadline'
    ];

    use HasFactory;
}
