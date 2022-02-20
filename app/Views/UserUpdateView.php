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

  <body>
    <div class="container col-6 pt-2 ps-4 pb-4 mt-5 mb-5 bg-light">
      <?php foreach ($user as $u) { ?>
        <form name="form" onsubmit="return check()" action="<?= base_url("/UserInfoController/update_save/" . $u['uid']) ?>" class="form-group px-3 mb-5" method="POST">

          <div class="row">
            <div class="col">
              <label class="ms-1"> First Name </label><input type="text" class="form-control mt-2" name="fname" value="<?= $u['fname']; ?>" />
            </div>
            <div class="col">
              <label class="ms-1"> Last name</label>
              <input type="text" class="form-control mt-2" name="lname" value="<?= $u['lname']; ?>" />
            </div>

          </div>
          Contact No. <input type="text" class="form-control my-2" name="contact" value="<?= $u['contact']; ?>" />
          Email <input type="email" class="form-control my-2" name="email" value="<?= $u['email']; ?>" />
          Address <input type="text" class="form-control my-2" name="address" value="<?= $u['address']; ?>" />



          <div class="row py-2">

            <div class="col-3">
              Age <input type="number" class="form-control my-2" name="age" value="<?= $u['age']; ?>" />
            </div>

            <div class="col">
              <div class=" row ps-3 pb-3">
                Gender :
              </div>
              <div class="row-2">
                <input type="radio" name="gender" value="Male" class="ms-2" /> Male
                <input type="radio" name="gender" value="Female" class="ms-2" /> Female
                <input type="radio" name="gender" value="Others" class="ms-2" /> Others
              </div>
            </div>
          </div>
          <div class=" my-3 col-2 float-right">
            <input type="submit" value="Update" class="form-controlc sign-btn">
          </div>

        </form>
      <?php } ?>
    </div>
    <script>
      function check() {
        var fname = document.form.fname.value;
        var lname = document.form.lname.value;
        var email = document.form.email.value;
        var contact = document.form.contact.value;
        var gender = document.form.gender.value;
        var age = document.form.age.value;
        var address = document.form.address.value;


        if (fname == "") {
          alert("First Name field can not be empty");
          return false;
        }
        if (lname == "") {
          alert("Last Name field can not be empty");
          return false;
        }
        if (contact == "") {
          alert("Contact field can not be empty");
          return false;
        }
        if (email == "") {
          alert("Email field can not be empty");
          return false;
        }
        if (address == "") {
          alert("Address field can not be empty");
          return false;
        }
        if (age == "") {
          alert("Age field can not be empty");
          return false;
        }
        if (gender == "") {
          alert("Gender field can not be empty");
          return false;
        }
      }
    </script>
    <div class="footer footer-color pt-2">
      <p> All rights reserved &copy;libro</p>
    </div>
  </body>

</html>