<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email_address',
    ];

    protected $hidden = [];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userTasks()
    {
        return $this->hasMany(UserTask::class);
    }
}
