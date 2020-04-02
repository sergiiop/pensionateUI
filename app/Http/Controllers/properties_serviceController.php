<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createproperties_serviceRequest;
use App\Http\Requests\Updateproperties_serviceRequest;
use App\Repositories\properties_serviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class properties_serviceController extends AppBaseController
{
    /** @var  properties_serviceRepository */
    private $propertiesServiceRepository;

    public function __construct(properties_serviceRepository $propertiesServiceRepo)
    {
        $this->propertiesServiceRepository = $propertiesServiceRepo;
    }

    /**
     * Display a listing of the properties_service.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $propertiesServices = $this->propertiesServiceRepository->paginate(10);

        return view('properties_services.index')
            ->with('propertiesServices', $propertiesServices);
    }

    /**
     * Show the form for creating a new properties_service.
     *
     * @return Response
     */
    public function create()
    {
        return view('properties_services.create');
    }

    /**
     * Store a newly created properties_service in storage.
     *
     * @param Createproperties_serviceRequest $request
     *
     * @return Response
     */
    public function store(Createproperties_serviceRequest $request)
    {
        $input = $request->all();

        $propertiesService = $this->propertiesServiceRepository->create($input);

        Flash::success('Properties Service saved successfully.');

        return redirect(route('propertiesServices.index'));
    }

    /**
     * Display the specified properties_service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertiesService = $this->propertiesServiceRepository->find($id);

        if (empty($propertiesService)) {
            Flash::error('Properties Service not found');

            return redirect(route('propertiesServices.index'));
        }

        return view('properties_services.show')->with('propertiesService', $propertiesService);
    }

    /**
     * Show the form for editing the specified properties_service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertiesService = $this->propertiesServiceRepository->find($id);

        if (empty($propertiesService)) {
            Flash::error('Properties Service not found');

            return redirect(route('propertiesServices.index'));
        }

        return view('properties_services.edit')->with('propertiesService', $propertiesService);
    }

    /**
     * Update the specified properties_service in storage.
     *
     * @param int $id
     * @param Updateproperties_serviceRequest $request
     *
     * @return Response
     */
    public function update($id, Updateproperties_serviceRequest $request)
    {
        $propertiesService = $this->propertiesServiceRepository->find($id);

        if (empty($propertiesService)) {
            Flash::error('Properties Service not found');

            return redirect(route('propertiesServices.index'));
        }

        $propertiesService = $this->propertiesServiceRepository->update($request->all(), $id);

        Flash::success('Properties Service updated successfully.');

        return redirect(route('propertiesServices.index'));
    }

    /**
     * Remove the specified properties_service from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertiesService = $this->propertiesServiceRepository->find($id);

        if (empty($propertiesService)) {
            Flash::error('Properties Service not found');

            return redirect(route('propertiesServices.index'));
        }

        $this->propertiesServiceRepository->delete($id);

        Flash::success('Properties Service deleted successfully.');

        return redirect(route('propertiesServices.index'));
    }
}
