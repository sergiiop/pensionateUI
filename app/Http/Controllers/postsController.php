<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use App\Repositories\postsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class postsController extends AppBaseController
{
    /** @var  postsRepository */
    private $postsRepository;

    public function __construct(postsRepository $postsRepo)
    {
        $this->postsRepository = $postsRepo;
    }

    /**
     * Display a listing of the posts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->postsRepository->paginate(10);

        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new posts.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created posts in storage.
     *
     * @param CreatepostsRequest $request
     *
     * @return Response
     */
    public function store(CreatepostsRequest $request)
    {
        $input = $request->all();

        $posts = $this->postsRepository->create($input);

        Flash::success('Posts saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified posts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $posts = $this->postsRepository->find($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified posts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $posts = $this->postsRepository->find($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with('posts', $posts);
    }

    /**
     * Update the specified posts in storage.
     *
     * @param int $id
     * @param UpdatepostsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepostsRequest $request)
    {
        $posts = $this->postsRepository->find($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        $posts = $this->postsRepository->update($request->all(), $id);

        Flash::success('Posts updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified posts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $posts = $this->postsRepository->find($id);

        if (empty($posts)) {
            Flash::error('Posts not found');

            return redirect(route('posts.index'));
        }

        $this->postsRepository->delete($id);

        Flash::success('Posts deleted successfully.');

        return redirect(route('posts.index'));
    }
}
