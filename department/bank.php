<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php session_start(); ?>
<?php
if (isset($_POST['submit'])) {

    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
    $date = date('Y-m-d');
    $sql = "INSERT INTO dept_orders (dpt_order_product, dpt_order_pay_type, order_qty, order_dpt_id)
    VALUES ('$_GET[id]', 'Net Banking', '$_GET[qty]', '$_SESSION[dept_id]')";
    if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
     header('location:http://localhost/book_request/department/dashboard.php');
    } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-kart</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
      <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin.css">
    <script src="..\assets\js\main.js" charset="utf-8"></script>
  </head>
  <body>
    <nav class="Main_Nav">
      <div class="left head nav_txt menu_icon_felid" onclick="slide_nav()">
    <div class="menu_icon"></div>
    <div class="menu_icon"></div>
    <div class="menu_icon"></div>
      </div>
      <div class="left head nav_txt">
        <i> e -kart</i>
      </div>
      <div class="Nav_head_right sub_text nav_txt" style="padding-right: 10px;" onclick="profile_view()">
    <?php echo $_SESSION["dept_user"]; ?>
    <div class="none_display" id="profile_card">
      <a href="profile.php"><div class="Profile_txt" >
        Profile
      </div></a>
      <a href="signout.php"> <div class="Profile_txt" >
        SignOut
      </div></a>
    </div>
      </div>
      <div class="Nav_head_right" >
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/notifications.svg" alt=""
    style="width:30px;">
      </div>
    </nav>
    <div class="main_bar" style="width: calc(90% - 50px); float:left; margin-left: 50px;">
      <div class="float_covering">
      <div class="left">
        <h3>Payment</h3>
      </div>
        </div>
        <div class="">
          <div class="float_covering">
          <form action=""  method="post">
            <div class="form_css left">
  <div class="left input_txt">Bank id:</div>
  <input type="number" name="category_name" value="" class="input_Style_1" placeholder="Quantity" required>
            </div>
            <div class="form_css left">
              <div class="left input_txt">Bank Pin:</div>
              <input type="number" name="category_name" value="" class="input_Style_1" placeholder="Quantity" required>
            </div>
              </div>
                      <div class="float_covering">
                      <div class="right">
                      <button type="submit" value="Upload Image" name="submit" class="btn_style_2" style="margin-top:15px;">Proceed</button>
                      </div>
                        </div>
          </form>
        </div>
    </div>
  </body>
</html>
