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
              <h4 class="text-center">Gatekeeper Details Form</h4>
            </div>
            <div class="card-body">
              <form class="needs-validation" novalidate>
                <div class="form-row mt-3">
                  <div class="col-md-3">
                    <label for="validationCustom01" class="f-w-600 f-18">Gatekeeper Name</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Gatekeeper Name" required="">
                    <div class="invalid-feedback mb-3">Pleace Enter Your Name</div>
                  </div>
                </div>
                <div class="form-row mt-3">
                  <div class="col-md-3">
                    <label for="validationCustom01" class="f-w-600 f-18">Phone Number</label>
                  </div>
                  <div class="col-md-9">
                    <input type="number" class="form-control" id="validationTooltip01" placeholder="Gatekeeper Phone Number" required="">
                    <div class="invalid-feedback mb-3">Pleace Enter Phone Number</div>
                  </div>
                </div>
                <div class="form-row mt-3">
                  <div class="col-md-3">
                    <label for="validationCustom01" class="f-w-600 f-18">Gate Number</label>
                  </div>
                  <div class="col-md-9">
                    <input type="number" class="form-control" id="validationTooltip01" placeholder="Get Number" required="">
                    <div class="invalid-feedback mb-3">Pleace Enter Gate Number</div>
                  </div>
                </div>
                <div class="form-row mt-3">
                  <div class="col-md-3">
                    <label for="validationCustom01" class="f-w-600 f-18">Password</label>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter Password" required="">
                    <div class="invalid-feedback mb-3">Pleace Enter Password</div>
                  </div>
                </div>
            </div>
            <div class="card-footer">
              <p style="text-align: center;" class="m-0 p-0">
                <button class="btn btn-outline-primary shadow-sm f-w-900 f-16" type="submit"><i class="bi bi-capslock-fill"></i> Submit form </button>
              </p>
            </div>
            </form>
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