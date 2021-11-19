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
            <a class="nav-link active text-white" aria-current="page" href="index.html.php">HOME</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="#">ABOUT</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="#">NEWS</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link active text-white" href="">LOG OUT</a>
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
        <form>
          <input type="text" placeholder="age" name="age" class="form-control"> <br>
          <input type="blood" placeholder="blood group" name="email" class="form-control"> <br>
          <input type="genotype" placeholder="genotype" name="email" class="form-control"><br>
          <input type="weight" placeholder="weight" name="passwordrpt" class="form-control"><br>
          <input type="illness" placeholder="undelyning illness" name="passwordrpt" class="form-control"><br>
          <input type="phone" placeholder="phone number" name="passwordrpt" class="form-control"><br>
          <input type="country" placeholder="country" name="passwordrpt" class="form-control"><br>
          <input type="state" placeholder="state" name="passwordrpt" class="form-control"><br>
          <a class="btn btn-primary btn-lg" href="details2.html.php" role="button">Next</a>
          <a class="btn btn-primary btn-lg" href="dashboard.html.php" role="button">Back</a>

        </form>

      </div>
    </div>
  </div>
</body>

</html>