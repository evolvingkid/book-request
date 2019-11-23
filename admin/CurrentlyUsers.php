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
<style media="screen">
  a { color: inherit;
    text-decoration: none;}
</style>
  </head>
  <body>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dashboard_head_nav_bar.php'; ?>
    <?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/Dasboard_side_nav.php'; ?>
  <!-- This Consist of model That will pop up when craete button press -->
    <div class="model" id="create_users">
      <div class="float_covering">
      <div class="left">
        <h3>Current Users</h3>
      </div>
      <div class="right">
      <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
      onclick="close_card('create_users')">Close</button>
      </div>
        </div>
        <div class="">
          <div class="float_covering">
          <form class="" action="index.html" method="post">
            <div class="form_css left">
<div class="left input_txt">users name:</div>
<input type="text" name="Usersname" value="" class="input_Style_1" placeholder="Users name" required>
            </div>
            <div class="form_css left">
              <div class="left input_txt">Password:</div>
<input type="password" name="Password" value="" class="input_Style_1" placeholder="Password" required>
            </div>
              </div>
              <div class="float_covering">
              <form class="" action="index.html" method="post">
                <div class="form_css left">
                  <div class="left input_txt">Adress:</div>
    <input type="text" name="Adress" value="" class="input_Style_1" placeholder="Adress" required>
                </div>
                <div class="form_css left">
                  <div class="left input_txt">Mobile Number:</div>
    <input type="number" name="Mobile_Number" value="" class="input_Style_1" placeholder="Mobile Number" required>
                </div>
                  </div>
                  <div class="float_covering">
                  <form class="" action="index.html" method="post">
                    <div class="form_css left">
                      <div class="left input_txt">job Section:</div>
        <input type="text" name="job Section" value="" class="input_Style_1" placeholder="job Section" required>
                    </div>
                      </div>
                      <div class="float_covering">
                      <div class="right">
                      <button type="submit" name="button" class="btn_style_2" style="margin-top:15px;">Create</button>
                      </div>
                        </div>
          </form>
        </div>
    </div>
    <!-- This Consist of table and main Area -->
<div class="main_bar">
  <div class="float_covering">
  <div class="left">
    <h3>Current Users</h3>
  </div>
  <div class="right">
  <button type="button" name="button" class="btn_style_2" style="margin-top:15px;"
  onclick="open_card('create_users')">Create</button>
  </div>
    </div>
<div class="table">
<table>
  <tr class="head_row">
    <td>Si no</td>
    <td>Users Names</td>
    <td>Created Dates</td>
    <td>Status</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Mohammed Anas</td>
    <td>22/11/2019</td>
    <td>Online</td>
  </tr>
</table>
</div>
</div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
