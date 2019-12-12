<!DOCTYPE html>
<?php
session_start();
 $server_domain_name= $_SERVER['HTTP_HOST'];?>
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
    <?php if (isset($_SESSION["student_user"])) {
      ?>
    <a href="student_acc.php" style="color:white;">   <i><?php echo $_SESSION["student_user"]; ?></i> </a>
      <?php
    }else {?>
    <a href="login.php" style="color:white;">  <i>Login in</i> </a>
    <?php  } ?>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
  <a href="index.php" style="color:white;">  <i> Home </i> </a>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <a href="AboutUs.php" style="color:white;">  <i>About Us</i> </a>
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
<script type="text/javascript">
//This is the alert function were msg will pop up
function alert_pop_up() {
var txt;
if (confirm("book creation <?php echo $_GET['status']; ?>")) {
txt = "You pressed OK!";
window.location.href = "/book_request/index.php";
} else {
txt = "You pressed Cancel!";
}
console.log(txt);
}
<?php
if (isset($_GET['type'])) {
?>
alert_pop_up();
<?php
}  ?>
</script>
  </body>
</html>
