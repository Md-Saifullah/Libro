<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap.css") ?> />
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap copy.css") ?> />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>UserInfo</title>
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
        <form action="/action_page.php">
          <input type="text" placeholder="Search book name" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>



  <div class="label h2 my-3 text-center">Book Details </div> <b>
    <hr>
  </b>
  <?php foreach ($books as $u) { ?>
    <div class="row m-3 bg-dark mx-5">
      <div class="col mx-10">
        <div class="card m-3 p-3 bg-light" style="width: 40rem; height:auto;">
          <img src="<?= base_url('uploads/' . $u['photo']) ?>" class="card-img-top" alt="..." height="300px" width="75px">
          <div class="card-body">
            <h5 class="card-title"><b>Title: </b><?= $u['title'] ?> </h5>
            <h6 class="card-title"><b>Author: </b><?= $u['author'] ?></h6>
            <h6 class="card-title"><b>Genre: </b><?= $u['genre'] ?></h6>
            <h6 class="card-title"><b>Language: </b><?= $u['language'] ?></h6>
            <h6 class="card-title"><b>Edition: </b><?= $u['edition'] ?></h6>
            <h6 class="card-title"><b>Publication: </b><?= $u['publication'] ?></h6>
            <p class="card-text"><b>Short Details: </b><?= $u['shortdetails'] ?></p>
            <?php if (isset($_SESSION['email'])) {
              if ($u['uid'] == $_SESSION['uid']) { ?>
                <a href="<?= base_url('/BookInfoController/updateBook/' . $u['bookid']) ?>" class="btn btn-primary">Update</a>
                <?php
              } else {
                if ($u['status'] == 'available') {
                ?>
                  <a href="<?= base_url('/CheckoutController/checkout/' . $u['bookid']) ?>" class="btn btn-primary">Check Out</a>
                <?php
                } else { ?>
                  <label style="color:red">The book is not available! check again later</label>
              <?php }
              }
            } else { ?>
              <label style="color:red">You have to log in to Borrow Book</label>
            <?php
            } ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <div class="footer footer-color pt-2">
    <p> All rights reserved &copy;libro</p>
  </div>

</body>

</html>