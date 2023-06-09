<?php $__env->startSection('container'); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/dashboard.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app2.css')); ?>"> 
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/apps.css')); ?>"> 
  </head>
  <body>   
    <header class="navbar sticky-top flex-md-nowrap p-0 header">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"><b>Halaman Guru</b></a>
        <button class="avbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="./landingPage">Keluar</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="sidebar2 col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <img class="img-guru" src="images/guru.png" alt="Gambar_Guru">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./dashboardGuru">
                            <span data-feather="home"></span>
                            Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('students.index')); ?>">
                            <span data-feather="file"></span>
                            Data Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('results.index')); ?>">
                            <span data-feather="file"></span>
                            Data Hasil Akhir
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./bantuanGuru">
                            <span data-feather="help-circle"></span>
                            Bantuan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="pt-3">
                <?php echo $__env->yieldContent('container'); ?>
            </div>
            </main>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="/js/dashboard.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\ProjekAkhirPEMWEB2\resources\views/layouts/mainGuru.blade.php ENDPATH**/ ?>