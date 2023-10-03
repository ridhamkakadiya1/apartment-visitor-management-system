<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="assets/images/user/login_icon.png" alt="User-Profile-Image">
                    <div class="user-details">
                        <span>John Doe</span>
                        <div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user_profile.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="log_out.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <ul class="nav pcoded-inner-navbar ">
                <!-- Admin Panel -->
                <li class="nav-item pcoded-menu-caption">
                    <label>Admin Panel</label>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="bi bi-building-gear"></i></span><span class="pcoded-mtext">Apartment Details</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="ownership_form.php">Ownership Form</a></li>
                        <li><a href="manage_ownership.php">Ownership Details</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="bi bi-calendar2-check"></i></span><span class="pcoded-mtext">Monthly Report</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="visiter_dates_report.php">Visior Report</a></li>
                        <li><a href="pass_report.php">Pass Report</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="gatekeeper_deatils.php" class="nav-link "><span class="pcoded-micon"><i class="bi bi-person-bounding-box"></i></span><span class="pcoded-mtext">Gatekeeper Details</span></a>
                </li>

                <!-- In Gatekeeper -->
                <li class="nav-item pcoded-menu-caption">
                    <label>In Gatekeeper</label>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">1 Gatekeeper Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="manage_visitors.php" class="nav-link "><span class="pcoded-micon"><i class="bi bi-info-square-fill"></i></span><span class="pcoded-mtext">Visitors Details</span></a>
                </li>
                <li class="nav-item">
                    <a href="category.php" class="nav-link "><span class="pcoded-micon"><i class="bi bi-bookmark-check-fill"></i></span><span class="pcoded-mtext">Visitor Category</span></a>
                </li>
                <li class="nav-item">
                    <a href="new_visitor.php" class="nav-link "><span class="pcoded-micon"><i class="bi bi-person-up"></i></span><span class="pcoded-mtext">New Visitor</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="bi bi-person-vcard"></i></span><span class="pcoded-mtext">Entry Pass</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="new_pass.php">New Pass</a></li>
                        <li><a href="manage_pass.php">Mange Pass</a></li>
                    </ul>
                </li>

                <!-- Out Gatekeeper -->
                <li class="nav-item pcoded-menu-caption">
                    <label>Out Gatekeeper</label>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">2 Gatekeeper Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="visitor_out.php" class="nav-link "><span class="pcoded-micon"><i class="bi bi-person-fill-x"></i></span><span class="pcoded-mtext">Visitor Out</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->