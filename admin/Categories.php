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
                <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/catergory_data_stuructre.js" charset="utf-8"></script>
<style media="screen">
  a { color: inherit;
    text-decoration: none;}
</style>
  </head>
  <body>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dashboard_head_nav_bar.php'; ?>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dasboard_side_nav.php'; ?>
  <!-- This Consist of model That will pop up when craete button press -->
    <div class="model" id="create_category">
      <div class="float_covering">
      <div class="left">
        <h3>Current Users</h3>
      </div>
      <div class="right">
      <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
      onclick="close_card('create_category')">Close</button>
      </div>
        </div>
        <div class="">
          <div class="float_covering">
          <form action="include_Files/create.php"  method="post" enctype="multipart/form-data">
            <div class="form_css left">
<div class="left input_txt">Category:</div>
<input type="text" name="category_name" value="" class="input_Style_1" placeholder="Category name" required>
            </div>
            <div class="form_css left">
<div class="left input_txt">Select image to upload:</div>
<input class="username_btn" type="file" name="fileToUpload" id="fileToUpload">
            </div>
              </div>

                      <div class="float_covering">
                      <div class="right">
                      <button type="submit" value="Upload Image" name="submit" class="btn_style_2" style="margin-top:15px;">Create</button>
                      </div>
                        </div>
          </form>
        </div>
    </div>
      <!-- This Consist of model That will pop up when edit button is pressed -->
    <div class="model" id="edit_category">
      <div class="float_covering">
      <div class="left">
        <h3>Current Users</h3>
      </div>
      <div class="right">
      <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
      onclick="close_card('edit_category')">Close</button>
      </div>
        </div>
        <div class="float_covering">
        <div class="" id="edit_card_form">
          <form action="include_Files/edit.php"  method="post" enctype="multipart/form-data">
            <div class="form_css left">
          <div class="left input_txt">Category:</div>
          <input type="text" name="category_name" value="" id="category_input" class="input_Style_1" placeholder="Category name" required>
            </div>
              </div>
              <input type="text" name="categoryid"  id="edit_id" value="" style="display:none;">
                      <div class="float_covering">
                      <div class="right">
                      <button type="submit" value="Upload Image" name="submit" class="btn_style_2" style="margin-top:15px;">Edit</button>
                      </div>
                        </div>
          </form>

        </div>
    </div>
    <!-- This Consist of table and main Area -->
<div class="main_bar">
  <div class="float_covering">
  <div class="left">
    <h3>Categories</h3>
  </div>
  <div class="right">
  <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
  onclick="open_card('create_category')">Create</button>
  </div>
    </div>
    <script type="text/javascript">
      var main_Category_data_flow = new Array();
    </script>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
     $sql = "SELECT * FROM category LEFT JOIN admin_login ON  category.user_id = admin_login.admin_id";
    $result = $conn->query($sql); ?>
<div class="table">
<table>
  <tr class="head_row">
    <td>Si no</td>
    <td>Categories</td>
    <td>Created / edited User</td>
    <td></td>
  </tr>
  <?php
  $count=1;
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><?php echo $count; ?></td>
          <td><?php echo   $row["category_name"]; ?></td>
          <td><?php echo   $row["admin_username"]; ?></td>
          <td> <a href="include_Files/delete.php?categoryid=<?php echo   $row["cat_id"]; ?>"> <button type="button" name="button" class="round_corner_btn_in_table bg_red">Delete</button></a>
        <button type="button" name="button" class="round_corner_btn_in_table bg_blue" onclick="On_Edit(<?php echo   $count ?>)">Edit</button></td>
        </tr>
        <script type="text/javascript">
                main_Category_data_flow[<?php echo $count; ?>] =new Main_Category({
                   id:'<?php echo $row['cat_id'] ?>',
                   Category_names: '<?php echo $row['category_name'] ?>',
                   Category_img: '<?php echo $row['cat_img'] ?>',
                });
        </script>
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
  window.location.href = "/book_request/admin/Categories.php";
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
document.getElementById('category_input').value=main_Category_data_flow[id].Category_names;
document.getElementById('edit_id').value=main_Category_data_flow[id].id;
}
</script>
  </body>
</html>
