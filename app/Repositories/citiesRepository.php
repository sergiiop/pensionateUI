<?php

namespace App\Repositories;

use App\Models\cities;
use App\Repositories\BaseRepository;

/**
 * Class citiesRepository
 * @package App\Repositories
 * @version April 1, 2020, 10:22 pm UTC
*/

class citiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'city_name'
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
        return cities::class;
    }
}
