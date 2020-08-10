<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/Is_login_checker.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main.css">
    <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/main_respocive.css">
        <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin.css">
                <link rel="stylesheet" href="http://<?php echo $server_domain_name; ?>/book_request/assets/css/admin_responcive.css">
                <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/Book_data_sturcture.js" charset="utf-8"></script>
<style media="screen">
  a { color: inherit;
    text-decoration: none;}
</style>
  </head>
  <body>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dashboard_head_nav_bar.php'; ?>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dasboard_side_nav.php'; ?>
  <!-- This Consist of model That will pop up when craete button press -->

    <!-- This Consist of table and main Area -->
<div class="main_bar">
  <div class="float_covering">
  <div class="left">
    <h3>Department Orders</h3>
  </div>
    </div>

    <script type="text/javascript">
      var Books_data_flow = new Array();
    </script>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
     $sql = "SELECT * FROM dept_orders LEFT JOIN dept_details
     ON  dept_orders.order_dpt_id = dept_details.dept_id
     LEFT JOIN books ON dept_orders.dpt_order_product = books.book_id LEFT JOIN category ON books.cat_id = category.cat_id ";
    $result = $conn->query($sql); ?>
<div class="table">
<table>
  <tr class="head_row">
    <td>Si no</td>
    <td>Products</td>
    <td>Categories</td>
      <td>Department</td>
      <td>Price</td>
    <td></td>
  </tr>
  <?php
  $count=1;
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $count; ?></td>
          <td><?php echo $row["book_name"]; ?></td>
          <td><?php echo $row["category_name"]; ?></td>
          <td><?php echo $row["dept_name"]; ?></td>
          <td><?php echo $row["price"]; ?></td>
          <td> <?php
          if ($row["oder_approve"] == 1){
            ?><a href="include_Files/edit.php?dept_req_id=<?php echo $row["dpt_order_id"]; ?>"> <button type="button" name="button" class="round_corner_btn_in_table bg_blue">Approve</button> </a><?php
          } else {

          }
           ?>
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
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
    <script type="text/javascript">
    //This is the alert function were msg will pop up
function alert_pop_up() {
var txt;
if (confirm("<?php echo $_GET['msg']; ?>")) {
  txt = "You pressed OK!";
  window.location.href = "/book_request/admin/dept_request.php";
} else {
  txt = "You pressed Cancel!";
}
console.log(txt);
}
<?php
if (isset($_GET['msg'])) {
?>
alert_pop_up();
<?php
}  ?>
    </script>
<script type="text/javascript">
function On_Edit(id) {
  console.log(id);
  open_card('edit_category');
document.getElementById('book_name').value=Books_data_flow[id].Book_names;
document.getElementById('stock').value=Books_data_flow[id].Stock;
document.getElementById('price').value=Books_data_flow[id].Price;
document.getElementById('cat_id').value=Books_data_flow[id].Category_id;
document.getElementById('book_id').value=Books_data_flow[id].id;
}
</script>
  </body>
</html>
