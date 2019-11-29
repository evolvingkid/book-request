<?php

class PushSql
{
  var $sql_command;
  var $return_comment;
  function __construct($sql)
  {
    $this->sql_command=$sql;
    $this->sql_inser_query();
  }
  public function sql_inser_query()
  {
  require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
    $sql=$this->sql_command;
    if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
$this->$sucess_msg="Something might go wrong Please Try agin";
}
//$this->Redirect($sucess_msg, $redirect_link_head);
}
public function Redirect($sucess_msg, $redirect_link_head)
{
header("Location: /book_request/admin/".$redirect_link_head."?msg=".$sucess_msg);
}
}

if (isset($_GET['button'])) {
if ($_GET['button']=="create_Users") {
   $password=md5($_GET['Password']);
  $sql = "INSERT INTO admin_login (admin_username, admin_pass, mobile_number, job_section, adress)
  VALUES ('$_GET[Usersname]','$password', '$_GET[Mobile_Number]', '$_GET[jobSection]', '$_GET[Adress]')";
  //echo $sql;
  $sucess_msg="New User is been created";
  $redirect_link_head="CurrentlyUsers.php";
  $push_sql_class = new PushSql($sql);
  $push_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
}
if (isset($_POST['submit'])) {
if ($_POST['submit']=="Upload Image") {
  //category table insertion
if (isset($_POST['category_name'])) {
  session_start();
  //var_dump($_SESSION);
  include 'upload.php';
  upload();
  $filename=basename( $_FILES["fileToUpload"]["name"]);
//  echo "<br>";
  //echo $filename;
  $sql = "INSERT INTO category (category_name, user_id, cat_img)
  VALUES ('$_POST[category_name]','$_SESSION[id]', '$filename')";
  $sucess_msg="New Category is been created";
  $redirect_link_head="Categories.php";
  $push_sql_class = new PushSql($sql);
  $push_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
//book table insertion
if (isset($_POST['book_name'])) {
  session_start();
  //var_dump($_SESSION);
  include 'upload.php';
  upload();
  $filename=basename( $_FILES["fileToUpload"]["name"]);
//  echo "<br>";
  //echo $filename;
  $sql = "INSERT INTO books (cat_id, book_name, user_id, book_img, stock, price)
  VALUES ('$_POST[category]','$_POST[book_name]','$_SESSION[id]', '$filename','$_POST[stock]','$_POST[Price]')";
  echo "<br>";
  echo $sql;
  $sucess_msg="New Category is been created";
  $redirect_link_head="Books.php";
  $push_sql_class = new PushSql($sql);
  $push_sql_class->Redirect($sucess_msg, $redirect_link_head);
}

if (isset($_POST['banner'])) {
  session_start();
  //var_dump($_SESSION);
  include 'upload.php';
  upload();
  $filename=basename( $_FILES["fileToUpload"]["name"]);
//  echo "<br>";
  //echo $filename;
  $sql = "INSERT INTO banner (banner_img)
  VALUES ('$filename')";
  echo "<br>";
  echo $sql;
  $sucess_msg="New Banner is been created";
  $redirect_link_head="banners.php";
  $push_sql_class = new PushSql($sql);
  $push_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
}
}
 ?>
