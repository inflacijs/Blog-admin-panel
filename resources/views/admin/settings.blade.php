@extends ('layout')

@section ('header')

    <!-- HEADER -->
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1><i class="fas fa-cog"></i> Settings</h1>
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
            <div class="col-md-3">
                <a href="dashboard" class="btn btn-light btn-block">
                    <i class="fas fa-arrow-left"></i> Back To Dashboard
                  </a>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success btn-block"> <i class="fas fa-check"></i>  Save changes</button>
            </div>
            
            </div>
          </div>
        </div>
      </section>
  
    <!-- Settings -->
  
    <section id="settings">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h4>Edit settings</h4>
              </div>
              <div class="card-body">
                <form>
                  <fieldset class="form-group">
                    <legend>Allow User Registration</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="Yes" checked> Yes
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="No"> No
                      </label>
                    </div>
                  </fieldset>
  
                  <fieldset class="form-group">
                    <legend>Homepage Format</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="posts" checked> Blog Page
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="page"> Homepage
                      </label>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection