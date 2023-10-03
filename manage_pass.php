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
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header py-2 shadow-sm rounded">
              <h3 class="text-center">Manage Visitors</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 rounded">
          <div class="shadow-lg rounded">
            <div class="p-0 table-border-style">
              <div class="shadow-sm table-responsive">
                <table class="table mb-0 table-striped table-dark rounded">
                  <thead>
                    <tr>
                      <th class="bg-primary">S.NO </th>
                      <th class="bg-primary">Pass No. </th>
                      <th class="bg-primary">Visitor Name</th>
                      <th class="bg-primary">Category</th>
                      <th class="bg-primary">Apartment No</th>
                      <th class="bg-primary float-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM `visitor_pass`";
                    $result = $conn->query($query);
                    $num = $result->num_rows;
                    if ($num > 0) {
                      $number = 1;
                      while ($data = $result->fetch_array()) {
                    ?>
                        <tr class="float-center">
                          <td><?php echo $number; ?></td>
                          <td><?php echo $data['visitor_name']; ?></td>
                          <td><?php echo $data['category_name']; ?></td>
                          <td><?php echo $data['apartment']; ?></td>
                          <td><?php echo $data['visitor_name']; ?></td>
                          <td>
                            <a class="btn btn-outline-info m-r-5 shadow-sm f-w-900 f-14" href="<?php echo 'pass_details.php?visiter_pass_details=' . $data['id']; ?>">View Details</a>
                            <a class="btn btn-outline-danger m-r-5 shadow-sm f-w-900 f-14" href="<?php echo 'form_action.php?delete_visiter_pass=' . $data['id']; ?>">Delete</a>
                            <a class="btn btn-outline-warning m-r-5 shadow-sm f-w-900 f-14" href="<?php echo 'form_action.php?update_visiter_pass=' . $data['id']; ?>">Update</a>
                          </td>
                        </tr>
                    <?php
                        $number++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
  </div>
  </div>
  <!-- [ Main Content ] end -->

  <!-- Required Js -->
  <?php include('footer_links.php'); ?>
</body>

</html>