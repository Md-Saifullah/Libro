<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap.css") ?> />
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap copy.css") ?> />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Book Entry</title>
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
        <a class="activeblue" href="<?= base_url("/BookEntryController") ?>">Book Entry</a>
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

  <div class="container col-5 pt-2 ps-6 pb-5 mb-3 bg-light ">
    <div class="label h4 p-2 float-s"> Give Book Information</div>
    <div class="label h6 p-2 text-secondary">
      It's quick and easy.
    </div>
    <hr>
    <form name="form" onsubmit="return check()" action="<?= base_url() . "/BookEntryController/book_save"; ?>" class="form-group p-3 mb-5" method="POST" enctype="multipart/form-data">
      <input type="text" class="form-control my-2" name="title" placeholder="the Title" />
      <input type="text" class="form-control my-2" name="author" placeholder="Author name" />
      <input type="text" class="form-control my-2" name="publication" placeholder="publication name" />
      <div class="row py-1">
        <div class="col">
          <div class="label ">
            Genre:
          </div>
          <select name="genre" id=" genre" class="form-control">
            <option value="Poetry">Poetry</option>
            <option value="Drama">Drama</option>
            <option value="Romance">Romance</option>
            <option value="Fiction">Fiction</option>
            <option value="History">History</option>
            <option value="Short story">Short story</option>
            <option value="Thriller">Thriller</option>
            <option value="Travel">Travel</option>
            <option value="Art/architecture">Art/architecture</option>
            <option value="Cooking">Cooking</option>
            <option value=" Others">Others</option>
          </select>
        </div>
        <div class="col">
          <div class="label ">Language:</div>
          <select name=" language" id="language" class="form-control">
            <option value="Bangla">Bangla</option>
            <option value="English">English</option>
            <option value="Spanish">Spanish</option>
            <option value="Hindi">Hindi</option>
            <option value="Arabic"> Arabic</option>
            <option value=" Others">Others</option>
          </select>
        </div>
        <div class="col">
          <div class="label  ">Edition:</div>
          <select name="edition" id="edition" class="form-control  ">
            <option value="1">1</option>
            <option value=" 2"> 2</option>
            <option value=" 3">3</option>
            <option value="4">4</option>
            <option value="5"> 5</option>
            <option value="6">6</option>
            <option value="7"> 7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
      </div>
      <div class="label py-1"> Short details:</div>
      <textarea id="shortdetails" name="shortdetails" rows="1" cols="10" class="form-control"></textarea>
      <div class="row py-1">
        <div class="col-8">
          <div class="label ">Image:</div>
          <input type="file" name="photo" id="photo" class="form-control">
        </div>
      </div>
      <input type="submit" id="submit" name="submit" Value="Submit" class="btn btn-primary my-2 float-end  ">
  </div>

  </form>

  </div>
  <script>
    function check() {
      var title = document.form.title.value;
      var author = document.form.author.value;
      var publication = document.form.publication.value;
      var genre = document.form.genre.value;
      var language = document.form.language.value;
      var edition = document.form.edition.value;
      var image = document.form.image.value;


      if (title == "") {
        alert("Title field can not be empty");
        return false;
      }
      if (author == "") {
        alert("Last Name field can not be empty");
        return false;
      }
      if (publication == "") {
        alert("Contact field can not be empty");
        return false;
      }
      if (genre == "") {
        alert("Email field can not be empty");
        return false;
      }
      if (language == "") {
        alert("Address field can not be empty");
        return false;
      }
      if (edition == "") {
        alert("Age field can not be empty");
        return false;
      }
      if (gender == "") {
        alert("Gender field can not be empty");
        return false;
      }
      if (image == "") {
        alert("Password field can not be empty");
        return false;
      }
    }
  </script>
</body>
<div class="footer footer-color pt-2">
    <p> All rights reserved &copy;libro</p>
  </div>
</html>