<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createposts_tagsRequest;
use App\Http\Requests\Updateposts_tagsRequest;
use App\Repositories\posts_tagsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class posts_tagsController extends AppBaseController
{
    /** @var  posts_tagsRepository */
    private $postsTagsRepository;

    public function __construct(posts_tagsRepository $postsTagsRepo)
    {
        $this->postsTagsRepository = $postsTagsRepo;
    }

    /**
     * Display a listing of the posts_tags.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $postsTags = $this->postsTagsRepository->paginate(10);

        return view('posts_tags.index')
            ->with('postsTags', $postsTags);
    }

    /**
     * Show the form for creating a new posts_tags.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts_tags.create');
    }

    /**
     * Store a newly created posts_tags in storage.
     *
     * @param Createposts_tagsRequest $request
     *
     * @return Response
     */
    public function store(Createposts_tagsRequest $request)
    {
        $input = $request->all();

        $postsTags = $this->postsTagsRepository->create($input);

        Flash::success('Posts Tags saved successfully.');

        return redirect(route('postsTags.index'));
    }

    /**
     * Display the specified posts_tags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $postsTags = $this->postsTagsRepository->find($id);

        if (empty($postsTags)) {
            Flash::error('Posts Tags not found');

            return redirect(route('postsTags.index'));
        }

        return view('posts_tags.show')->with('postsTags', $postsTags);
    }

    /**
     * Show the form for editing the specified posts_tags.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $postsTags = $this->postsTagsRepository->find($id);

        if (empty($postsTags)) {
            Flash::error('Posts Tags not found');

            return redirect(route('postsTags.index'));
        }

        return view('posts_tags.edit')->with('postsTags', $postsTags);
    }

    /**
     * Update the specified posts_tags in storage.
     *
     * @param int $id
     * @param Updateposts_tagsRequest $request
     *
     * @return Response
     */
    public function update($id, Updateposts_tagsRequest $request)
    {
        $postsTags = $this->postsTagsRepository->find($id);

        if (empty($postsTags)) {
            Flash::error('Posts Tags not found');

            return redirect(route('postsTags.index'));
        }

        $postsTags = $this->postsTagsRepository->update($request->all(), $id);

        Flash::success('Posts Tags updated successfully.');

        return redirect(route('postsTags.index'));
    }

    /**
     * Remove the specified posts_tags from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $postsTags = $this->postsTagsRepository->find($id);

        if (empty($postsTags)) {
            Flash::error('Posts Tags not found');

            return redirect(route('postsTags.index'));
        }

        $this->postsTagsRepository->delete($id);

        Flash::success('Posts Tags deleted successfully.');

        return redirect(route('postsTags.index'));
    }
}
