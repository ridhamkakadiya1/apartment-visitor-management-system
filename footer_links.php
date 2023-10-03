<!-- JQuery Link -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>

<!-- Sweetalert JS -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
  <script>
    swal({
      title: "<?php echo $_SESSION['status']; ?>",
      icon: "<?php echo $_SESSION['icon'] ?>",
      button: "Done",
    });
  </script>
<?php
  unset($_SESSION['status']);
  unset($_SESSION['icon']);
}
?>