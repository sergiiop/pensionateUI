<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class posts
 * @package App\Models
 * @version April 2, 2020, 2:27 am UTC
 *
 * @property string title
 * @property string post_date
 * @property string description
 * @property boolean status
 * @property integer user_id
 * @property integer property_id
 * @property integer typeproperty_id
 */
class posts extends Model
{

    public $table = 'posts';
    



    public $fillable = [
        'title',
        'post_date',
        'description',
        'status',
        'user_id',
        'property_id',
        'typeproperty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'status' => 'boolean',
        'user_id' => 'integer',
        'property_id' => 'integer',
        'typeproperty_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
