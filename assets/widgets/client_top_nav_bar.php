<?php session_start(); ?>
<nav class="Main_Nav" style="background:#EEEEEE; border:none; color: Black;">
<a href="index.php">  <div class="left head nav_txt" style="color: #707070; background: white; padding: 5px 20px; font-size: 16px; border-radius: 50px;">
    <i> Book</i><i style="color:#6BB1E8;">Request</i>
  </div> </a>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <?php if (isset($_SESSION["student_user"])) {
      ?>
    <a href="student_acc.php" style="color:black;">
     <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/avatar.svg" alt="" class="avater">
</a>
      <?php
    }else {?>
    <a href="login.php" style="color:black;">
      <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/avatar.svg" alt="" class="avater">
     </a>
    <?php  } ?>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <?php if (isset($_SESSION["student_user"])) {
      ?>
  <a href="cart.php" style="color:black;"><img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/shopping-cart.svg" alt="" class="cart"> </a>
<?php }else {?>
  <a href="login.php" style="color:black;"><img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/shopping-cart.svg" alt="" class="cart"> </a>
<?php } ?>
  </div>
</nav>
