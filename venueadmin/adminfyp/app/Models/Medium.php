<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medium extends Model
{
    protected $fillable = [
        'model_type',
        'model_id',
        'collection_name',
        'name',
        'file_name',
        'mime_type',
        'disk',
        'size',
        'manipulations',
        'custom_properties',
        'responsive_images',
        'order_column',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/media/'.$this->getKey());
    }
}
