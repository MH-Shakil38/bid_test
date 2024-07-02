<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'email',
        'mobile',
        'country',
        'user_type',
        'notification',
        'active',
        'notification',
        'address',
        'details',
    ];

    const USER_TYPE_SUPERADMIN = 1;

    const USER_TYPE_BIDDER = 2;
    const USER_TYPE_OWNER = 3;
//    protected $appends = ['type'];

    public function getTypeAttribute()
    {
        switch ($this->user_type) {
            case self::USER_TYPE_SUPERADMIN:
                return 'Full';
            case self::USER_TYPE_BIDDER:
                return 'Bidder';
            case self::USER_TYPE_OWNER:
                return 'Home Owner';
            default:
                return 'unknown';
        }
    }
    public function bidder_projects()
    {
        return $this->hasOne(Project::class,'user_id','id');
    }

    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return ucwords("{$this->first_name} {$this->last_name}");
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('profile_images')->singleFile();
    }
}
