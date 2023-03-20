<?php 
  $cars = array (
  array("Available","Mercedes",150,"https://cdn.pixabay.com/photo/2017/03/27/14/56/auto-2179220_960_720.jpg"),
  array( "Not Available","BMW",130,"https://cdn.pixabay.com/photo/2017/11/22/16/41/bmw-m4-2970890_960_720.jpg"),
  array("Available" ,"VW",110, "https://cdn.pixabay.com/photo/2019/07/12/12/49/vw-4332807_960_720.jpg"),
  array("Available" ,"Volvo",60, "https://cdn.pixabay.com/photo/2014/08/29/15/07/auto-431122_960_720.jpg"),
  array("Not Available" ,"OPEL", 50, "https://cdn.pixabay.com/photo/2017/04/05/21/45/car-2206439_960_720.jpg"),
  array("Available" ,"SEAT",80, "https://cdn.pixabay.com/photo/2018/04/17/17/28/car-3328163__340.jpg"),
); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Rent A Car</title>
  <style>
    body {
      background-image: url(background.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }

    a {
      font-weight: 600;
    }

    .green-circle {
      font-size: 3rem;
      color: black;
      margin: 0 0 0 1rem;
    }

    .red-circle {
      font-size: 3rem;
      color: red;
      margin: 0 0 0 1rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
          class="bi bi-car-front-fill logo" viewBox="0 0 16 16">
          <path
            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
        </svg>
      </a>
      <a class="navbar-brand ms-2" href="#">Get Your Perfect Car</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row mx-auto">
      <div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[0][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[0][1]?></h3>
    <h5 class="card-text"><?= $cars[0][0]?> <span class="green-circle">&#10004;</span></h5>
    <p class="card-text"><?= $cars[0][2]?> € Per day</p>
    
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[1][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[1][1]?></h3>
    <h5 class="card-text"><?= $cars[1][0]?><span class="red-circle">&#10008;</span></h5>
    <p class="card-text"><?= $cars[1][2]?> € Per day</p>
    
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[2][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[2][1]?></h3>
    <h5 class="card-text"><?= $cars[2][0]?><span class="green-circle">&#10004;</span></h5>
    <p class="card-text"><?= $cars[2][2]?> € Per day</p>
    </div>
  </div>
</div>
</div>
</div>
  <div class="container mt-5 mb-5">
    <div class="row mx-auto">
      <div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[3][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[3][1]?></h3>
    <h5 class="card-text"><?= $cars[3][0]?><span class="green-circle">&#10004;</span></h5>
    <p class="card-text"><?= $cars[3][2]?> € Per day</p>
    
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[4][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[4][1]?></h3>
    <h5 class="card-text"><?= $cars[4][0]?><span class="red-circle">&#10008;</span></h5>
    <p class="card-text"><?= $cars[4][2]?> € Per day</p>
    
  </div>
</div>
</div>
<div class="col-4">
<div class="card" style="width: 18rem;">
  <img src="<?= $cars[5][3]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?= $cars[5][1]?></h3>
    <h5 class="card-text"><?= $cars[5][0]?><span class="green-circle">&#10004;</span></h5>
    <p class="card-text"><?= $cars[5][2]?> € Per day</p>
    </div>
  </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
  defer></script>
</body>
</html>