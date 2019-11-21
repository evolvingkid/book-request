<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="login_page">
    <p class="centered_txt sign_in_head">Log in</p>
    <form class="" action="" method="post">
      <div class="form">
        <label for="">Username:</label>
        <input type="text" name="Username" value="" class="input_Style_1" placeholder="Username">
      </div>
      <div class="form">
        <label for="">Password:</label>
        <input type="text" name="Password" value="" class="input_Style_1" placeholder="Password">
        <button type="submit" name="login" class="signin_btn">
          <img
          src="http://<?php echo $server_domain_name ?>/book_request/assets/Build_In_SVG/signin_btn_arrow.svg"
          alt="Sign In" style="height: 20px;"> </button>
      </div>
    </form>


   </div>
  </body>
</html>
