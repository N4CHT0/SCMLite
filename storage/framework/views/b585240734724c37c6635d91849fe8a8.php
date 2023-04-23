<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?> - SCMLite</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-6GsmU6IXe+GwFJLxvLrk+JXzP5EK6brPWTh6j+U5nUzJ0FmwljjKjx6m0yIKMzua6UNaE6k5jKU5Z5QAVNgHfw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      /* custom styles */
      body {
        font-family: 'Helvetica Neue', sans-serif;
        background-color: #f5f5f5;
      }

      h5, .card-header {
        font-family: 'Open Sans', sans-serif;
      }

      .navbar {
        background-color: #333;
      }

      .navbar-dark .navbar-nav .nav-link {
        color: #fff;
      }

      .navbar-brand {
        font-family: 'Montserrat', sans-serif;
      }

      .card {
        margin-bottom: 20px;
        background-color: #fff;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
      }

      .card-body {
        color: #333;
      }

      .card-header {
          border-radius: 0;
          color: #fff;
      }
      .container {
        margin-top: 2rem;
      }

      .nav-link {
          font-weight: 500;
          text-transform: uppercase;
          font-family: 'Montserrat', sans-serif;
      }
      .dropdown-item {
          font-weight: 500;
      }
      .dropdown-toggle.btn {
          background-color: #2980b9;
          border-color: #2980b9;
      }

      .dropdown-menu {
        animation: fadeDown 0.5s ease;
      }

      @keyframes fadeDown {
        0% {
          opacity: 0;
          transform: translateY(-10px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SCMLite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Action <i class="fas fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(route('jadwal_pengiriman.index')); ?>">Jadwal Pengiriman</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('pengiriman.index')); ?>">Pengiriman</a></li>
                <li><a class="dropdown-item" href="#">Set Up</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <?php if(auth()->guard()->check()): ?>
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo e(Auth::user()->name); ?></a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <form action="<?php echo e(route('logout')); ?>" method="POST">
                              <?php echo csrf_field(); ?>
                              <button type="submit" class="dropdown-item"><?php echo e(__('Logout')); ?></button>
                          </form>
                      </li>
                  </ul>
              </li>
            <?php else: ?>
              <li class="nav-item">
                  <a href="<?php echo e(route('login')); ?>" class="nav-link"><?php echo e(__('Login')); ?></a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-5">
      <div class="row justify-content-center card-deck">
        <div class="col-md-8 mx-auto mt-4 mt-md-0">
          <div class="card">
            <div class="card-header bg-primary text-white text-center">
              <h5 class="mb-0"><?php echo $__env->yieldContent('title'); ?></h5>
            </div>
            <div class="card-body">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo $__env->yieldContent('styles'); ?>
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
</html><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/pengiriman/app.blade.php ENDPATH**/ ?>