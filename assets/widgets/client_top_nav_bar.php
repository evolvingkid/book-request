<?php session_start(); ?>
<nav class="Main_Nav" style="background:#78FFD0; border:none; color: Black;">
  <div class="left head nav_txt" style="color: Black;">
    <i> Book Request</i>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
    <?php if (isset($_SESSION["student_user"])) {
      ?>
    <a href="student_acc.php" style="color:black;">   <i><?php echo $_SESSION["student_user"]; ?></i> </a>
      <?php
    }else {?>
    <a href="login.php" style="color:black;">  <i>Login in</i> </a>
    <?php  } ?>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
  <a href="index.php" style="color:black;">  <i> Home </i> </a>
  </div>
  <div class="Nav_head_right" style="padding-right:20px; padding-top:5px;">
  <a href="AboutUs.php" style="color:black;">  <i>About Us</i> </a>
  </div>
</nav>
