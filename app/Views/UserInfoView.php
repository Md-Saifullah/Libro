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
                <a class="activeblue" href="<?= base_url("/UserInfoController") ?>">User Info</a>
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

    <div class="row">


        <div class="container col-4 p-5 my-3 bg-light">

            <div class="card bg-light p-2" style="width: 100%; height: 50%;">
                <div class="label h4 text-center p-4 bg-lgreen">Your Profile </div> <b>
                    <hr>
                </b>
                <img src="<?= base_url('uploads/' . $user[0]['photo']) ?>" class="card-img-top" alt="...">
                <h5 class="card-title"><b>Name: </b> <?= $user[0]['fname'] . " " . $user[0]['lname'] ?> </h5>
                <h6 class="card-text"> <b>User ID: </b> <?= $user[0]['uid'] ?></h6>
                <h6 class="card-text"> <b>Contact: </b> <?= $user[0]['contact'] ?></h6>
                <h6 class="card-text"> <b>Email: </b> <?= $user[0]['email'] ?></h6>
                <h6 class="card-text"> <b>Address: </b> <?= $user[0]['address'] ?></h6>
                <h6 class="card-text"> <b>Age: </b> <?= $user[0]['age'] ?></h6>
                <h6 class="card-text"> <b>Gender: </b> <?= $user[0]['gender'] ?></h6>
                <p class="card-text"> </p>
                <a href="<?= base_url("/UserInfoController/update") ?>" class="btn btn-color">Update</a>
            </div>
        </div>

    </div>

    <div class="row bg-light m-3 p-2" style="width: 100%; height: 100%;">
        <div class="label h4 text-center p-4 bg-lgreen">Your Books </div> <b>
            <hr>
        </b>
        <?php $i = 4;
        foreach ($books as $u) {
            if ($i == 4) {
                $i = 0;
        ?>
                <div class="row bg-light h5 ps-3 py-3">
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
                            <a href="<?= base_url('/BookInfoController/delete/' . $u['bookid']) ?>" class="btn btn-denger"> Delete Book</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
                </div>
    </div>
    <div>
        <?php
        // echo "<pre>";
        // print_r($checkout);
        ?>
    </div>

    <div class="row bg-light m-3 p-2" style="width: 100%; height: 100%;">
        <div class="label h4 text-center p-4 bg-lgreen">Your Borrowed Books </div> <b>
            <hr>
        </b>
        <?php $i = 4;
        foreach ($checkout as $c) {
            if ($i == 4) {
                $i = 0;
        ?>
                <div class="row bg-light h5 ps-3 py-3">
                <?php
            }
            $i++;
                ?>
                <div class="col">
                    <div class="card m-2 p-3 bg-light" style="width: 100%; height: 100%">
                        <img src="<?= base_url('uploads/' . $c->photo) ?>" class="card-img-top" alt="..." width="150px" height="200px">
                        <div class="card-body">
                            <h6 class="card-text"> <b> Title: <?= $c->title ?> </b> </h6>
                            <h6 class="card-text">Author: <?= $c->author ?> </h6>
                            <h6 class="card-text">Genre: <?= $c->genre ?> </h6>
                            <a href="<?= base_url("/CheckoutController/returnBook/" . $c->bookid) ?>" class="btn btn-primary">Return</a>
                            <!-- <a href="<? //= base_url('/BookInfoController/delete/' . $c['bookid']) 
                                            ?>" class="btn btn-denger"> Delete Book</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
                </div>
    </div>
   
</body>
<div class="footer footer-color mt-3 pt-2">
        <p> All rights reserved &copy;libro</p>
    </div>
</html>