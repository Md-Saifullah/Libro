<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap.css") ?> />
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("/bootstrap/css/bootstrap copy.css") ?> />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Update</title>
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

    <div class="container col-5 pt-2 ps-6 pb-5 bg-light my-3  ">
        <div class="label h4 p-2 float-s"> Update Book Information</div>
        <div class="label h6 p-2 text-secondary">
            It's quick and easy.
        </div>
        <hr>
        <form name="form" onsubmit="return check()" action="<?= base_url() . "/BookInfoController/saveUpdateBook"; ?>" class="form-group p-3 mb-5" method="POST" enctype="multipart/form-data">
            <input type="text" class="form-control my-2" name="title" value="<?= $book['title'] ?>" />
            <input type="text" hidden class="form-control my-2" name="bookid" value="<?= $book['bookid'] ?>" />
            <input type="text" class="form-control my-2" name="author" value="<?= $book['author'] ?>" />
            <input type="text" class="form-control my-2" name="publication" value="<?= $book['publication'] ?>" placeholder="Enter Publication" />
            <div class="row py-1">
                <div class="col">
                    <div class="label ">
                        Genre:
                    </div>
                    <select name="genre" id=" genre" class="form-control">
                        <option value="Poetry" <?php if ($book['genre'] == "Poetry") echo "selected"; ?>>Poetry</option>
                        <option value="Drama" <?php if ($book['genre'] == "Drama") echo "selected"; ?>>Drama</option>
                        <option value="Romance" <?php if ($book['genre'] == "Romance") echo "selected"; ?>>Romance</option>
                        <option value="Fiction" <?php if ($book['genre'] == "Fiction") echo "selected"; ?>>Fiction</option>
                        <option value="History" <?php if ($book['genre'] == "History") echo "selected"; ?>>History</option>
                        <option value="Short story" <?php if ($book['genre'] == "Short story") echo "selected"; ?>>Short story</option>
                        <option value="Thriller" <?php if ($book['genre'] == "Thriller") echo "selected"; ?>>Thriller</option>
                        <option value="Travel" <?php if ($book['genre'] == "Travel") echo "selected"; ?>>Travel</option>
                        <option value="Art/architecture" <?php if ($book['genre'] == "Art/architecture") echo "selected"; ?>>Art/architecture</option>
                        <option value="Cooking" <?php if ($book['genre'] == "Cooking") echo "selected"; ?>>Cooking</option>
                        <option value=" Others" <?php if ($book['genre'] == "Others") echo "selected"; ?>>Others</option>
                    </select>
                </div>
                <div class="col">
                    <div class="label ">Language:</div>
                    <select name=" language" id="language" class="form-control">
                        <option value="Bangla" <?php if ($book['language'] == "Bangla") echo "selected"; ?>>Bangla</option>
                        <option value="English" <?php if ($book['language'] == "English") echo "selected"; ?>>English</option>
                        <option value="Spanish" <?php if ($book['language'] == "Spanish") echo "selected"; ?>>Spanish</option>
                        <option value="Hindi" <?php if ($book['language'] == "Hindi") echo "selected"; ?>>Hindi</option>
                        <option value="Arabic" <?php if ($book['language'] == "Arabic") echo "selected"; ?>> Arabic</option>
                        <option value=" Others" <?php if ($book['language'] == "Others") echo "selected"; ?>>Others</option>
                    </select>
                </div>
                <div class="col">
                    <div class="label  ">Edition:</div>
                    <select name="edition" id="edition" class="form-control  ">
                        <option value="">0</option>
                        <option value="1" <?php if ($book['edition'] == "1") echo "selected"; ?>>1</option>
                        <option value=" 2" <?php if ($book['edition'] == "2") echo "selected"; ?>> 2</option>
                        <option value=" 3" <?php if ($book['edition'] == "3") echo "selected"; ?>>3</option>
                        <option value="4" <?php if ($book['edition'] == "4") echo "selected"; ?>>4</option>
                        <option value="5" <?php if ($book['edition'] == "5") echo "selected"; ?>> 5</option>
                        <option value="6" <?php if ($book['edition'] == "6") echo "selected"; ?>>6</option>
                        <option value="7" <?php if ($book['edition'] == "7") echo "selected"; ?>> 7</option>
                        <option value="8" <?php if ($book['edition'] == "8") echo "selected"; ?>>8</option>
                        <option value="9" <?php if ($book['edition'] == "9") echo "selected"; ?>>9</option>
                        <option value="10" <?php if ($book['edition'] == "10") echo "selected"; ?>>10</option>
                    </select>
                </div>
            </div>
            <div class="label py-1"> Short details:</div>
            <textarea id="shortdetails" name="shortdetails" rows="5" cols="10" class="form-control"><?= $book['shortdetails'] ?></textarea>

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

    <div class="footer footer-color pt-2">
        <p> All rights reserved &copy;libro</p>
    </div>

</body>

</html>