<?php include("config/config.php");?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfojobsLike</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
     <link rel="stylesheet" href="style.css">

<body>
   <header class="navbar navbar-expand-lg navbar-light bg-light">
   <nav class="container">
  <a class="navbar-brand" href="index.php">InfojobsLike </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="offers.php">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="companies.php">Empresas</a>
      </li>
    </ul>
    <?php if(isset($_SESSION['userlogged'])){ ?>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mi perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mis Ofertas</a>
          <a class="dropdown-item" href="#">Mi perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cerrar Sesion</a>
        </div>
      </div>
    <?php } else { ?>
      <divclass="nav-item">
        <a href="login.php"class="text-secondary" href="login.php">Login/Signin</a>
      </div>
      <?php }?>
  </div>
</nav>
   </header> 

