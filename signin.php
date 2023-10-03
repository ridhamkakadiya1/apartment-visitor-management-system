<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <?php include('head_link.php'); ?>
</head>

<body class="">
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="mb-3 f-w-400">Signin</h4>
                        <hr>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="Email" placeholder="Email address">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="Password" placeholder="Password">
                        </div>
                        <!-- <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                        </div> -->
                        <button class="btn btn-block btn-primary mb-4">Signin</button>
                        <hr>
                        <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                        <p class="mb-0 text-muted">Don't have an account? <a href="signup.php" class="f-w-400">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

	<!-- Required Js -->
	<?php include('footer_links.php'); ?>
</body>

</html>