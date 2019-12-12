<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php  //require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/Is_login_checker.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
        <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin.css">
                <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin_responcive.css">
<style media="screen">
  a { color: inherit;
    text-decoration: none;}
</style>
  </head>
  <body>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_top_nav_bar.php'; ?>
<div class="main_bar" style="float:none; margin: 0 auto; margin-top:60px;">
  <?php
  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
  $password=md5($_SESSION['student_pass']);
   $sql = "SELECT * FROM student_details WHERE  st_username = '$_SESSION[student_user]' AND st_pass= '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $st_username=$row['st_username'];
        $st_name=$row['st_name'];
        $st_rollnumber=$row['st_rollnumber'];
        $st_program=$row['st_program'];
        $st_sem=$row['st_sem'];
      }
      } else {
        echo "<tr> <td>0 results </td> </tr>";
      }
   ?>
   <div class="float_covering">
   <div class="left">
     <h3>Student Account Details</h3>
   </div>
   <div class="right">
<a href="signout.php">   <button type="button" name="button" class="btn_style_2" style="margin-top:15px;">Signout</button></a>
   </div>
     </div>
<p>
   Username: <?php echo  $st_username;?></p>
<p>   Name:  <?php echo  $st_name;?></p>
<p>   Rollnumber: <?php echo  $st_rollnumber;?></p>
<p>   Program:  <?php echo  $st_program;?></p>
<p>   Semester : <?php echo  $st_sem;?></p>
</div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
