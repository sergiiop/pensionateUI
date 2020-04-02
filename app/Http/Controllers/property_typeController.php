<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createproperty_typeRequest;
use App\Http\Requests\Updateproperty_typeRequest;
use App\Repositories\property_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class property_typeController extends AppBaseController
{
    /** @var  property_typeRepository */
    private $propertyTypeRepository;

    public function __construct(property_typeRepository $propertyTypeRepo)
    {
        $this->propertyTypeRepository = $propertyTypeRepo;
    }

    /**
     * Display a listing of the property_type.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $propertyTypes = $this->propertyTypeRepository->paginate(10);

        return view('property_types.index')
            ->with('propertyTypes', $propertyTypes);
    }

    /**
     * Show the form for creating a new property_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('property_types.create');
    }

    /**
     * Store a newly created property_type in storage.
     *
     * @param Createproperty_typeRequest $request
     *
     * @return Response
     */
    public function store(Createproperty_typeRequest $request)
    {
        $input = $request->all();

        $propertyType = $this->propertyTypeRepository->create($input);

        Flash::success('Property Type saved successfully.');

        return redirect(route('propertyTypes.index'));
    }

    /**
     * Display the specified property_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertyType = $this->propertyTypeRepository->find($id);

        if (empty($propertyType)) {
            Flash::error('Property Type not found');

            return redirect(route('propertyTypes.index'));
        }

        return view('property_types.show')->with('propertyType', $propertyType);
    }

    /**
     * Show the form for editing the specified property_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertyType = $this->propertyTypeRepository->find($id);

        if (empty($propertyType)) {
            Flash::error('Property Type not found');

            return redirect(route('propertyTypes.index'));
        }

        return view('property_types.edit')->with('propertyType', $propertyType);
    }

    /**
     * Update the specified property_type in storage.
     *
     * @param int $id
     * @param Updateproperty_typeRequest $request
     *
     * @return Response
     */
    public function update($id, Updateproperty_typeRequest $request)
    {
        $propertyType = $this->propertyTypeRepository->find($id);

        if (empty($propertyType)) {
            Flash::error('Property Type not found');

            return redirect(route('propertyTypes.index'));
        }

        $propertyType = $this->propertyTypeRepository->update($request->all(), $id);

        Flash::success('Property Type updated successfully.');

        return redirect(route('propertyTypes.index'));
    }

    /**
     * Remove the specified property_type from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertyType = $this->propertyTypeRepository->find($id);

        if (empty($propertyType)) {
            Flash::error('Property Type not found');

            return redirect(route('propertyTypes.index'));
        }

        $this->propertyTypeRepository->delete($id);

        Flash::success('Property Type deleted successfully.');

        return redirect(route('propertyTypes.index'));
    }
}
