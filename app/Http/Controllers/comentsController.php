<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecomentsRequest;
use App\Http\Requests\UpdatecomentsRequest;
use App\Repositories\comentsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class comentsController extends AppBaseController
{
    /** @var  comentsRepository */
    private $comentsRepository;

    public function __construct(comentsRepository $comentsRepo)
    {
        $this->comentsRepository = $comentsRepo;
    }

    /**
     * Display a listing of the coments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $coments = $this->comentsRepository->paginate(10);

        return view('coments.index')
            ->with('coments', $coments);
    }

    /**
     * Show the form for creating a new coments.
     *
     * @return Response
     */
    public function create()
    {
        return view('coments.create');
    }

    /**
     * Store a newly created coments in storage.
     *
     * @param CreatecomentsRequest $request
     *
     * @return Response
     */
    public function store(CreatecomentsRequest $request)
    {
        $input = $request->all();

        $coments = $this->comentsRepository->create($input);

        Flash::success('Coments saved successfully.');

        return redirect(route('coments.index'));
    }

    /**
     * Display the specified coments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coments = $this->comentsRepository->find($id);

        if (empty($coments)) {
            Flash::error('Coments not found');

            return redirect(route('coments.index'));
        }

        return view('coments.show')->with('coments', $coments);
    }

    /**
     * Show the form for editing the specified coments.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coments = $this->comentsRepository->find($id);

        if (empty($coments)) {
            Flash::error('Coments not found');

            return redirect(route('coments.index'));
        }

        return view('coments.edit')->with('coments', $coments);
    }

    /**
     * Update the specified coments in storage.
     *
     * @param int $id
     * @param UpdatecomentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecomentsRequest $request)
    {
        $coments = $this->comentsRepository->find($id);

        if (empty($coments)) {
            Flash::error('Coments not found');

            return redirect(route('coments.index'));
        }

        $coments = $this->comentsRepository->update($request->all(), $id);

        Flash::success('Coments updated successfully.');

        return redirect(route('coments.index'));
    }

    /**
     * Remove the specified coments from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coments = $this->comentsRepository->find($id);

        if (empty($coments)) {
            Flash::error('Coments not found');

            return redirect(route('coments.index'));
        }

        $this->comentsRepository->delete($id);

        Flash::success('Coments deleted successfully.');

        return redirect(route('coments.index'));
    }
}
