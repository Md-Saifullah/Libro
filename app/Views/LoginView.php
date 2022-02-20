<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap.css") ?> />
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap copy.css") ?> />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login</title>
</head>

<body>
  <div class="header ">
    <a href="<?= base_url("/Home") ?>">
      <img width="150" height="75" src="<?= base_url("/image/logo2.png") ?>" alt="!" class="rounded ms-2" />
    </a>
    </a>
    <div class="header-right">
      <a class="ablue" href="<?= base_url("/Home") ?>">Home</a>
      <a class="activeblue" href="<?= base_url("/LoginController") ?>">Login</a>
      <a class="ablue" href="<?= base_url("/SignupController") ?>">SignUp</a>


      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search book name" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>

  <div class="container  col-3 pt-5 mt-5  bg-light ">
    <div class="row  label h1 p-2">
      <label class="text-center">Login Page</label>
    </div>
    <hr>
    <div class="row">
      <div class="col md-2 col-md-offset-1">
        <form name="form" onsubmit="return check()" action=<?= base_url() . "/LoginController/login"; ?> method="post">
          <div class="form-group py-2">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" name="email">
          </div>

          <div class="form-group py-2">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-group col-3 float-right">
            <!-- <input type="Submit" class="btn btn-primary my-2 float-end " name="Login"> -->
            <input type="Submit" class="form-controlc sign-btn my-2 " name="Login">
          </div>
        </form>
      </div>
    </div>

    <?php

    if (session()->getFlashdata('status')) {
    ?>
      <div class="row pb-3 container for-warning clear-align">
        <?= (session()->getFlashdata('status')) ?>
      </div>

    <?php
    }
    ?>
  </div>

  <script>
    function check() {
      var email = document.form.email.value;
      var password = document.form.password.value;
      if (email == "") {
        alert("Email field can not be empty");
        return false;
      }
      if (password == "") {
        alert("Password field can not be empty");
        return false;
      }

    }
  </script>

  <div class="footer footer-color pt-2">
    <p> All rights reserved &copy;libro</p>
  </div>


</body>

</html>