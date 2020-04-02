<?php

namespace App\Repositories;

use App\Models\property_type;
use App\Repositories\BaseRepository;

/**
 * Class property_typeRepository
 * @package App\Repositories
 * @version April 1, 2020, 11:33 pm UTC
*/

class property_typeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_name'
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
        return property_type::class;
    }
}
