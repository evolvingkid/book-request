<?php
if (isset($_GET['type'])) {
  ?>
  <?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
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
      <div class="" style="width:calc(50% - 50px); float:left;">
        <a href="login.php?type=<?php echo $_GET['type']; ?>&book_id=<?php echo $_GET['book_id']; ?>">
          <button type="button" name="button" class="btn_light" style="margin-top:40%; margin-left:30%;"> Login in</button></a>
      </div>
      <div class="" style="width:calc(50% - 50px); float:left;">
          <a href="create_acc.php?type=<?php echo $_GET['type']; ?>&book_id=<?php echo $_GET['book_id']; ?>">
          <button type="button" name="button" class="btn_light" style="margin-top:40%; margin-left:30%;"> create New Account</button></a>
      </div>
    </body>
  </html>


  <?php
}
 ?>
