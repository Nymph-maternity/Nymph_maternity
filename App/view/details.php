<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTER</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"> THE MATERNITY SOLUTION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">HOME</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="#">ABOUT</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="#">NEWS</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="./logOut">LOG OUT</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 80px; width: 750px;">
    <div class="row justify-content-center">
      <div class="col-md-6 col-offset-3">
        <h1> WELCOME</h1>
        <p><b>Complete your details to finish registration</b></p>
        <form action="./detailsUpdate" method="post">
          <input type="firstname" placeholder="firstname" name="firstname" class="form-control"> <br>
          <input type="email" placeholder="email" name="email" Value="email" class="form-control"> <br>
          <input type="lastname" placeholder="lastname" name="lastname" class="form-control"> <br>
          <input type="text" placeholder="age" name="age" class="form-control"> <br>
          <input type="blood" placeholder="blood group" name="blood group" class="form-control"> <br>
          <input type="genotype" placeholder="genotype" name="genotype" class="form-control"><br>
          <input type="weight" placeholder="weight" name="weight" class="form-control"><br>
          <input type="illness" placeholder="illness" name="illness" class="form-control"><br>
          <input type="phone" placeholder="phone" name="phone" class="form-control"><br>
          <input type="country" placeholder="country" name="country" class="form-control"><br>
          <input type="state" placeholder="state" name="state" class="form-control"><br>
          <a class="btn btn-primary btn-lg" href="./details2" role="button">Next</a>
          <a class="btn btn-primary btn-lg" href="./dashboard" role="button">Back</a>

        </form>

      </div>
    </div>
  </div>
</body>
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3" id="footer">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Nymph Maternity</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US
        </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@gmail.com
        </p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88
        </p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89
        </p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            <strong> MDBootstrap.com</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>

</html>