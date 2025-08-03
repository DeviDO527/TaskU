<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;
    use HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified_at', // Default role is 'user'
        'created_at',
        'updated_at',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    protected $primaryKey = 'id';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'name' => 'string',
            'email' => 'string',
            'password' => 'hashed',
            'role' => 'string',
            'email_verified_at' => 'datetime',// Default role is 'user'
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'active' => 'boolean',
        ];

    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id', 'id');
    }
    public function sendEmailVerificationNotification(){
        $this->notify(new \App\Notifications\CustomVerifyEmail());
    }
}
