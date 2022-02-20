<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap.css") ?> />
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap copy.css") ?> />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CheckOut</title>
</head>

<body>

  <div class="header ">
    <a href="<?= base_url("/Home") ?>">
      <img width="150" height="75" src="<?= base_url("/image/logo2.png") ?>" alt="!" class="rounded ms-2" />
    </a>
    </a>
    <div class="header-right">
      <a class="ablue" href="<?= base_url("/Home") ?>">Home</a>
      <?php
      session_start();
      if (isset($_SESSION['uid'])) {
        // echo $_SESSION['uid'];
        // echo $_SESSION['email'];
        // echo $_SESSION['password'];
      ?>
        <a class="ablue" href="<?= base_url("/BookEntryController") ?>">Book Entry</a>
        <a class="ablue" href="<?= base_url("/UserInfoController") ?>">User Info</a>
        <a class="ablue" href="<?= base_url("/LogoutController") ?>">Logout</a>
      <?php
      } else {
      ?>
        <a class="ablue" href="<?= base_url("/LoginController") ?>">Login</a>
        <a class="ablue" href="<?= base_url("/SignupController") ?>">SignUp</a>
      <?php
      }
      ?>


      <div class="search-container">
        <form action="/BookInfoController/search" method="POST">
          <input type="text" placeholder="Search book name" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
  <!-- 
  <div class="label h2 my-3 text-center bg-success"> </div> <b>
    <hr>
  </b>

  <div>
    <?php
    // echo "<pre>";
    // print_r($book);
    // print_r($owner);

    ?>
  </div> -->



  <div class="container mb-6 col-5 pt-2 pb-5 ps-5 bg-light">
    <div class="label h4 text-center p-4 bg-lgreen">Checkout Information </div> <b>
      <hr>
    </b>
    <form name="form" action="<?= base_url("/CheckoutController/saveCheckout") ?>" class="form-group p-3" method="POST">

      Book Name <input type="text" class="form-control my-2" name="bookname" value="<?= $book[0]['title'] ?>" disabled />

      <input type="text" hidden class="form-control my-2" name="bookid" value="<?= $book[0]['bookid'] ?>" />

      Owner Name <input type="text" class="form-control my-2" name="name" value="<?= $owner[0]['fname'] . ' ' . $owner[0]['lname'] ?>" disabled />

      Address <input type="text" class="form-control my-2" name="address" value="<?= $owner[0]['address'] ?>" disabled />

      Return Date <input type="text" class="form-control my-2" name="returndate" value="<?= date('d/m/yy', time() + (14 * 86400)); ?>" disabled />

      <div class="mt-3 col-3 float-right">
        <input type="submit" value="Submit" class="form-control sign-btn">
      </div>
    </form>

  </div>


  <div class="footer footer-color pt-2">
    <p> All rights reserved &copy;libro</p>
  </div>
</body>


</html>