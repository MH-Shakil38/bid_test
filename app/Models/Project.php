<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'min_price',
        'max_price',
        'due_date',
        'bid_end',
        'details',
        'status',
        'contract'
    ];
}
