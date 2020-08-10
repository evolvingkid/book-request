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
  <body style="background: white;">
<?php   require $_SERVER['DOCUMENT_ROOT'].'/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <div class="banners" style="">
  <button type="button" name="button" class="Banner_Button"
  style="float:left" onclick="Banner_Transaction(1)"> <b><</b> </button>
  <button type="button" name="button" class="Banner_Button"
  style="float:right" onclick="Banner_Transaction(0)"> <b>></b> </button>
<script type="text/javascript">
var Banner_Count=0;
</script>
  <?php
  // this is where banner img is set
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
   <div class="banner">
     <img src="http://<?php echo  $GLOBALS['server_domain_name']; ?>/book_request/admin/include_Files/uploads/<?php echo $row['banner_img']; ?>" class="Banner_Img">
   </div>
     <?php
   }
} else {
   echo "0 results";
}
}
Banner_imgs();
   ?>
      </div>
      <div class="full_cont">
        <?php
        function Category(){
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$sql = "SELECT * FROM books WHERE cat_id='$_GET[cat_Id]' AND stock>0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
 ?>
 <a href="book.php?Book_Id=<?php echo $row['book_id']; ?>" style="color:black;">
<div class="product_box">
  <img src="http://<?php echo $GLOBALS['server_domain_name'];; ?>/book_request/admin/include_Files/uploads/<?php echo $row['book_img']; ?>" alt="" class="prod_img">
  <p><?php echo $row['book_name']; ?></p>
  <div class="float_covering">
    <p class="left">Stock: <?php echo $row['stock']; ?></p>
    <p class="right book_money">₹ <?php echo $row['price']; ?></p>
  </div>
</div>
 </a>
   <?php
 }
} else {
 echo '<div class="Login_msg" style="margin-top:50px;">
       <b> Products of these Category is not added and will be added soon
       </b>
     </div>';
}
        }
        Category();
         ?>
      </div>
<script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/client.js" charset="utf-8"></script>
  </body>
</html>
