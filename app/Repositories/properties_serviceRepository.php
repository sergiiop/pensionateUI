<?php

namespace App\Repositories;

use App\Models\properties_service;
use App\Repositories\BaseRepository;

/**
 * Class properties_serviceRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:20 am UTC
*/

class properties_serviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'property_id',
        'service_id'
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
        return properties_service::class;
    }
}
