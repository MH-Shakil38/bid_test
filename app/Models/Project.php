<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
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

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
