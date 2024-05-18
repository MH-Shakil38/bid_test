<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidProject extends Model
{
    use HasFactory;
    protected $table = 'bid_projects';
    protected $fillable = [
        'user_id',
        'project_id',
        'cover_letter',
        'file',
        'status',
        'interviewing',
        'invite_sent',
        'rating',
        'price',
        'fixed_rate',
        'service_fee',
        'estimated_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
