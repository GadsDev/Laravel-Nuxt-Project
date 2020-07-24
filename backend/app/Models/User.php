<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
   
   /**
	 * The table associated with the model.
	 *
	 * @var string
	 */

	protected $table = 'users';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

   public function getJWTIdentifier()
    {
        // return the primary key of the user - user id
        return $this->getKey();
    }
  
    public function getJWTCustomClaims()
    {
        // return a key value array, containing any custom claims to to added to JWT
        return [];
    }
}
