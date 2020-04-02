<?php

namespace App\Repositories;

use App\Models\tags;
use App\Repositories\BaseRepository;

/**
 * Class tagsRepository
 * @package App\Repositories
 * @version April 1, 2020, 11:23 pm UTC
*/

class tagsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tag_name'
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
        return tags::class;
    }
}
