<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::latest()->paginate(10);

        return view('admin.categories', ['categories' => $categories]);
    }

    public function store()
    {
        $validatedCategorie = request()->validate([
            'title' => 'required',
        ]);

        Categories::create($validatedCategorie);

        return redirect('categories');
    }

    public function edit(Categories $categorie)
    {

        return view('admin.edit-categories', ['categorie' => $categorie]);

    }

    public function update(Categories $categorie)
    {
        $validatedCategorie = request()->validate([
            'title' => 'required'
        ]);

        $categorie->update($validatedCategorie);

        return redirect ('categories');
    }

    public function destroy(Categories $categorie)
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
        $results = Categories::where('title', 'LIKE', "%{$search}%")->paginate(10);
       
        if(count($results) > 0)
        {
            return view('admin.categories', ['categories' => $results]);
            
        }
            return view('admin.categories');
        
            

    }
}
