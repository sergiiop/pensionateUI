<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateneighborhoodRequest;
use App\Http\Requests\UpdateneighborhoodRequest;
use App\Repositories\neighborhoodRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class neighborhoodController extends AppBaseController
{
    /** @var  neighborhoodRepository */
    private $neighborhoodRepository;

    public function __construct(neighborhoodRepository $neighborhoodRepo)
    {
        $this->neighborhoodRepository = $neighborhoodRepo;
    }

    /**
     * Display a listing of the neighborhood.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $neighborhoods = $this->neighborhoodRepository->paginate(10);

        return view('neighborhoods.index')
            ->with('neighborhoods', $neighborhoods);
    }

    /**
     * Show the form for creating a new neighborhood.
     *
     * @return Response
     */
    public function create()
    {
        return view('neighborhoods.create');
    }

    /**
     * Store a newly created neighborhood in storage.
     *
     * @param CreateneighborhoodRequest $request
     *
     * @return Response
     */
    public function store(CreateneighborhoodRequest $request)
    {
        $input = $request->all();

        $neighborhood = $this->neighborhoodRepository->create($input);

        Flash::success('Neighborhood saved successfully.');

        return redirect(route('neighborhoods.index'));
    }

    /**
     * Display the specified neighborhood.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $neighborhood = $this->neighborhoodRepository->find($id);

        if (empty($neighborhood)) {
            Flash::error('Neighborhood not found');

            return redirect(route('neighborhoods.index'));
        }

        return view('neighborhoods.show')->with('neighborhood', $neighborhood);
    }

    /**
     * Show the form for editing the specified neighborhood.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $neighborhood = $this->neighborhoodRepository->find($id);

        if (empty($neighborhood)) {
            Flash::error('Neighborhood not found');

            return redirect(route('neighborhoods.index'));
        }

        return view('neighborhoods.edit')->with('neighborhood', $neighborhood);
    }

    /**
     * Update the specified neighborhood in storage.
     *
     * @param int $id
     * @param UpdateneighborhoodRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateneighborhoodRequest $request)
    {
        $neighborhood = $this->neighborhoodRepository->find($id);

        if (empty($neighborhood)) {
            Flash::error('Neighborhood not found');

            return redirect(route('neighborhoods.index'));
        }

        $neighborhood = $this->neighborhoodRepository->update($request->all(), $id);

        Flash::success('Neighborhood updated successfully.');

        return redirect(route('neighborhoods.index'));
    }

    /**
     * Remove the specified neighborhood from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $neighborhood = $this->neighborhoodRepository->find($id);

        if (empty($neighborhood)) {
            Flash::error('Neighborhood not found');

            return redirect(route('neighborhoods.index'));
        }

        $this->neighborhoodRepository->delete($id);

        Flash::success('Neighborhood deleted successfully.');

        return redirect(route('neighborhoods.index'));
    }
}
