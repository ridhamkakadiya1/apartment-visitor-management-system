<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <?php include('head_link.php'); ?>
</head>

<body class="">
    <!-- [ auth-signup ] start -->
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
            <div class="card borderless">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="f-w-400">Sign up</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="Username" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="Email" placeholder="Email address">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="Password" placeholder="Password">
                            </div>
                            <!-- <div class="custom-control custom-checkbox  text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
                            </div> -->
                            <button class="btn btn-primary btn-block mb-4">Sign up</button>
                            <hr>
                            <p class="mb-2">Already have an account? <a href="signin.php" class="f-w-400">Signin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signup ] end -->

    <!-- Required Js -->
    <?php include('footer_links.php'); ?>
</body>

</html>