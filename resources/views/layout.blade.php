<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Blogen</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="/blogproject/public/dashboard" class="navbar-brand">Blogen</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item px-2">
              <a href="/blogproject/public/dashboard" class="{{ Request::path() === 'dashboard' ? 'nav-link active' : 'nav-link' }}">Dashboard</a>
            </li>
            <li class="nav-item px-2">
              <a href="/blogproject/public/posts" class="{{ Request::path() === 'posts' ? 'nav-link active' : 'nav-link' }}">Posts</a>
            </li>
            <li class="nav-item px-2">
              <a href="/blogproject/public/categories" class="{{ Request::path() === 'categories' ? 'nav-link active' : 'nav-link' }}">Categories</a>
            </li>
            <li class="nav-item px-2">
              <a href="/blogproject/public/users" class="{{ Request::path() === 'users' ? 'nav-link active' : 'nav-link' }}">Users</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
              >
                <i class="fas fa-user"></i>
                 Welcome
                 @auth
                  {{(Auth::user()->name)}} 
                 @endauth  
                 @guest
                    Guest
                 @endguest
              </a>
              <div class="dropdown-menu">
                <a href="/blogproject/public/profile" class="dropdown-item">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <a href="/blogproject/public/settings" class="dropdown-item">
                  <i class="fas fa-cog"></i> Settings
                </a>
              </div>
            </li>
            <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
                <i class="fas fa-user-times"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield ('header')

    @yield ('content')


    <!-- Footer -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy <span id="year"></span>
                        Blogen
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

    <script>
      // Get the current year for the copyright
      $("#year").text(new Date().getFullYear());

      CKEDITOR.replace("body1");
     
    </script>
  </body>
</html>

