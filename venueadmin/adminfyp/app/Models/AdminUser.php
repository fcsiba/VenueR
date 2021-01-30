<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property boolean $activated
 * @property boolean $forbidden
 * @property string $language
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property string $cnic
 * @property Venue[] $venues
 */
class AdminUser extends Model
{
    /**
     * @var array
     */
    protected $table = 'admin_users';
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'remember_token', 'activated', 'forbidden', 'language', 'deleted_at', 'created_at', 'updated_at', 'cnic'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function venues()
    {
        return $this->hasMany('App\Venue', 'admin_id');
    }
}
