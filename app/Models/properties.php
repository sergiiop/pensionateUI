<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class properties
 * @package App\Models
 * @version April 2, 2020, 2:15 am UTC
 *
 * @property integer badrooms_number
 * @property integer rooms_number
 * @property integer space_available
 * @property integer type_id
 * @property integer neighborhood_id
 */
class properties extends Model
{

    public $table = 'properties';
    



    public $fillable = [
        'badrooms_number',
        'rooms_number',
        'space_available',
        'type_id',
        'neighborhood_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'badrooms_number' => 'integer',
        'rooms_number' => 'integer',
        'space_available' => 'integer',
        'type_id' => 'integer',
        'neighborhood_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
