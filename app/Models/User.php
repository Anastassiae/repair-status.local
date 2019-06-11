<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Должность на русском языке
     */
    public function getPositionAttribute()
    {
        switch ($this->role) {
          case 'admin':
            $position = 'администратор';
            break;

            case 'master':
              $position = 'мастер';
              break;

              case 'seller':
                $position = 'продавец';
                break;

                default:
                  $position = 'пользователь';
                  break;
            }

            return $position;
        }

}
