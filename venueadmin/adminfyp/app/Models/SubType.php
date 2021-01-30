<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    protected $table = 'sub_type';

    protected $fillable = [
        'type_id',
        'name',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/sub-types/'.$this->getKey());
    }
}
