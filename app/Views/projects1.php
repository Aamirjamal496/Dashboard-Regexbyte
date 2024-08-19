<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./public/logo.png">
  <title>
    Projects Page
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./public/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./public/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./public/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<style>
  /* Custom hover shadow effect */
  .card:hover {
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2), 0 15px 40px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
    transition: all 0.3s ease;
  }
</style>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="./public/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">RegexByte Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url("dashboard"); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url("/category"); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="<?= base_url("getSlider"); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Slider</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url("projects"); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">folder</i>
            </div>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
  <!-- Project Section -->
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
            <h6 class="text-white text-capitalize ps-3">Projects Table</h6>
            <button class="btn btn-light mx-3 mb-3">Add Project</button>
          </div>
        </div>

        <!-- Projects Grid -->
        <div class="card-body">
          <div class="row">
            <!-- Project 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <img src="./public/logo.png" class="card-img-top m-2 mx-auto" style="width:9rem;" alt="...">
                <div class="card-body mt-1 px-2 py-2 text-center">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-dark bg-gradient-secondary btn-sm me-2">Edit</a>
                  <a href="#" class="btn btn-primary btn-sm">Delete</a>
                </div>
              </div>
            </div>
            <!-- End Project 1 -->

            <!-- Project 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <img src="./public/logo.png" class="card-img-top m-2 mx-auto" style="width:9rem;" alt="...">
                <div class="card-body mt-1 px-2 py-2 text-center">
                  <h5 class="card-title">Project 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-dark bg-gradient-secondary btn-sm me-2">Edit</a>
                  <a href="#" class="btn btn-primary btn-sm">Delete</a>
                </div>
              </div>
            </div>
            <!-- End Project 2 -->

            <!-- Project 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100">
                <img src="./public/logo.png" class="card-img-top m-2 mx-auto" style="width:9rem;" alt="...">
                <div class="card-body mt-1 px-2 py-2 text-center">
                  <h5 class="card-title">Project 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-dark bg-gradient-secondary btn-sm me-2">Edit</a>
                  <a href="#" class="btn btn-primary btn-sm">Delete</a>
                </div>
              </div>
            </div>
            <!-- End Project 3 -->

            <!-- Additional Projects -->
            <!-- Repeat the card structure as needed for additional projects -->
          </div>
        </div>
        <!-- End Projects Grid -->

      </div>
    </div>
  </div>
</body>

</html>