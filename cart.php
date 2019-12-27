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
    $navbar_Active= array("sub_menu_tag","sub_menu_tag","sub_menu_tag","sub_menu_tag sub_menu_tag_active","sub_menu_tag");
     require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <div class="" style="height :60px;"></div>
    <div class="box_center" style="margin-top:50px;">
      <div class="float_covering">
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_dashbord_side_menu.php'; ?>
        <div class="main_body_student_dashbord left" style="padding: 0px; width: calc(55% - 100px);">
            <div class="float_covering" style="background: #E0DEDE;">
              <p class="left" style="margin-left: 10px;">Your Cart</p>
            </div>
            <div class="divider"></div>
<div class="">
  <?php
  function Category(){
require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
$sql = "SELECT * FROM client_cart LEFT JOIN books ON client_cart.book_id = books.book_id WHERE st_id = '$_SESSION[student_id]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="cart_box">
    <img src="http://<?php echo $GLOBALS['server_domain_name'];; ?>/book_request/admin/include_Files/uploads/<?php echo $row['book_img']; ?>" alt="" class="cart_img">
    <div class="left" style="margin-left: 50px;">
<p> <b> <?php echo $row['book_name']; ?> </b></p>
<p class="book_money">₹ <?php echo $row['price']; ?></p>
<p style="font-size: 10px;">Added to cart on: <?php echo $row['cart_date']; ?></p>
<div class="">
   <button type="button" name="button" class="btn_bright" style="background:#1D1B1B; color: white; font-size: 10px; padding: 10px 30px; border-radius: 50px;"> <?php if ( $row['stock'] == 0 ) {
     echo "OUT OF STOCK";
   }else {
     echo "IN STOCK";
   } ?></button>
 </div>
    </div>
    <div class="left" style="margin-left: 50px;">
<a href="book.php?Book_Id=<?php echo $row['book_id']; ?>"> <button type="button" name="button" class="btn_bright" style="background:#1D1B1B; color: white; font-size:16px; width: 150px;">Request  <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/book_request/assets/Build_In_SVG/request_icon.svg" alt="" class="req_btn_img"> </button>
 </a>  <br>
<a href="include_Files/removecart.php?cart_id=<?php echo $row['cart_id']; ?>"> <button type="button" name="button" class="btn_light" style="font-size:16px; width: 150px;">Remove</button> </a>
    </div>
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
        <div class="left cart_tot">
          <div class="head_tot_cart">
            <i> summary</i>
          </div>
          <div class="cart_tot_box">
          <p>  Total Price</p>
          <p class="book_money"> ₹             <?php
                      function tot_price()
                      {
                        require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
                        $sql = "SELECT * FROM client_cart LEFT JOIN books ON client_cart.book_id = books.book_id WHERE st_id = '$_SESSION[student_id]' ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                          $tot_price=0;
                        while($row = $result->fetch_assoc()) {
                          $tot_price=$tot_price+$row['price'];
                        }
                        echo $tot_price;
                      }else {
            echo $tot_price;
                      }
                      }
                      tot_price();
                       ?></p>
          </div>
<a href="include_Files/req_full.php">  <div class="Tot_req">
            Request All
          </div></a>
        </div>
      </div>

    </div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
