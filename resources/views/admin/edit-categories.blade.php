@extends ('layout')

@section ('header')

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <h1> </i>   Categorie: {{$categorie->title}}</h1>
        </div>
      </div>
    </div>
  </header>

@endsection

@section ('content')

<!-- Search -->
<section id="search" class="bg-light py-4 mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <a href="/blogproject/public/dashboard" class="btn btn-light btn-block">
                <i class="fas fa-arrow-left"></i> Back To Dashboard
              </a>
        </div>
        <div class="col-md-3">
          <button class="btn btn-success" form="edit-form"> <i class="fas fa-check"></i>  Save changes</button>
        </div>
        <div class="col-md-3">
            <form method="POST" action="/blogproject/public/categories/{{$categorie->id}}">
                @csrf
                @method('DELETE')
          <button class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"> <i class="fas fa-trash"></i> Delete Categorie</button>
            </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Posts -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Categorie</h4>
            </div>
        <form method="POST" action="/blogproject/public/categories/{{$categorie->id}}" class="p-3" id="edit-form">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label for="title">Title</label>
                <input 
                type="text" 
                    class="form-control @error('title') is-invalid @enderror" 
                    value="{{$categorie->title}}" 
                    name="title"
                    >
                @error ('title')
                  <p class="alert alert-danger">{{$message}}</p>
                      @enderror
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection