<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php session_start(); ?>
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
        <h3>Orders</h3>
      </div>
        </div>
        <?php
        require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
         $sql = "SELECT * FROM dept_orders LEFT JOIN dept_details
         ON  dept_orders.order_dpt_id = dept_details.dept_id
         LEFT JOIN books ON dept_orders.dpt_order_product = books.book_id";
        $result = $conn->query($sql); ?>
    <div class="table">
    <table>
      <tr class="head_row">
        <td>Si no</td>
        <td>Product</td>
        <td>Price</td>
        <td>qty</td>
        <td>Payment Type</td>
        <td>Oders</td>
      </tr>
      <?php
      $count=1;
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {?>
            <tr>
              <td><?php echo $count; ?></td>
              <td><?php echo $row["book_name"]; ?></td>
              <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["order_qty"]; ?></td>
                <td><?php echo $row["dpt_order_pay_type"]; ?></td>
              <td><?php if ($row["oder_approve"] == 1){
                echo 'not approve';
              } else {
                echo 'approve';
              }?>

            </td>
            </tr>
      <?php
        $count++;
        }
      } else {
          echo "<tr> <td>0 results </td> </tr>";
      }
       ?>

    </table>
    </div>
    </div>
  </body>
</html>
