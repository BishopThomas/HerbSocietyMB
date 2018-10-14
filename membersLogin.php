<?php
$pass = $_POST['pass'];

if($pass == "HSMBMember")
{
        include("membersOnlyPage.html");
}
else
{
    if(isset($_POST))
    {?>
      <html lang="en">

      <head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="keywords" content="Herb, Herbs, Herb Society, Herb Society Manitoba, Herb Society MB">
          <meta name="description" content="Herb Society of Manitoba">
          <meta name="author" content="">

          <title>Herb Society of Manitoba</title>

          <!-- Bootstrap core CSS -->
          <link href="static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">

          <!-- Custom styles for this template -->
          <!-- <link href="static/css/minty.css" rel="stylesheet" type="text/css"> -->
          <link href="./static/css/herbsocietymb.css?version=5" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      </head>


      <body>
      <div id="mytopblock" class="container-fluid bg-light topblock">
        <!-- <img class="" src="./static/images/herb garden photo-2013.jpg"/> -->
      </div>
        <nav id="myNavBar" class="navbar navbar-expand-md navbar-light bg-light pl-md-5 pl-2">
            <a class="navbar-brand" href="#">
              <img class="logo" src="./static/images/HSMlogo_A8E363.png"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" href="javascript:void(0);" onclick="expandMenu()" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="./index.html">ABOUT US
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./membership.html">MEMBERSHIP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./programming.html">PROGRAMMING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./herbalLinks.html">HERBAL LINKS</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./membersLogin.php">MEMBERS LOGIN</a>
                  <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contactUs.html">CONTACT US</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-mbherb-1 pt--100">
          <hr>
          <p> This content is password protected. To access it, please enter your password below:
          </p>
          <form method="POST" action="membersLogin.php">
            <div class="ml-3" id="mypassword_field">
              <label for="password_field" class="row"><span aria-required="true"></span>Password:<br></label>
            </div>
            <div class="row col-md-6 col-lg-4">
              <input type="text" class="form-control" id="password_field" name="pass" maxlength="40" size="25" required>
            </div>
            <div class="mt-4">
              <input type="submit" class="mx-auto btn btn-success" value="Submit">
            </div>
          </form>
        </div>

            <!-- Bootstrap core JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.6.1/lodash.min.js"></script>
            <script src="static/js/lodash.js"></script>
            <script src="static/jquery/jquery.min.js"></script>
            <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="static/js/mbHerb.js"></script>
    <?}
}
?>
