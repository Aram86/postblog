<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

//use Validator;
use App\Http\Requests\CreateRequest;

//use Carbon\Carbon;

class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Post $postModel) {
        $posts = $postModel->getPublishedPosts();
        return view('post.index', ['posts' => $posts]);
    }

    public function unpublished(Post $postModel) {
        $posts = $postModel->getUnPublishedPosts();
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Post $postModel, Requests\StoreRequest $request) {
        //dd($request);
        $postModel->forceCreate($request->except('_token'));
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Post $postModel, $id) {
        $posts = $postModel->ShowPost($id);
        if(!$posts->count()){
            abort(404);
        }
        return view('post.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Post $postModel, $id) {
        $posts = $postModel->ShowPost($id);
        if(!$posts->count()){
            abort(404);
        }
        return view('post.edit', ['posts' => $posts, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Post $postModel, Requests\StoreRequest $request, $id) {
        //dd($request);
        $postModel->where('id', '=', $id)->update($request->except('_token'));
        return redirect('post/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Post $postModel, $id) {
        $postModel->where('id', '=', $id)->delete();
        return redirect()->route('home');
    }

}
