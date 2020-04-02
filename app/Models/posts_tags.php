<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class posts_tags
 * @package App\Models
 * @version April 2, 2020, 2:31 am UTC
 *
 * @property integer posts_id
 * @property integer tags_id
 */
class posts_tags extends Model
{

    public $table = 'posts_tags';
    



    public $fillable = [
        'posts_id',
        'tags_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'posts_id' => 'integer',
        'tags_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
