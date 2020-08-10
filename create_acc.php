<!DOCTYPE html>
<?php
//  session_start();
 $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php
  session_start();
if (isset($_POST['create'])) {
//echo "in";
  //  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';


  function check_is_product_ordered()
  {
    if (isset($_GET['type'])) {
      echo $_GET['type'];
      if ($_GET['type']=="add_to_request") {
        header("Location: include_Files/order_creation.php?type=add_to_request&book_id=".$_GET['book_id']);
      }
    }
  }
    //echo "in";
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
      $password=md5($_POST['Password']);
    $sql = "INSERT INTO student_details (st_name, st_username, st_pass, st_rollnumber, st_program, st_address, st_sem, st_mail)
    VALUES ('$_POST[Name]','$_POST[Username]','$password', '$_POST[roll_number]', '$_POST[Program]', '$_POST[address]', '$_POST[Semester]', '$_POST[Email]')";
    if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";

    $sqls = "SELECT * FROM student_details WHERE st_username='$_POST[Username]' AND st_pass='$password' ";
    $results = $conn->query($sqls);
    if ($results->num_rows > 0) {
        while($rows = $results->fetch_assoc()) {
          $_SESSION["student_id"] = $rows["st_id"];
          $_SESSION["student_user"] = $_POST['Username'];
          $_SESSION["student_pass"] = $_POST['Password'];
        }
        }else {

        }
      //  print_r($_SESSION);
      check_is_product_ordered();
  } else {
   //echo "Error: " . $sql . "<br>" . $conn->error;
   ?>
   <script type="text/javascript">
     alert("Account cannot be created please try after some times");
   </script>
   <?php
  }

}
 ?>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
    <meta charset="utf-8">
    <title>Book Request</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client_responcive.css">
  </head>
  <body>
<div class="form_create">
<h4>Create New Account</h4>
<form class="" action="" method="post">
  <div class="float_covering">
    <div class="form_css left">
      <label for="">Username:</label>
      <input type="text" name="Username" value="" class="input_Style_1" placeholder="Username" required>
    </div>
    <div class="form_css left">
      <label for="">Name:</label>
      <input type="text" name="Name" value="" class="input_Style_1" placeholder="Name" required>
    </div>
  </div>
  <div class="float_covering">
    <div class="form_css left">
      <label for="">Password:</label>
      <input type="password" name="Password" value="" class="input_Style_1" placeholder="Password" required>
    </div>
    <div class="form_css left">
      <label for="">address:</label>
      <input type="text" name="address" value="" class="input_Style_1" placeholder="address" required>
    </div>
  </div>
  <div class="float_covering">
    <div class="form_css left">
      <label for="">Roll Number:</label>
      <input type="number" name="roll_number" value="" class="input_Style_1" placeholder="Roll Number" required>
    </div>
    <div class="form_css left">
      <label for="">Semester:</label>
      <input type="number" name="Semester" value="" class="input_Style_1" placeholder="Semester" required>
    </div>
    <div class="float_covering">
      <div class="form_css left">
        <label for="">Program:</label>
        <input type="text" name="Program" value="" class="input_Style_1" placeholder="Program" required>
      </div>
      <div class="form_css left">
        <label for="">Email:</label>
        <input type="text" name="Email" value="" class="input_Style_1" placeholder="Email" required>
      </div>
  </div>
  <button type="submit" name="create" class="btn_submit">Create</button>
</form>
</div>
  </body>
</html>
