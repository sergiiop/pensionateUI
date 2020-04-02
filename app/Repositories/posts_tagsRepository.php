<?php

namespace App\Repositories;

use App\Models\posts_tags;
use App\Repositories\BaseRepository;

/**
 * Class posts_tagsRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:31 am UTC
*/

class posts_tagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'posts_id',
        'tags_id'
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
        return posts_tags::class;
    }
}
