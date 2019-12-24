<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php
function redirection_controller()
{
if (isset($_GET['type'])) {
if ($_GET['type']=="add_to_request") {
   header('location: include_Files/order_creation.php?type='.$_GET['type'].'&book_id='.$_GET['book_id']);
}
if ($_GET['type']=="add_to_kart") {
   header('location: include_Files/cart_process_creation.php?type='.$_GET['type'].'&book_id='.$_GET['book_id']);
}else {
  header('location:index.php');
}
}else {
  header('location:index.php');
}
}
 session_start();
 $login_msg=NULL;
if(isset($_POST['login'])){
   //echo $password;
  require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
     $password=md5($_POST['Password']);
  $sql = "SELECT * FROM `student_details`
  WHERE st_username='$_POST[Username]'
  AND st_pass='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
      $_SESSION["student_id"] = $row["st_id"];
      $_SESSION["student_user"] = $_POST["Username"];
      $_SESSION["student_pass"] = $_POST["Password"];
redirection_controller();
      //  header('location:dashboard.php');

} else {
    $login_msg="You Enter Wrong Username or Password";
}
}
 ?>
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
        <input type="text" name="Username" value="" class="input_Style_1" placeholder="Username" required>
      </div>
      <div class="form">
        <label for="">Password:</label>
        <input type="password" name="Password" value="" class="input_Style_1" placeholder="Password" required>
        <button type="submit" name="login" class="signin_btn">
          <img
          src="http://<?php echo $server_domain_name ?>/book_request/assets/Build_In_SVG/signin_btn_arrow.svg"
          alt="Sign In" style="height: 20px;"> </button>
      </div>
    </form>
    <?php if ($login_msg != NULL) {
        ?>    <div class="Login_msg">
              <b>
                <?php echo "$login_msg"; ?>
              </b>
            </div>
      <?php
      } ?>

   </div>
  </body>
</html>
