<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::latest()->paginate(10);

        return view('admin.categories', ['categories' => $categories]);
    }

    public function store()
    {
        $validatedCategorie = request()->validate([
            'title' => 'required',
        ]);

        Categorie::create($validatedCategorie);

        return redirect('categories');
    }

    public function edit(Categorie $categorie)
    {

        return view('admin.edit-categories', ['categorie' => $categorie]);

    }

    public function update(Categorie $categorie)
    {
        $validatedCategorie = request()->validate([
            'title' => 'required'
        ]);

        $categorie->update($validatedCategorie);

        return redirect ('categories');
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect('categories');
    }

    public function search( Request $request)
    {
        $validation = request()->validate(
            ['search' => 'required'], 
            ['required' => 'Seach field was epty']);

        $search = $request->get('search');
        $results = Categorie::where('title', 'LIKE', "%{$search}%")->paginate(10);
       
        if(count($results) > 0)
        {
            return view('admin.categories', ['categories' => $results]);
            
        }
            return view('admin.categories');
        
            

    }
}
