<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class tags
 * @package App\Models
 * @version April 1, 2020, 11:23 pm UTC
 *
 * @property string tag_name
 */
class tags extends Model
{

    public $table = 'tags';
    



    public $fillable = [
        'tag_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tag_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
