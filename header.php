<?php
 $url = basename ($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <meta name="description" content="Student Registration" />
    <meta name="keywords" content="Student Registration" />
    <meta charset="utf-8">
    <!-- Favicon -->
    <!-- <link rel="icon" href="images/favicon.png" type="image/icon"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- External Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css" integrity="sha512-H/zVLBHVS8ZRNSR8wrNZrGFpuHDyN6+p6uaADRefLS4yZYRxfF4049g1GhT+gDExFRB5Kf9jeGr8vueDsyBhhA==" crossorigin="anonymous" />
    <?php if($url == 'view_list.php'){ ?>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <?php } ?>
  </head>
  <body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="">Ahaguru</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="btn btn-success btn-sm" href="index.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Student Details <span class="sr-only">(current)</span></a>
          </li>&nbsp;&nbsp;
          <li class="nav-item">
          <a class="btn btn-danger btn-sm" href="view_list.php"><i class="fa fa-user" aria-hidden="true"></i> Student List</a>
          </li>
        </ul>
        <span class="navbar-text">

        </span>
      </div>
    </nav>
  </header>
