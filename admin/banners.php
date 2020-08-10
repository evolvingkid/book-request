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
      <div class="model" id="create_category">
        <div class="float_covering">
        <div class="left">
          <h3>Current Users</h3>
        </div>
        <div class="right">
        <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
        onclick="close_card('create_category')">Close</button>
        </div>
          </div>
          <div class="">
            <div class="float_covering">
            <form action="include_Files/create.php"  method="post" enctype="multipart/form-data">
              <div class="form_css left">
  <div class="left input_txt">Select image to upload:</div>
  <input class="username_btn" type="file" name="fileToUpload" id="fileToUpload">
  <input type="text" name="banner" value="" style="display:none;">
              </div>
                </div>
                        <div class="float_covering">
                        <div class="right">
                        <button type="submit" value="Upload Image" name="submit" class="btn_style_2" style="margin-top:15px;">Create</button>
                        </div>
                          </div>
            </form>
          </div>
      </div>

<div class="main_bar">
  <div class="float_covering">
  <div class="left">
    <h3>Bannners</h3>
  </div>
  <div class="right">
  <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
  onclick="open_card('create_category')">Create</button>
     </div>
  <?php
  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
   $sql = "SELECT * FROM banner ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
   ?>
     <div class="float_covering">
   <div class="banner_imgsed" style="background-image:url('include_Files/uploads/<?php echo $row['banner_img']; ?>')">
     <a href="include_Files/delete.php?bannerid=<?php echo   $row["banner_id"]; ?>"> <button type="button" name="button"  class="round_corner_btn_in_table bg_red hidden_hover_button_banner" style="margin-top:150px;">Delete</button></a>
   </div>
      </div>
  <?php
}
} else {
  echo "<tr> <td>0 results </td> </tr>";
}
   ?>
  </div>
    </div>
</div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
    <script type="text/javascript">
    //This is the alert function were msg will pop up
function alert_pop_up() {
var txt;
if (confirm("<?php echo $_GET['msg']; ?>")) {
  txt = "You pressed OK!";
  window.location.href = "/book_request/admin/banners.php";
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
