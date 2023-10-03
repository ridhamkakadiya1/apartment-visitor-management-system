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
                <div class="col-md-12">
                    <div class="card shadow-sm rounded">
                        <div class="card-header shadow-sm rounded">
                            <h3 class="text-center">Add New Visitors</h3>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" action="form_action.php" method="post" novalidate>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Catagory</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select class="custom-select" name="catagory" required="">
                                                <option value="">Open this select menu</option>
                                                <?php
                                                $query = "SELECT * FROM `visitor_category` ORDER BY `category_name`";
                                                $result = $conn->query($query);
                                                $num = $result->num_rows;
                                                if ($num > 0) {
                                                    while ($data = $result->fetch_array()) {
                                                ?>
                                                        <option value="<?php echo $data['category_name']; ?>"><?php echo $data['category_name']; ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                            <div class="invalid-feedback">Pleace Select One</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Visitor Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="visitor_name" class="form-control" id="validationTooltip01" placeholder="Visitor Full Name" required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Name</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Phone Number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="phone_number" class="form-control" id="validationTooltip01" placeholder="Visitor Phone Number" required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Phone Number</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" placeholder="Visitor Address" rows="2" required=""></textarea>
                                        <div class="invalid-feedback mb-3">Pleace Enter Address</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Apartment no.</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="apartment_number" class="form-control" id="validationTooltip01" placeholder="Apartment no." required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Apartment no.</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Floor/Wing</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="floor" class="form-control" id="validationTooltip01" placeholder="Floor/Wing" required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Floor/Wing</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Whom to Meet</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="whom_meet" class="form-control" id="validationTooltip01" placeholder="Whom to Meet" required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Phone Number</div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-md-3">
                                        <label for="validationCustom01" class="f-w-600 f-18">Reason To Meet</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="reason_meet" class="form-control" id="validationTooltip01" placeholder="Reason To Meet" required="">
                                        <div class="invalid-feedback mb-3">Pleace Enter Phone Number</div>
                                    </div>
                                </div>
                                <div class="card-footer mt-3">
                                    <p style="text-align: center;">
                                        <button class="btn btn-outline-primary shadow-sm f-w-900 f-16" type="submit" name="submit"><i class="bi bi-collection"></i> Submit Visitor</button>
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