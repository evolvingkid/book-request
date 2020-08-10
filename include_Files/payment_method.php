<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php
if (isset($_POST['cashmethod'])) {
  if ($_POST['cashmethod'] == 'debitcard') {
      header("Location: debitcard.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
  }else {
      header("Location: order_creation.php?type=".$_GET['type']."&book_id=".$_GET['book_id']);
  }
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
      width: 200px;
      margin-top: 20%;
      margin-left: 44%;
      padding: 10px;
    }
    </style>
  </head>
  <body>
    <div class="box_middle">
      <p>Choose your payment type</p>
      <form class="" action="" method="post">
        <input type="radio" name="cashmethod" value="debitcard"> Debit Card<br>
 <input type="radio" name="cashmethod" value="cashonfront"> Cash on Front<br>
 <button type="submit" name="button" class="btn_bright" name="cash">Payment Method</button>
      </form>
    </div>

  </body>
</html>
