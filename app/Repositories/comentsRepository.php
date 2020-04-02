<?php

namespace App\Repositories;

use App\Models\coments;
use App\Repositories\BaseRepository;

/**
 * Class comentsRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:38 am UTC
*/

class comentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'user_id',
        'post_id'
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
        return coments::class;
    }
}
