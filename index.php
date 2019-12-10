<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<html lang="en" dir="ltr">
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Book Request</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
  </head>
  <body>
<div class="whole_box" style="background-image: url('http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/book request home – 2.png');">
<nav class="Main_Nav" style="background:none; border:none; color: white;">
  <div class="left head nav_txt" style="color: white;">
    <i> Book Request</i>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <i>Login in</i>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <i> Home </i>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <i>About Us</i>
  </div>
</nav>
<div class="contain_body">
<div class="Head_intro_Box"><i> Find You Faviorite<br> Books in Here</i></div>
<div class="sub_intro_Box">
  There is no Friend as loyal as a book <br>
  -Ernest Hemingway
</div>
<div class="btn_into_box" onclick="change_page()">
  Explore
</div>
</div>
<script type="text/javascript">
  function change_page() {
    window.location.href = "/book_request/bookrequest.php";
  }
</script>
  </body>
</html>
