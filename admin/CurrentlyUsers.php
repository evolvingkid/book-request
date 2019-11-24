<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/Is_login_checker.php'; ?>
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
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dashboard_head_nav_bar.php'; ?>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dasboard_side_nav.php'; ?>
  <!-- This Consist of model That will pop up when craete button press -->
    <div class="model" id="create_users">
      <div class="float_covering">
      <div class="left">
        <h3>Current Users</h3>
      </div>
      <div class="right">
      <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
      onclick="close_card('create_users')">Close</button>
      </div>
        </div>
        <div class="">
          <div class="float_covering">
          <form action="include_Files/create.php" method="get">
            <div class="form_css left">
<div class="left input_txt">users name:</div>
<input type="text" name="Usersname" value="" class="input_Style_1" placeholder="Users name" required>
            </div>
            <div class="form_css left">
              <div class="left input_txt">Password:</div>
<input type="password" name="Password" value="" class="input_Style_1" placeholder="Password" required>
            </div>
              </div>
              <div class="float_covering">
                <div class="form_css left">
                  <div class="left input_txt">Adress:</div>
    <input type="text" name="Adress" value="" class="input_Style_1" placeholder="Adress" required>
                </div>
                <div class="form_css left">
                  <div class="left input_txt">Mobile Number:</div>
    <input type="number" name="Mobile_Number" value="" class="input_Style_1" placeholder="Mobile Number" required>
                </div>
                  </div>
                  <div class="float_covering">
                    <div class="form_css left">
                      <div class="left input_txt">job Section:</div>
        <input type="text" name="jobSection" value="" class="input_Style_1" placeholder="job Section" required>
                    </div>
                      </div>
                      <div class="float_covering">
                      <div class="right">
                      <button type="submit" name="button" class="btn_style_2" style="margin-top:15px;" value="create_Users">Create</button>
                      </div>
                        </div>
          </form>
        </div>
    </div>
    <!-- This Consist of table and main Area -->
<div class="main_bar">
  <div class="float_covering">
  <div class="left">
    <h3>Current Users</h3>
  </div>
  <div class="right">
  <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
  onclick="open_card('create_users')">Create</button>
  </div>
    </div>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
     $sql = "SELECT * FROM admin_login WHERE acc_validity=1";
    $result = $conn->query($sql); ?>
<div class="table">
<table>
  <tr class="head_row">
    <td>Si no</td>
    <td>Users Names</td>
    <td>Job Section</td>
    <td>Status</td>
  </tr>
  <?php
  $count=1;
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $count; ?></td>
          <td><?php echo   $row["admin_username"]; ?></td>
          <td><?php echo   $row["job_section"]; ?></td>
          <td><?php if ( $row["status"] == "online") {
          echo   '<p style="color:#199B30;">'.$row["status"].'<p>';
        }else {
  echo   '<p style="color:#E30D23;">'.$row["status"].'<p>';
        }
           ?></td>
        </tr>
  <?php
    $count++;
    }
  } else {
      echo "<tr> <td>0 results </td> </tr>";
  }
   ?>

</table>
</div>
</div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
    <script type="text/javascript">
    //This is the alert function were msg will pop up
function alert_pop_up() {
var txt;
if (confirm("<?php echo $_GET['msg']; ?>")) {
  txt = "You pressed OK!";
  window.location.href = "/book_request/admin/CurrentlyUsers.php";
} else {
  txt = "You pressed Cancel!";
}
console.log(txt);
}
<?php
if (isset($_GET['msg'])) {
?>
alert_pop_up();
<?php
}  ?>
    </script>
  </body>
</html>
