<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class property_type
 * @package App\Models
 * @version April 1, 2020, 11:33 pm UTC
 *
 * @property string type_name
 */
class property_type extends Model
{

    public $table = 'property_type';
    



    public $fillable = [
        'type_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
