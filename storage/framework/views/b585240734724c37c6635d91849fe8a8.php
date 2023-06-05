<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $__env->yieldContent('title'); ?> - SCMLite </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">

            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              
            </div>

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo e(Auth::user()->name); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger" method="POST">
                <i class="fas fa-sign-out-alt"></i>
                <?php echo e(__('Logout')); ?>

              </a>
            </div>
          </li>
        </ul>
      </nav>
      
      <?php echo $__env->make('pengiriman.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h5><?php echo $__env->yieldContent('sub-title'); ?></h5>
          </div>
          <?php echo $__env->yieldContent('content'); ?>
          <?php echo $__env->yieldContent('scripts'); ?>
          <?php echo $__env->yieldContent('styles'); ?>
        </section>
      </div>
        <script>
          // Fungsi untuk mengambil waktu saat ini
          function showDateTime() {
            const now = new Date();
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const day = days[now.getDay()];
            const date = now.getDate();
            const month = months[now.getMonth()];
            const year = now.getFullYear();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();
        
            // Menampilkan waktu saat ini dalam format yang diinginkan
            const dateTime = `${day}, ${date} ${month} ${year} ${hours}:${minutes}:${seconds}`;
            document.getElementById('datetime').innerHTML = dateTime;
        
            // Mengulangi fungsi setiap 1 detik
            setTimeout(showDateTime, 1000);
          }
        
          showDateTime(); // Memanggil fungsi saat halaman dimuat
        </script>

      <!-- General JS Scripts -->
      <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/modules/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>

      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

      <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SISTEM-INFORMASI-SCM-I\SISCM\resources\views/pengiriman/app.blade.php ENDPATH**/ ?>