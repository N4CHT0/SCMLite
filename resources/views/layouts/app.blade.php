<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - SCMLite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-6GsmU6IXe+GwFJLxvLrk+JXzP5EK6brPWTh6j+U5nUzJ0FmwljjKjx6m0yIKMzua6UNaE6k5jKU5Z5QAVNgHfw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style></style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SCMLite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            @auth
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
                          </form>
                      </li>
                  </ul>
              </li>
            @else
              <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
              </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h5 class="mb-0">@yield('title')</h5>
            </div>
            <div class="card-body">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts')
    @yield('styles')
  </body>
  <footer class="bg-dark text-white py-3 text-center">
    <div class="container">
      <div class="row d-flex flex-column flex-md-row">
        <div class="col-md-6 text-md-left text-center">
          <h5>About SCMLite</h5>
          <p>SCMLite is a simple inventory management system designed for small and medium-sized businesses.</p>
        </div>
        <div class="col-md-6 text-md-left text-center">
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-envelope"></i> hannessinaga77@gmail.com</li>
            <li><i class="fas fa-phone"></i> +62 135 712 2634</li>
            <li><i class="fas fa-map-marker-alt"></i> JL Raya Klampok, Belakang Balai Desa RT/RW 04/02, Singosari, Kabupaten Malang</li>
          </ul>
        </div>
      </div>
      <div class="row mt-md-0 mt-3">
        <div class="col-md-12 text-md-left text-center">
          &copy; 2023 SCMLite. All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>
</html>