<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png"/>
    <?php
      include("include/menu.php");
    ?>    
  </head>
  <body class="container-fluid">
    <?php menu();   ?>
    <div class="alert alert-success text-center" role="alert">
      <h3 class="fst-italic">Este es el inicio de mi aplicación</h3>
    </div>
    <br><br>

    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary container-fluid">Submit</button>
      </form>
      </div>
      <div class="col-4"></div>
    </div>
    <br><br><br>

  <img src="img/movistar.png" alt="Esto es una imagen">


    
  </body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>