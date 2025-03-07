<?php

namespace App\Http\Controllers;

use App\Dtos\PostFilterDto;
use App\Http\Requests\PostFilterRequest;
use App\Http\Resources\PostResource;
use App\Repositories\PostRepository;
use App\Traits\ResponseTrait;

class PostController extends Controller
{
    use ResponseTrait;

    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('posts.index');
    }

    public function getPosts(PostFilterRequest $request)
    {
        $filters = PostFilterDto::fromRequest($request);

        return $this->response(
            PostResource::collection($this->postRepository->getPosts($filters)),
            200
        );
    }
}
