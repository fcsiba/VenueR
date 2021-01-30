<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name',
        'type',
        'sub_type',
        'address',
        'size',
        'accomodation',
        'price',
        'availiblity',
        'info',
        'about',
        'image',
        'admin_id',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/venues/'.$this->getKey());
    }
}
