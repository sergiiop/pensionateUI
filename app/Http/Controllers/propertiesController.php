<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepropertiesRequest;
use App\Http\Requests\UpdatepropertiesRequest;
use App\Repositories\propertiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class propertiesController extends AppBaseController
{
    /** @var  propertiesRepository */
    private $propertiesRepository;

    public function __construct(propertiesRepository $propertiesRepo)
    {
        $this->propertiesRepository = $propertiesRepo;
    }

    /**
     * Display a listing of the properties.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $properties = $this->propertiesRepository->paginate(10);

        return view('properties.index')
            ->with('properties', $properties);
    }

    /**
     * Show the form for creating a new properties.
     *
     * @return Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created properties in storage.
     *
     * @param CreatepropertiesRequest $request
     *
     * @return Response
     */
    public function store(CreatepropertiesRequest $request)
    {
        $input = $request->all();

        $properties = $this->propertiesRepository->create($input);

        Flash::success('Properties saved successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified properties.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $properties = $this->propertiesRepository->find($id);

        if (empty($properties)) {
            Flash::error('Properties not found');

            return redirect(route('properties.index'));
        }

        return view('properties.show')->with('properties', $properties);
    }

    /**
     * Show the form for editing the specified properties.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $properties = $this->propertiesRepository->find($id);

        if (empty($properties)) {
            Flash::error('Properties not found');

            return redirect(route('properties.index'));
        }

        return view('properties.edit')->with('properties', $properties);
    }

    /**
     * Update the specified properties in storage.
     *
     * @param int $id
     * @param UpdatepropertiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepropertiesRequest $request)
    {
        $properties = $this->propertiesRepository->find($id);

        if (empty($properties)) {
            Flash::error('Properties not found');

            return redirect(route('properties.index'));
        }

        $properties = $this->propertiesRepository->update($request->all(), $id);

        Flash::success('Properties updated successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Remove the specified properties from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $properties = $this->propertiesRepository->find($id);

        if (empty($properties)) {
            Flash::error('Properties not found');

            return redirect(route('properties.index'));
        }

        $this->propertiesRepository->delete($id);

        Flash::success('Properties deleted successfully.');

        return redirect(route('properties.index'));
    }
}
