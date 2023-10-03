<?php
include('connection.php');
?>

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
      <?php
      $manage_owner_id = $_GET['manage_owner_id'];
      $query = "SELECT * FROM `apt_details` WHERE `id`= $manage_owner_id";
      $result = $conn->query($query);

      $data = $result->fetch_assoc();
      ?>
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header py-2 shadow-sm rounded">
              <h3 class="text-center">Ownership Details</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Ownership Name</h5>
                      </td>
                      <td class="f-18"><?= $data['name'] ?></td>
                      <td>
                        <h5>PHONE NUMBER</h5>
                      </td>
                      <td class="f-18">
                      <?= $data['phone_number'] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>EMAIL</h5>
                      </td>
                      <td class="f-18"><?= $data['email'] ?></td>
                      <td>
                        <h5> HOUSE NUMBER</h5>
                      </td>
                      <td class="f-18"><?= $data['house_number'] ?></td>
                    </tr>
                    <tr>
                      <td>
                        <h5>OWNERSHIP</h5>
                      </td>
                      <td colspan="3" class="f-18"><?= $data['owenership'] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ sample-page ] end -->
  </div>
  <!-- [ Main Content ] end -->
  </div>
  </div>
  <!-- [ Main Content ] end -->

  <!-- Required Js -->
  <?php include('footer_links.php'); ?>
</body>

</html>