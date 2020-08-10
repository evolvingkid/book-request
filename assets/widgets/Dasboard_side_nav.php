<div class="side_navbar" id="slide_nav">
  <a href="dashboard.php">
  <div class="side_nav_bar_option" style="margin-top:30px;">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/dashboards_icon.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Dashboard</label>
  </div></a>
  <div class="side_nav_bar_option" style="margin-top:10px;" onclick="show_inner_option('iteams')">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/iteams_icons.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Iteams</label>
    <div class="none_display" id="iteams">
  <a href="Categories.php">  <div class=" inner_options">
      Categories
    </div></a>
  <a href="Books.php">  <div class=" inner_options">
      Books
    </div></a>
    </div>
  </div>
  <a href="banners.php"><div class="side_nav_bar_option" style="margin-top:10px;">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/banner_icons.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Banners</label>
  </div></a>
  <div class="side_nav_bar_option" style="margin-top:10px;" onclick="show_inner_option('request')">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/request_icons.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Requests</label>
    <div class="none_display" id="request">
  <a href="new_request.php">  <div class=" inner_options">
      New Requests
    </div> </a>
  <a href="conformed_request.php">  <div class=" inner_options">
      Conformed Request
    </div> </a>
  <a href="deleted_request.php">  <div class=" inner_options">
      Deleted Request
    </div></a>
    <a href="dept_request.php">  <div class=" inner_options">
        Dept Requests
      </div> </a>
    </div>
  </div>
  <div class="side_nav_bar_option" style="margin-top:10px;" onclick="show_inner_option('Users')">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/request_icons.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Users</label>
    <div class="none_display" id="Users">
    <a href="CurrentlyUsers.php"> <div class=" inner_options">
      Currently Users
    </div></a>
    <a href="deleted_users.php"><div class=" inner_options">
      Deleted Users
    </div></a>
    </div>
  </div>
  <a href="settings.php">
  <div class="side_nav_bar_option" style="margin-top:10px;">
    <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/settings_icons.svg" alt=""
    style="width:25px; margin-top:10px;">
    <label class="txt_option_side_nav" >Settings</label>
  </div></a>
</div>
