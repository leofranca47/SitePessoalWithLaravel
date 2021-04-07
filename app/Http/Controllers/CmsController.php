<?php

namespace App\Http\Controllers;

use App\Http\Requests\CmsRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    // public function index()
    // {
    //     return view('CMS.creat');
    // }

    public function index(Post $post)
    {
        $posts = $post::latest()->paginate();
        return view('CMS.index', ["posts" => $posts]);
    }

    public function create()
    {
        return view('CMS.create');
    }

    public function store(CmsRequest $request, Post $post)
    {
        $data = $request->only('titulo', 'artigo');

        if ($id = $post->verifyPostsExist($request->titulo)) {
            return $this->update($request, $id);
        }

        if ($request->hasFile('photo') && $request->photo->isValid()) {
            $namefile = str_replace(" ", "_", $request->titulo) . '.' . $request->photo->extension();
            $imagePath = $request->photo->storeAs('post', $namefile);

            $data['photo'] = $imagePath;
        }

        $posts = $post::create($data);

        return redirect()->route('cms.index');
    }

    public function edit($id)
    {
        $posts = new Post;
        $post = $posts::find($id);

        if (!$post) {
            return redirect()->back();
        }

        return view('CMS.edit', ['post' => $post]);
    }

    public function update(CmsRequest $request, $id, Post $posts)
    {
        $post = $posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->hasFile('photo') && $request->photo->isValid()) {

            Storage::delete($post->photo);
            $namefile = str_replace(" ", "_", $request->titulo) . '.' . $request->photo->extension();
            $imagePath = $request->photo->storeAs('post', $namefile);

            $data['photo'] = $imagePath;
        }

        $post->update($data);

        return redirect()->route('cms.index');
    }

    public function show(Post $posts, $id)
    {
        $post = $posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        return view('CMS.show', ['post' => $post]);
    }

    public function delete(Post $posts, $id)
    {
        $post = $posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        if ($post->photo && Storage::exists($post->photo)) {
            Storage::delete($post->photo);
        }

        $post->delete();
        return redirect()->route('cms.index');
    }

}
