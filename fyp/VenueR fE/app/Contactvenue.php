<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactvenue extends Model
{
    protected $table = 'contactvenue';

    protected $fillable = [
        'category',
        'venue_name',
        'name',
        'email',
        'phone',
        'admin_id',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/contactvenues/'.$this->getKey());
    }
}
