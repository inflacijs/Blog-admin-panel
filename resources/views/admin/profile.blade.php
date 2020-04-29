@extends ('layout')

@section ('header')

    <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Post One</h1>
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
        <div class="col-md-3">
          <a href="dashboard" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-success btn-block">
            <i class="fas fa-lock"></i> Change Password
          </a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-danger btn-block">
            <i class="fas fa-trash"></i> Delete Account
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Edit profile-->

  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" class="form-control" value="Martins Locans">
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" class="form-control" value="inflacijs@gmail.com">
                  </div>
                
                <div class="form-group">
                  <label for="body">Bio</label>
                  <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa nam cumque voluptatum. Possimus recusandae porro architecto officiis illo dignissimos ratione aut officia reprehenderit! Iure cum numquam fugit doloremque quis ullam illo odit, odio voluptates non quisquam laboriosam consectetur quasi perspiciatis! Sapiente minus aperiam nobis molestias autem ut praesentium laudantium?</textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <h3>Your Avatar</h3>
            <img src="/img/avatar.png" alt="profile" class=" img-fluid mb-3">
            <button class="btn btn-primary btn-block">Edit Image</button>
            <button class="btn btn-danger btn-block">Delete Image</button>
        </div>
      </div>
    </div>
  </section>

@endsection