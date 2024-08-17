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
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
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
<body>
<table class="table align-items-center mb-0">
                  
<thead>
                    <tr class="bg-secondary ">
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-white text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Actions</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <?php foreach ($test as $category): ?>
                    <tbody>
                      <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $category['id']; ?></p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $category['name']; ?></h6>
                              <!-- <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p> -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $category['status']; ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-secondary"><?= $category['description']; ?></span>
                        </td>
                        <td class="align-middle text-center">
                          <button type="button" class="btn btn-dark px-3 py-2 bg-gradient-secondary mt-2 mb-0" data-toggle="modal" data-target=".EditModal">Edit</button>
                          <!-- <a href="javascript:;" class="btn btn-secondary text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-toggle="modal" data-target=".EditModel">
                                                        Edit

                                                    </a> -->
                          <!-- Model -->
                          <!-- small modal -->


                          <div class="modal fade EditModal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
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
                                        <textarea class="form-control" name="description" id="edit-description" placeholder="Description"></textarea>
                                      </div>
                                      <div class="text-center">
                                        <input type="submit" value="Update" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"></input>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- ModelEnd -->
                          <a type="button" href="<?= base_url('deleteCat/' . $category['id']); ?>" onclick="return confirm('Are You Sure You want to delete');" class="btn btn-primary px-3 py-2 mt-2 mb-0">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  <?php endforeach; ?>
                </table>
                </body>