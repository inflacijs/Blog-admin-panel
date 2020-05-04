@extends ('layout')

@section ('header')



    <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            Profile info</h1>
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
                  <input type="text" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" class="form-control" value="{{$user->email}}">
                  </div>
                
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password2" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
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