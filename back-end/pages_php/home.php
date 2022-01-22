<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style_total.css">
  <script src="../js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    
  </head>

<body>
  <main class="container-fluid">
    <div class="row flex-nowrap">
      <div class="cont col-auto col-lg-2 px-0 sticky-top h-100">
        <div class="d-flex flex-column align-items-center  px-3 pt-2 text-white h-100 min-vh-100">
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
          <ul class="nav nav-pills flex-column mb-0 mt-0  align-items-md-center" id="menu">
            <li class="nav-item li_home ">
              <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-home-lg-alt"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="far fa-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Cours</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="students.php" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-graduation-cap"></i> <span class="ms-1 d-none d-sm-inline">Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="payment.php" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-usd-square"></i> <span class="ms-1 d-none d-sm-inline">Payment</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-file-chart-line"></i> <span class="ms-1 d-none d-sm-inline">Report</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link align-middle px-0 text-dark">
                <i class="fal fa-sliders-v-square"></i> <span class="ms-1 d-none d-sm-inline">Setting</span>
              </a>
            </li>
            <li class="nav-item mt-3 mt-0">
              <a href="../index.php" class="nav-link align-middle px-0 text-dark">
                <span class="ms-1 d-none d-sm-inline">logout</span> <i class="fal fa-sign-out-alt"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col d-flex flex-column">

       <?php include 'header.php' ?>

        <div class="container-fluid cont_cards col py-3 justify-content-center align-items-center">
          <div class="cards row justify-content-center ">
            <div class="card col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 14rem; height: 9rem;">
              <div class="card-body carditems--blue position-relative">
                <div class="cardstudents d-flex flex-column mt-2">
                  <i class="far fa-graduation-cap display-6 "></i>
                  <span>Students</span>
                </div>
                <div>
                  <span class="h5 fw-bold nbr">243</span>
                </div>
              </div>
            </div>
            <div class="card col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 14rem; height: 9rem;">
              <div class="card-body carditems--rose position-relative">
                <div class="cardstudents d-flex flex-column mt-2">
                  <i class="fal fa-bookmark display-6"></i>
                  <span>Cours</span>
                </div>
                <div>
                  <span class="h5 fw-bold nbr">13</span>
                </div>
              </div>
            </div>
            <div class="card col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 14rem; height: 9rem;">
              <div class="card-body carditems--yellow position-relative">
                <div class="cardstudents d-flex flex-column mt-2">
                  <i class="fal fa-usd-square display-6"></i>
                  <span>Payments</span>
                </div>
                <div>
                  <span class="h5 fw-bold nbr">DHS 556,000</span>
                </div>
              </div>
            </div>
            <div class="card col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 14rem; height: 9rem;">
              <div class="card-body carditems--gradient position-relative">
                <div class="cardstudents d-flex flex-column mt-2">
                  <i class="fal fa-user display-6"></i>
                  <span>Users</span>
                </div>
                <div>
                  <span class="h5 fw-bold nbr">243</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>