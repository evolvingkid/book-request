<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Request</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client_responcive.css">
  </head>
  <body>
    <nav class="Main_Nav" style="background:#78FFD0; border:none; color: Black;">
      <div class="left head nav_txt" style="color: Black;">
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
    <div class="banners" style="">
  <button type="button" name="button" class="Banner_Button"
  style="float:left" onclick="Banner_Transaction(1)"> <b><</b> </button>
  <button type="button" name="button" class="Banner_Button"
  style="float:right" onclick="Banner_Transaction(0)"> <b>></b> </button>
<script type="text/javascript">
var Banner_Count=0;
</script>
  <?php
function Banner_imgs()
{
  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
  $sql = "SELECT * FROM banner";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
   ?>
   <script type="text/javascript">
     Banner_Count++;
   </script>
   <img src="http://<?php echo  $GLOBALS['server_domain_name']; ?>/book_request/admin/include_Files/uploads/<?php echo $row['banner_img']; ?>" class="Banner_Img">
     <?php
   }
} else {
   echo "0 results";
}
}
Banner_imgs();
   ?>
      </div>
<script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/client.js" charset="utf-8"></script>
  </body>
</html>
