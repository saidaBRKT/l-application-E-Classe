<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>login page</title>
</head>
<body>
    <main class="container-fluid mt-0 mt-auto ">
        <div class=" cont row d-flex justify-content-center ">
            <div class="col-12 col-sm-6 col-md-4 ">
                <form class="bg-white p-3 h-100 h-sm-70">
                    <div class="mb-5 mx-5" >
                    <a class="navbar-brand text-dark border-start border-3 border-info px-2 mx-auto " href="#">E-Classe</a>
                     </div>
                     <h6 class="text-center ">SIGN IN</h6>
                     <p class="text-center mb-2">Enter your credentials to access your account</p>
                     <div class="mb-2">
                      <label for="Email" class="form-label text-secondary">Email address</label>
                      <input type="email" class="form-control" id="Email" placeholder="Enter your email">
                    </div>
                    <div class="mb-4 mb-sm-2">
                      <label for="Password" class="form-label text-secondary" >Password</label>
                      <input type="password" class="form-control" id="Password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-info text-white w-100"><a href="html/home.php" class="text-decoration-none text-white">SIGN IN</a></button>
                    <p class="text-center mt-2">Forgot your password?<a href="#" class="text-info">Reset Password</a></p>
                  </form>
            </div>
        </div>
    </main>
    <script src="js/bootstrap.bundle.min.js" ></script>
</body>
</html>




