<?php

namespace App\Repositories;

use App\Models\service;
use App\Repositories\BaseRepository;

/**
 * Class serviceRepository
 * @package App\Repositories
 * @version April 1, 2020, 10:42 pm UTC
*/

class serviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'service_name'
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
        return service::class;
    }
}
