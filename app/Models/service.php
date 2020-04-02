<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class service
 * @package App\Models
 * @version April 1, 2020, 10:42 pm UTC
 *
 * @property string service_name
 */
class service extends Model
{

    public $table = 'service';
    



    public $fillable = [
        'service_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'service_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
