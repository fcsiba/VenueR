<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 */
class Contact extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contact';
    public $timestamps=false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'subject', 'message'];

}
