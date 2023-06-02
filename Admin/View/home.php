<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Assests/boot.php' ?>
    <title>Home Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark ">

  <div class="container-fluid">

   <img style="width:50px; clip-path: circle(); margin-right: 20px; heigth:50px" src="<?php include'../../Assests/logo/logo.php' ?>" alt="">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light">

        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link  text-light" href="#">Add Record</a>
        </li>
       
         <li class="nav-item">
          <a class="nav-link  text-light" href="#">Add Student</a>
        </li>
       
       

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


</body>
</html>