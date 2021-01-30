<?php

namespace App;

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
    public function type()
    {
        return $this->belongsTo('App\Type','type_id');
    }

}
