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
                            <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client.css">
                <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin_responcive.css">
<style media="screen">
  a { color: inherit;
    text-decoration: none;}
</style>
  </head>
  <body>
    <?php
    $navbar_Active= array("sub_menu_tag","sub_menu_tag sub_menu_tag_active","sub_menu_tag","sub_menu_tag","sub_menu_tag");
     require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <div class="" style="height :60px;"></div>
    <div class="box_center" style="margin-top:50px;">
      <div class="float_covering">
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_dashbord_side_menu.php'; ?>
        <div class="main_body_student_dashbord left">
            <div class="float_covering">
              <p class="left">Requested book</p>
            </div>
<div class="">
  <?php
  function Category(){
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$sql = "SELECT * FROM request_books LEFT JOIN books ON request_books.req_book_id = books.book_id WHERE req_student_id = '$_SESSION[student_id]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="Category_Section_cont" style="background:url('/book_request/admin/include_Files/uploads/<?php echo $row['book_img']; ?>');
  background-size: cover; background-position: center;">
<div class="cat_banner">
<?php echo $row['book_name']; ?>
</div>
<p class="box_status"><?php echo $row['req_status']; ?></p>
</div>
<?php
}
} else {
// echo "0 results";
}
  }
  Category();
   ?>
</div>
        </div>
      </div>

    </div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
