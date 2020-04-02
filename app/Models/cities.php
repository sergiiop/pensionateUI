<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class cities
 * @package App\Models
 * @version April 1, 2020, 10:22 pm UTC
 *
 * @property string city_name
 */
class cities extends Model
{

    public $table = 'cities';
    



    public $fillable = [
        'city_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
