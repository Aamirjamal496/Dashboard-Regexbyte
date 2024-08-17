<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./public/logo.png">
  <title>
    Categories
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
  html {
    scroll-behaviour: smooth;
  }

  .AddCat:hover {
    background-color: red;
    color: whitesmoke;
  }
</style>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?= base_url('dashboard'); ?>">
        <img src="./public/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Regexbyte Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?= base_url('dashboard'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="<?=base_url("/category");?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="<?=base_url('getSlider')?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Slider</span>
          </a>
        </li>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Categories</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" data-toggle="modal"
                data-target=".bd-example-modal-sm">Add Category</a>
            </li>
            <!-- Model -->
            <!-- small modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button> -->

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="card card-plain">
                    <div class="card-header">
                      <h4 class="font-weight-bolder">Add Category</h4>
                      <p class="mb-0">Fillout the form to add Category</p>
                    </div>
                    <div class="card-body">
                      <form role="form" action="<?= base_url('saveCat'); ?>" method="post">
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <!-- <label class="form-label">Status</label> -->
                          <select name="status" class="form-control">
                            <option value="default">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                          </select>
                          <!-- <input type="email" class="form-control"> -->
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <!-- <label class="form-label">Description</label> -->
                          <!-- <input type="password" class="form-control"> -->
                          <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>
                        <!-- <div class="form-check form-check-info text-start ps-0">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                                    </label>
                                                </div> -->
                        <div class="text-center">
                          <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"></input>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ModelEnd -->
            <li class="nav-item d-flex align-items-center">
              <a href="<?= base_url('logout'); ?>" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Categories table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="bg-gradient-secondary">
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">
                        Description</th>
                      <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Actions
                      </th>
                      <!-- <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <?php foreach ($Test as $Category): ?>
                    <tbody>
                      <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $Category['id']; ?></p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $Category['name']; ?></h6>
                              <!-- <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p> -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $Category['status']; ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary"><?= $Category['description']; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <button type="button" class="btn btn-dark px-3 py-2 bg-gradient-secondary mt-2 mb-0 edit-btn"
                            data-id="<?= $Category['id']; ?>" data-name="<?= $Category['name']; ?>"
                            data-status="<?= $Category['status']; ?>" data-description="<?= $Category['description']; ?>"
                            data-toggle="modal" data-target="#editModal">Edit</button>
                          <!-- <a href="javascript:;" class="btn btn-secondary text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-toggle="modal" data-target=".EditModel">Edit </a> -->
                          <!-- Model -->
                          <!-- small modal -->


                          <div class="modal fade EditModal" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="card card-plain">
                                  <div class="card-header">
                                    <h4 class="font-weight-bolder">Edit Category</h4>
                                    <p class="mb-0">Fill out the form to Edit Category</p>
                                  </div>
                                  <div class="card-body">
                                    <form role="form" action="<?= base_url('UpdateCategory'); ?>" method="post">
                                      <input type="hidden" name="id" id="edit-id">
                                      <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" id="edit-name" class="form-control">
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                        <select name="status" id="edit-status" class="form-control">
                                          <option value="default">Select Status</option>
                                          <option value="1">Active</option>
                                          <option value="0">In-Active</option>
                                        </select>
                                      </div>
                                      <div class="input-group input-group-outline mb-3">
                                        <textarea class="form-control" name="description" id="edit-description"
                                          placeholder="Description"></textarea>
                                      </div>
                                      <div class="text-center">
                                        <input type="submit" value="Update"
                                          class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"></input>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- ModelEnd -->


                          <a type="button" href="<?= base_url('deleteCat/' . $Category['id']); ?>"
                            onclick="return confirm('Are You Sure You want to delete');"
                            class="btn btn-primary px-3 py-2 mt-2 mb-0">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    <?php endforeach; ?>                 
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2 ">
      <i class="spinner-border border-0 material-icons py-2 ">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Dashboard UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
            onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./public/assets/js/core/popper.min.js"></script>
  <script src="./public/assets/js/core/bootstrap.min.js"></script>
  <script src="./public/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./public/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./public/assets/js/material-dashboard.min.js?v=3.1.0"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const editButtons = document.querySelectorAll('.edit-btn');

      editButtons.forEach(button => {
        button.addEventListener('click', function () {
          const id = this.getAttribute('data-id');
          const name = this.getAttribute('data-name');
          const status = this.getAttribute('data-status');
          const description = this.getAttribute('data-description');

          document.getElementById('edit-id').value = id;
          document.getElementById('edit-name').value = name;
          document.getElementById('edit-status').value = status;
          document.getElementById('edit-description').value = description;
        });
      });
    });
  </script>

</body>

</html>