<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecitiesRequest;
use App\Http\Requests\UpdatecitiesRequest;
use App\Repositories\citiesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class citiesController extends AppBaseController
{
    /** @var  citiesRepository */
    private $citiesRepository;

    public function __construct(citiesRepository $citiesRepo)
    {
        $this->citiesRepository = $citiesRepo;
    }

    /**
     * Display a listing of the cities.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cities = $this->citiesRepository->paginate(10);

        return view('cities.index')
            ->with('cities', $cities);
    }

    /**
     * Show the form for creating a new cities.
     *
     * @return Response
     */
    public function create()
    {
        return view('cities.create');
    }

    /**
     * Store a newly created cities in storage.
     *
     * @param CreatecitiesRequest $request
     *
     * @return Response
     */
    public function store(CreatecitiesRequest $request)
    {
        $input = $request->all();

        $cities = $this->citiesRepository->create($input);

        Flash::success('Cities saved successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Display the specified cities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cities = $this->citiesRepository->find($id);

        if (empty($cities)) {
            Flash::error('Cities not found');

            return redirect(route('cities.index'));
        }

        return view('cities.show')->with('cities', $cities);
    }

    /**
     * Show the form for editing the specified cities.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cities = $this->citiesRepository->find($id);

        if (empty($cities)) {
            Flash::error('Cities not found');

            return redirect(route('cities.index'));
        }

        return view('cities.edit')->with('cities', $cities);
    }

    /**
     * Update the specified cities in storage.
     *
     * @param int $id
     * @param UpdatecitiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecitiesRequest $request)
    {
        $cities = $this->citiesRepository->find($id);

        if (empty($cities)) {
            Flash::error('Cities not found');

            return redirect(route('cities.index'));
        }

        $cities = $this->citiesRepository->update($request->all(), $id);

        Flash::success('Cities updated successfully.');

        return redirect(route('cities.index'));
    }

    /**
     * Remove the specified cities from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cities = $this->citiesRepository->find($id);

        if (empty($cities)) {
            Flash::error('Cities not found');

            return redirect(route('cities.index'));
        }

        $this->citiesRepository->delete($id);

        Flash::success('Cities deleted successfully.');

        return redirect(route('cities.index'));
    }
}
