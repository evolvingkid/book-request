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
<div class="Intro_head">
<div class="Intro_head_txt">
  <i> Find Your Favirate<br>
Books in Here</i>
</div>
</div>
<div class="Intro_head_sub_txt Intro_head" style="top: 45%; right: -70px;">
  “There is no friend as loyal as a book.”<br>
  ― Ernest Hemingway
</div>
<div class="Intro_head intro_btn" style="top: 55%; right: -240px;" onclick="change_page()">
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
