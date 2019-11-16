<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Blog || <?php echo $title?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/user_login.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e630ea84f8.js"></script>
</head>

<body>

  <?php 

  $hide_top = false;

  if($current_page == "login" || $current_page == "registration"){
    $hide_top = true;
  }

  if(!$hide_top){?>
  <!-- Top Header -->
  <div class='top-header p-1 bg-dark text-white'>
    <div class="container d-flex justify-content-end">
      <div>
        <span class="mr-3 c-no">+8801751161511</span>
        <a href="user_registration.php" class="btn btn-sm btn-warning px-3">Sign Up</a>
        <a href="user_login.php" class="btn btn-sm btn-warning px-3">Log In</a>
      </div>
    </div>
  </div>
  <!-- End Top Header -->
  <?php
  }
  ?>
  <!-- Navbar -->
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" title="IA Blog" href="index.php">
        <img class="rounded-circle border border-dark" width="40px" src="assets/ia.jpg" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo $current_page == 'index' ? 'active': '';?>">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item <?php echo $current_page == 'recent' ? 'active': '';?>">
            <a class="nav-link" href="recent.php">Most Recent</a>
          </li>
          <li class="nav-item <?php echo $current_page == 'top' ? 'active': '';?>">
            <a class="nav-link" href="top.php">Top Stories</a>
          </li>
          <li class="nav-item dropdown <?php echo $current_page == 'category' ? 'active': '';?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="category.php">Category 1</a>
              <a class="dropdown-item" href="category.php">Category 2</a>
              <a class="dropdown-item" href="category.php">Category 3</a>
              <a class="dropdown-item" href="category.php">Category 4</a>
            </div>
          </li>
          <li class="nav-item <?php echo $current_page == 'profile' ? 'active': '';?>">
            <a class="nav-link" href="profile.php">My Account</a>
          </li>
        </ul>
        <form action="search.php" id="srch-form" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="q" type="search" id="q" placeholder="Search" aria-label="Search"
            autocomplete="off">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <script>
  $(document).ready(function() {
    $("#srch-form").submit(function(e) {
      if ($("#q").val() == "") {
        alert("Search Box Should Not be Empty!!!");
        e.preventDefault();
      }
    });
  });
  </script>