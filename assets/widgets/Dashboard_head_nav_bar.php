<nav class="Main_Nav">
  <div class="left head nav_txt menu_icon_felid" onclick="slide_nav()">
<div class="menu_icon"></div>
<div class="menu_icon"></div>
<div class="menu_icon"></div>
  </div>
  <div class="left head nav_txt">
    <i> Dashboard</i>
  </div>
  <div class="Nav_head_right sub_text nav_txt" style="padding-right: 10px;" onclick="profile_view()">
<?php echo $_SESSION["user"]; ?>
<div class="none_display" id="profile_card">
  <div class="Profile_txt" >
    Profile
  </div>
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
