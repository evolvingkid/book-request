<!DOCTYPE html>
<?php $server_domain_name= $_SERVER['HTTP_HOST'];?>
<?php  //require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/Is_login_checker.php'; ?>
<?php
class Student_Details_Data
{
  public $st_name;
  public $st_username;
  public $st_rollnumber;
  public $st_program;
  public $st_address;
  public $st_sem;
  public $st_mail;
  function __construct() {
    require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php';
    $sql = "SELECT * FROM student_details WHERE st_id= '$_SESSION[student_id]'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$this->st_name=$row['st_name'];
$this->st_username=$row['st_username'];
$this->st_rollnumber=$row['st_rollnumber'];
$this->st_program=$row['st_program'];
$this->st_address=$row['st_address'];
$this->st_sem=$row['st_sem'];
$this->st_mail=$row['st_mail'];
}
} else {
echo "No results to show right know";
}
}
}
 ?>
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
    $navbar_Active= array("sub_menu_tag sub_menu_tag_active","sub_menu_tag","sub_menu_tag","sub_menu_tag","sub_menu_tag");
     require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_top_nav_bar.php'; ?>
    <div class="" style="height :60px;"></div>
    <div class="box_center" style="margin-top:50px;">
      <div class="float_covering">
<?php  require $_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/widgets/client_dashbord_side_menu.php'; ?>
        <div class="main_body_student_dashbord left">
          <?php $st_Datas_Fetch = new Student_Details_Data(); ?>
            <div class="float_covering">
              <button type="button" name="button" class="btn_style_2 right" style="background: #6B6FE8; border-radius: 50px;" style="margin-top:15px;"
              onclick="close_card('create_category')">Edit</button>
            </div>
            <img src="http://<?php echo $server_domain_name; ?>/book_request/assets/Build_In_SVG/avatar.svg" alt="" class="box_center student_main_avatar">
            <p class="box_center" style="text-align: center; margin-top:10px;"> <?php echo $st_Datas_Fetch->st_username; ?></p>
            <div class="">
              <p>Name: <?php echo $st_Datas_Fetch->st_name; ?></p>
              <p>RollNumber: <?php echo $st_Datas_Fetch->st_rollnumber; ?></p>
              <p>Adress: <?php echo $st_Datas_Fetch->st_address; ?></p>
              <p>Program: <?php echo $st_Datas_Fetch->st_program; ?></p>
              <p>Semester: <?php echo $st_Datas_Fetch->st_sem; ?></p>
              <p>Mail: <?php echo $st_Datas_Fetch->st_mail; ?></p>
            </div>
        </div>
      </div>

    </div>
    <script src="http://<?php echo $server_domain_name; ?>/book_request/assets/js/main.js" charset="utf-8"></script>
  </body>
</html>
