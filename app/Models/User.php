<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;
use NotificationChannels\WebPush\PushSubscription;

class User extends Authenticatable
{
    use SanctumHasApiTokens, HasFactory, Notifiable, HasPushSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at'
    ];
    public function like(){
        return $this->hasMany(Like::class);
    }
    public function binhluan(){
        return $this->hasMany(Binhluan::class);
    }
    public function profile(){
        return $this->hasMany(Profile::class);
    }
    public function baidang(){
        return $this->hasMany(Baidang::class);
    }
    public function binhluanid(){
        return $this->hasMany(Binhluanid::class);
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function updatePushSubscription($endpoint, $key, $token)
    {
        // Logic để lưu thông tin đăng ký vào bảng push_subscriptions
        // Ví dụ:
        $this->pushSubscriptions()->updateOrCreate(
            ['endpoint' => $endpoint],
            ['auth' => $key, 'p256dh' => $token]
        );
    }

    public function pushSubscriptions()
    {
        return $this->hasMany(PushSubscription::class);
    }
    
}