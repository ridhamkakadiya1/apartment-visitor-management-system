<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
  <?php include('head_link.php'); ?>
</head>

<body class="">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <!-- [ navigation menu ] start -->

  <?php include('navbar.php'); ?>

  <!-- [ navigation menu ] end -->

  <!-- [ Header ] start -->

  <?php include('header.php'); ?>

  <!-- [ Header ] end -->

  <!-- [ Main Content ] start -->
  <div class="pcoded-main-container">
    <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Sample Page</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->

      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="card shadow-sm rounded">
            <div class="card-header py-3 shadow-sm rounded">
              <h4 class="text-center">Apartment Details Form</h4>
            </div>
            <div class="card-body">
              <?php
              if (isset($_GET['update_owner_id'])) {
                $update_owner_id = $_GET['update_owner_id'];
                $query = "SELECT * FROM `apt_details` WHERE `id`='$update_owner_id'";
                $result = $conn->query($query);
                $num = $result->num_rows;
                if ($num > 0) {
                  $number = 1;
                  while ($data = $result->fetch_array()) {
              ?>
                    <form class="needs-validation" method="post" action="form_action.php" novalidate>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="f-w-600 f-18">Ownership Name</label>
                        </div>
                        <div class="col-md-9">
                          <input type="hidden" name="update_owner_id" value="<?php echo $data['id']; ?>">
                          <input type="text" name="ownership_name" class="form-control" value="<?php echo $data['name']; ?>" id=" validationTooltip01" placeholder="Ownership Name" required="">
                          <div class="invalid-feedback mb-3">Pleace Enter Name</div>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="f-w-600 f-18">Phone Number</label>
                        </div>
                        <div class="col-md-9">
                          <input type="number" name="ownership_number" class="form-control" value="<?php echo $data['phone_number']; ?>" id="validationTooltip01" placeholder="Ownership Phone Number" required="">
                          <div class="invalid-feedback mb-3">Pleace Enter Phone Number</div>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="f-w-600 f-18">Email</label>
                        </div>
                        <div class="col-md-9">
                          <input type="email" name="ownership_email" class="form-control" value="<?php echo $data['email']; ?>" id="validationTooltip01" placeholder="Ownership Email" required="">
                          <div class="invalid-feedback mb-3">Pleace Enter Email</div>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="f-w-600 f-18">House Number</label>
                        </div>
                        <div class="col-md-9">
                          <input type="text" name="ownership_house_number" class="form-control" value="<?php echo $data['house_number']; ?>" id="validationTooltip01" placeholder="Ownership House Number" required="">
                          <div class="invalid-feedback mb-3">Pleace Enter House Number</div>
                        </div>
                      </div>
                      <div class="form-row mt-3">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="f-w-600 f-18">House Ownership</label>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <?php
                            $query1 = "SELECT * FROM `visitor_category` ORDER BY `category_name`";
                            $result1 = $conn->query($query1);
                            $num1 = $result1->num_rows;
                            if ($num1 > 0) {
                              echo "<select class='custom-select' name='house_ownership' required=''>";
                              while ($row = $result1->fetch_assoc()) {
                                if ($data['owenership'] == $row['category_name']) {
                                  $select = "selected";
                                } else {
                                  $select = "";
                                }
                                echo "<option {$select} value='{$row['category_name']}'>{$row['category_name']}</option>";
                              }
                              echo "</select>";
                            } ?>
                            <div class="invalid-feedback">Pleace Select One</div>
                          </div>
                        </div>
                      </div>
            </div>
            <div class="card-footer">
              <p style="text-align: center;" class="m-0 p-0">
                <button class="btn btn-outline-primary shadow-sm f-w-900 f-16" type="submit" name="submit">Submit form</button>
              </p>
            </div>
            </form>
      <?php }
                }
              } ?>
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Required Js -->
  <?php include('footer_links.php'); ?>
</body>

</html>