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
  <body style="background:white;">
<?php   require $_SERVER['DOCUMENT_ROOT'].'/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <?php
      require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
     $sql = "SELECT * FROM books LEFT JOIN admin_login ON books.user_id = admin_login.admin_id
     WHERE book_id='$_GET[Book_Id]'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) { ?>
    <div class="" style="float:left; width:100%;">
      <img src="http://<?php echo $server_domain_name; ?>/book_request/admin/include_Files/uploads/<?php echo $row['book_img']; ?>" alt="" class="book_img">
      <div class="book_details">
<p class="book_name"> <?php echo $row['book_name']; ?> </p>
<p class="book_money"> <b> ₹ <?php echo $row['price']; ?> </b></p>
<a href="conformation.php?type=add_to_kart&book_id=<?php echo $row['book_id']; ?>"><button type="button" name="button" class="btn_light">Add to Cart</button></a> <br>
<a href="conformation.php?type=add_to_request&book_id=<?php echo $row['book_id']; ?>"><button type="button" name="button" class="btn_bright" style="background:#1D1B1B; color: white;">Request  <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/request_icon.svg" alt="" class="req_btn_img"> </button></a>
<p>Administrator:<?php echo $row['admin_username']; ?> </p>
      </div>
    </div>
  <?php }
}else {
     echo "0 results";
    } ?>
</body>

  </body>
</html>
