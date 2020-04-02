<?php

namespace App\Repositories;

use App\Models\neighborhood;
use App\Repositories\BaseRepository;

/**
 * Class neighborhoodRepository
 * @package App\Repositories
 * @version April 2, 2020, 2:06 am UTC
*/

class neighborhoodRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'neighborhood_name',
        'city_id'
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
        return neighborhood::class;
    }
}
