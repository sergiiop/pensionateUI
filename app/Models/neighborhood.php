<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class neighborhood
 * @package App\Models
 * @version April 2, 2020, 2:06 am UTC
 *
 * @property string neighborhood_name
 * @property integer city_id
 */
class neighborhood extends Model
{

    public $table = 'neighborhood';
    



    public $fillable = [
        'neighborhood_name',
        'city_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'neighborhood_name' => 'string',
        'city_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
