<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Linkup</title>
    <link rel="icon" href="images\logo2.png" type="image/png" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="main">
        <header>
          <div id="logo-div">
            <img src="images/logo.png" id="logo" alt="" />
            <span id="logo-text">Linkup</span>
          </div>
          <div id="nav-div" class="nav-div">
            <p>
              <a href=""> Home</a><a href=""> About</a
              ><a href="" class="active"> Login</a><a href=""> Signup</a
              ><a href=""> Contact</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <img src="images/mdi_menu.png" alt="" />
              </a>
            </p>
          </div>
        </header>
        <div class="content">
          <div class="image-div">
            <img src="images/happy-young-couple.jpg" alt="" />
          </div>
          <div class="content-fields">
            <h2>Your better half is just a click away</h2>
            <p>Login now to meet up</p>

            <form id="form" action="validation.php">
              <label>Username</label><br />
              <i class="fa fa-user"></i
              ><input
                type="email"
                id="email"
                placeholder="username"
                required
              /><span id="Evalid"></span><br /><br />
              <label>Password</label><br />
              <i class="fa fa-lock"></i
              ><input
                type="password"
                name=""
                id="password"
                placeholder="password" required
              /><br />
              <span class="right">Forgot Password?</span> <br /><br />
              <input id="submit" type="submit" value="Login" /><br />
              <span
                >Don't have an account? no problem Signup
                <a href="signUp.html">here</a>.</span
              >
            </form>
          </div>
        </div>
        <div class="clear"></div>
        <footer>
          <b>&copy;Copyright 2019 Team-zeal</b>
        </footer>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
