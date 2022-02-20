<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?= base_url("/bootstrap/css/bootstrap.css") ?> />
  <link rel="stylesheet" type="text/css" href=<?= base_url("/bootstrap/css/bootstrap copy.css") ?> />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Home</title>
</head>

<body>

  <div class="header">
    <a href="<?= base_url("/Home") ?>">
      <img width="150" height="75" src="<?= base_url("/image/logo2.png") ?>" alt="!" class="rounded ms-2" />
    </a>
    </a>
    <div class="header-right">
      <a class="activeblue" href="<?= base_url("/Home") ?>">Home</a>
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
        <form action="/BookInfoController/search/" method="POST">
          <input type="text" placeholder="Search book name" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>

  <?php $i = 4;
  foreach ($user as $u) {
    if ($i == 4) {
      $i = 0;
  ?>
      <div class="row bg-dark h5 ps-3 py-3">
      <?php
    }
    $i++;
      ?>
      <div class="col">
        <div class="card m-2 p-3 bg-light" style="width: 100%; height: 100%">
          <img src="<?= base_url('uploads/' . $u['photo']) ?>" class="card-img-top" alt="..." width="150px" height="200px">
          <div class="card-body">
            <h6 class="card-text"> <b> Title: <?= $u['title'] ?> </b> </h6>
            <h6 class="card-text">Author: <?= $u['author'] ?> </h6>
            <h6 class="card-text">Genre: <?= $u['genre'] ?> </h6>
            <a href="<?= base_url("/BookInfoController/BookInfo/" . $u['bookid']) ?>" class="btn btn-primary">Book Info</a>
          </div>
        </div>
      </div>
    <?php } ?>
      </div>
      <div class="footer footer-color pt-2">
        <p> All rights reserved &copy;libro</p>
      </div>
</body>

</html>