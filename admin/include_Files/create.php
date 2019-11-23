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
 ?>
