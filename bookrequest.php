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
$sql = "SELECT * FROM category";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
 ?>
 <a href="Product.php?cat_Id=<?php echo $row['cat_id']; ?>" style="color:black;">
 <div class="Category_Section_cont" style="background:url('/book_request/admin/include_Files/uploads/<?php echo $row['cat_img']; ?>');
  background-size: cover;
    background-position: center;">
 <div class="cat_banner">
   <?php echo $row['category_name']; ?>
 </div>
 </div>
 </a>
   <?php
 }
} else {
// echo "0 results";
}
        }
        Category();
         ?>
      </div>
<script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/client.js" charset="utf-8"></script>
  </body>
</html>
