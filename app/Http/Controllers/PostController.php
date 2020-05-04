<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categorie;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $categories = Categorie::latest()->get();

        // dd(auth()->user());
        return view('admin.dashboard', ['posts' => $posts, 'categories' => $categories]);

    }

    public function posts()
    {
        $posts = Post::latest()->paginate(10);

        return view('admin.posts', ['posts' => $posts]);

    }


    public function store()
    {
        
        $validatedPost = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        Post::create($validatedPost);

        return redirect('/posts');

    }

    public function edit(Post $post) // // Laravel noķer wildcard, to, kas aiz / piem. 999 un tad uatomātiski
    // dara šādi Posts::where('id' 999)->first(); Līdz ar to iegūstam vajadzīgo postu meklējot pēc ID.

    {
        // Show a view to edit an existing resource

        $categories = Categorie::latest()->get();
        
        return view('admin.edit-posts', ['post' => $post, 'categories' => $categories]);

    }

    public function update(Post $post) // // Laravel noķer wildcard, to, kas aiz / piem. 999 un tad uatomātiski
    // dara šādi Posts::where('id' 999)->first(); Līdz ar to iegūstam vajadzīgo postu meklējot pēc ID.
    {
        // Persist(save) the edited resource
        // request() atnes visu PUT requestu. request()->all() pārbauda via ir vjaadzīgās key priekš validate()
        $validatedPost = request()->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $post->update($validatedPost);

        return redirect('/posts');

    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function settings()
    {

        return view('admin.settings');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('posts');
    }

    public function search( Request $request)
    {
        $validation = request()->validate(
            ['search' => 'required'], 
            ['required' => 'Seach field was epty']);

        $search = $request->get('search');
        $results = Post::where('title', 'LIKE', "%{$search}%")->paginate(10);
       
        if(count($results) > 0)
        {
            return view('admin.posts', ['posts' => $results]);
            
        }
            return view('admin.posts');
        
            

    }
}
