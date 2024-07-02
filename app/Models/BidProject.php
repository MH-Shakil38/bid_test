<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BidProject extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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

    static function findById($id)
    {
        return self::query()->with('user')->findOrFail($id);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('bid_file')->singleFile();
    }
}
