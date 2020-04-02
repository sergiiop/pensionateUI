<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class coments
 * @package App\Models
 * @version April 2, 2020, 2:38 am UTC
 *
 * @property string description
 * @property integer user_id
 * @property integer post_id
 */
class coments extends Model
{

    public $table = 'coments';
    



    public $fillable = [
        'description',
        'user_id',
        'post_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'post_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
