<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$posts = Post::all();

		return view('post.index', compact('posts'));
	}

    public function create()
    {
    	$categories = Category::all();

    	return view('post.create', compact('categories'));
    }

    public function strore()
    {
    	Post::create([
			'title'       => request('title'),
			'slug'        => str_slug(request('title')),
			'content'     => request('content'),
			'category_id' => request('category_id')
    	]);

    	return redirect()->route('post')->withInfo('Post Ditambahkan');
    }

    public function edit(Post $post)
    {
        /*$post = Post::find($id);*/
        $categories = Category::all();

        return view('post.edit', compact('post', 'categories'));
    }

    /*Mode Binding*/
    public function update(Post $post)
    {
        /*$post = Post::find($id);*/

        $post->update([
            'title'       => request('title'),
            'category_id' => request('category_id'),
            'content'     => request('content'),
        ]);

        return redirect()->route('post')->withInfo('Post Diupdate');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post')->withWarning('Post Dihapus');
    }
}
