<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class properties_service
 * @package App\Models
 * @version April 2, 2020, 2:20 am UTC
 *
 * @property integer property_id
 * @property integer service_id
 */
class properties_service extends Model
{

    public $table = 'properties_service';
    



    public $fillable = [
        'property_id',
        'service_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'property_id' => 'integer',
        'service_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
