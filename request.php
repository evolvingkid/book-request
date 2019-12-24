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
      $navbar_Active= array("sub_menu_tag","sub_menu_tag","sub_menu_tag sub_menu_tag_active","sub_menu_tag","sub_menu_tag");
     require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <div class="" style="height :60px;"></div>
    <div class="box_center" style="margin-top:50px;">
      <div class="float_covering">
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_dashbord_side_menu.php'; ?>
        <div class="main_body_student_dashbord left">
            <div class="float_covering">
              <p class="left">Post your request</p>
              <div class="right">
              <a href="reqested_table.php">  <button type="button" class="btn_style_2" style="background: #6B6FE8;">Request Section</button></a>
              </div>
            </div>
<div class="">
  <div class="float_covering">
  <form action="include_Files/requesting.php"  method="get" >
    <div class="form_css left">
<div class="left input_txt">Book Name:</div>
<input type="text" name="book_name" value="" class="input_Style_1" placeholder="Book name" required>
    </div>
    <div class="form_css left">
    </div>
      </div>
      <button type="submit" name="submit" class="btn_style_2" style="background: #75E7FF; color: black;">Request</button>
</form>
</div>
        </div>
      </div>

    </div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
