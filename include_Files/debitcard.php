<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php
if (isset($_POST['cardname'])) {
      header("Location: order_creation.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Request</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/client_responcive.css">
    <style media="screen">
    .box_middle{
      border: 1px solid #D4D3D3;
      text-align: center;
      margin-top: 20%;
      padding: 10px;
    }
    </style>
  </head>
  <body>
    <div class="box_middle">
      <p>Card Details</p>
      <form class="" action="" method="post">
        <div class="float_covering">
        <form action="include_Files/create.php"  method="post">
          <div class="form_css left">
<div class="left input_txt">Card Name:</div>
<input type="text" name="cardname" value="" class="input_Style_1" placeholder="cardname" required>
          </div>
          <div class="form_css left">
<div class="left input_txt">card pin number:</div>
<input type="number" name="pinnumber" value="" class="input_Style_1" placeholder="pin number" required>
          </div>
            </div>
 <button type="submit" name="button" class="btn_bright" name="card">Payment Method</button>
      </form>
    </div>

  </body>
</html>
