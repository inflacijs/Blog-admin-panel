@extends ('layout')

@section ('header')

<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-pencil-alt"></i> Posts</h1>
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
            <div class="col-md-6 ml-auto">
                
    <div class="input-group mb-1">
      <form 
          action="/blogproject/public/posts/search" 
          method="GET" 
          style="width: 80%; margin-bottom:0px;"
          id="search-form">
        <input type="search" name="search" class="form-control" placeholder="Search Posts...">
        @error ('search')
            <p class="alert alert-danger">{{$message}}</p>
          @enderror
          @empty($posts)
            <p class="alert alert-danger">Nothing found</p>
          @endempty
      </form>
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit" form="search-form" style="height:38px;">Search</button>
    </div>
    </div>
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
            <h4>Latest Posts</h4>
          </div>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @isset($posts))
              @foreach ($posts as $post)
              <tr>
              <th>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                  <a href="posts/{{$post->id}}/edit" class="btn btn-secondary"
                    ><i class="fas fa-angle-double-right"></i> Details</a
                  >
                </td>
              </tr>
              <tr>
              
                @endforeach
                
                
                @endisset
                

            
              
            </tbody>
          </table>
          {{$posts->links()}} 
          
        </div>
      </div>
      
    </div>
  </div>
</section>

@endsection