@extends ('layout')

@section ('header')

<!-- HEADER -->

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fas fa-cog"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>

@endsection

@section ('content')

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-2">
          <a
            href="/add-post-modal"
            class="btn btn-primary btn-block"
            data-toggle="modal"
            data-target="#addPostModal"
          >
            <i class="fas fa-plus"></i> Add Post
          </a>
        </div>
        <div class="col-md-3 mb-2">
          <a
            href="#"
            class="btn btn-success btn-block"
            data-toggle="modal"
            data-target="#addCategoryModal"
          >
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div>
        <div class="col-md-3 mb-2">
          <a
            href="#"
            class="btn btn-warning btn-block"
            data-toggle="modal"
            data-target="#addUserModal"
          >
            <i class="fas fa-plus"></i> Add User
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Posts -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
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
              </tbody>
            </table>
            {{$posts->links()}}
          </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center bg-primary text-white mb-3">
                <div class="card-body">
                    <h3>Posts</h3>
                    <h4 class="display-4">
                       <i class="fas fa-pencil-alt"></i> 6
                    </h4>
                    <a href="posts" class="btn btn-outline-light btn-sm">View</a>
                </div>
            </div>
            <div class="card text-center bg-success text-white mb-3">
              <div class="card-body">
                  <h3>Categories</h3>
                  <h4 class="display-4">
                     <i class="fas fa-folder"></i> 9
                  </h4>
                  <a href="categories" class="btn btn-outline-light btn-sm">View</a>
              </div>
          </div>
          <div class="card text-center bg-warning text-white mb-3">
              <div class="card-body">
                  <h3>Users</h3>
                  <h4 class="display-4">
                     <i class="fas fa-users"></i> 4
                  </h4>
                  <a href="users" class="btn btn-outline-light btn-sm">View</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <!-- MODALS -->

    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title">Add Post</h5>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/blogproject/public/posts" >
                  @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input 
                      type="text" 
                      class="form-control" 
                      id="title"
                      name="title"
                      required
                   />
               
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select 
                    class="form-control" 
                    id="category" 
                    name="category">
                        @foreach ($categories as $categorie)
                          <option value="{{$categorie->title}}">{{$categorie->title}}</option>
                        @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">Upload Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" />
                    <label for="image" class="custom-file-label"
                      >Choose File</label
                    >
                  </div>
                  <small class="form-text text-muted">Max Size 3mb</small>
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea name="body" id="body" class="form-control" required></textarea>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">
                    Save Changes
                  </button>
                </div>

              </form>
            </div>
          
          
          </div>
        </div>
      </div>
  
      <!-- ADD CATEGORY MODAL -->
      <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-success text-white">
              <h5 class="modal-title">Add Category</h5>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/blogproject/public/categories">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" required/>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success">
                    Save Changes
                  </button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
  
      <!-- ADD USER MODAL -->
      <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-warning text-white">
              <h5 class="modal-title">Add User</h5>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/blogproject/public/users">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" required/>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" required/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" required/>
                </div>
                <div class="form-group">
                  <label for="password2">Confirm Password</label>
                  <input type="password" class="form-control" required/>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-warning" >
                    Save Changes
                  </button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

  @endsection