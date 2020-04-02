<?php

namespace App\Repositories;

use App\Models\properties;
use App\Repositories\BaseRepository;

/**
 * Class propertiesRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:15 am UTC
*/

class propertiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'badrooms_number',
        'rooms_number',
        'space_available',
        'type_id',
        'neighborhood_id'
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
        return properties::class;
    }
}
