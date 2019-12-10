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
    <?php
      require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
     $sql = "SELECT * FROM books WHERE book_id='$_GET[Book_Id]'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) { ?>
    <div class="" style="float:left; width:100%;">
      <img src="http://<?php echo $server_domain_name; ?>/book_request/admin/include_Files/uploads/<?php echo $row['book_img']; ?>" alt="" class="book_img">
      <div class="book_details">
<p class="book_name"> <?php echo $row['book_name']; ?> </p>
<p class="book_money"> <b> ₹ <?php echo $row['price']; ?> </b></p>
      </div>
    </div>
  <?php }
}else {
     echo "0 results";
    } ?>
</body>

  </body>
</html>
