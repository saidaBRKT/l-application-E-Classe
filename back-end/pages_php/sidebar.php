<?php
echo <<<EOT
<div class="cont col-auto col-sm-3 col-md-2 px-0 sticky-top h-100">
<div class="d-flex flex-column align-items-center px-3 pt-2 min-vh-100">
    <a href="/" class=" title d-flex align-items-center pb-3 text-dark text-decoration-none">
        <div class="fs-4 d-none d-sm-inline">
            <h1>E-classe</h1>
        </div>
    </a>

    <div class="profile">
        <img src="../images/people-peoples-homeless-male.jpg"
            class="rounded-circle d-none d-sm-flex d-flex flex-column justify-content-center align-items-center"
            alt="profile">
        <div class="admin d-flex flex-column justify-content-center align-items-center mb-3">
            <span class="text-dark d-none d-sm-flex">Name Admin</span>
            <span class="text-primary d-none d-sm-flex">Admin</span>
        </div>
    </div>
    <ul class="nav  flex-column mb-0 mt-0" id="menu">
        <li class="nav-item ">
            <a href="home.php" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-home-lg-alt"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="far fa-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Cours</span>
            </a>
        </li>
        <li class="nav-item li_Students">
            <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-graduation-cap"></i>
                <span class="ms-1 d-none d-sm-inline">Students</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="payment.php" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-usd-square"></i>
                <span class="ms-1 d-none d-sm-inline">Payment</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-file-chart-line"></i> <span
                    class="ms-1 d-none d-sm-inline">Report</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-sliders-v-square"></i> <span
                    class="ms-1 d-none d-sm-inline">Setting</span>
            </a>
        </li>
        <li class="nav-item mt-3 mt-0">
            <a href="../index.html" class="nav-link align-middle px-0 text-dark">
                <span class="ms-1 d-none d-sm-inline">logout</span> <i class="fal fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</div>
</div>

EOT;
?>