<?php

namespace App\Repositories;

use App\Models\posts;
use App\Repositories\BaseRepository;

/**
 * Class postsRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:27 am UTC
*/

class postsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'post_date',
        'description',
        'status',
        'user_id',
        'property_id',
        'typeproperty_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return posts::class;
    }
}
