<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Taman Pendidikan Alquran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="natticket">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">Si-TPQ</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="get" action="">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form> 
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">0</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            Kamu tidak mempunyai notifikasi baru
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>          

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">0</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            Kamu tidak mempunyai pesan baru
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('style/assets/img/admin.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">{{ session('nama_admin') }}</span>
          </a><!-- End Profile Iamge Icon -->
          
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-border-all"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa fa-user-gear"></i>
          <span>Guru</span>
        </a>
      </li><!-- End Admin Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-user"></i>
          <span>Pengguna</span>
        </a>
      </li><!-- End Pengguna Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-user"></i>
          <span>Santri</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-user"></i>
          <span>Wali Santri</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-book"></i>
          <span>Mapel</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-dollar"></i>
          <span>Keuangan</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-book"></i>
          <span>Mapel</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              @yield('content')
          </section>
      </div>
  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>TPQ Desa Cahaya</span></strong> 2024
    </div>
    <div class="credits">
      Designed by <a href="">Dev TPQ dari negeri Konoha</a>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>

</html>