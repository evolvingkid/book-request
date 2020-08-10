<?php
class Edit_query
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
        echo "Record edited successfully";
    } else {
       echo "Error edited record: " . $conn->error;
      $this->$sucess_msg="Something might go wrong Please Try agin";
    }
}
public function Redirect($sucess_msg, $redirect_link_head)
{
header("Location: /book_request/admin/".$redirect_link_head."?msg=".$sucess_msg);
}
}
if (isset($_POST['categoryid'])) {
    session_start();
      $sql = "UPDATE category SET category_name='$_POST[category_name]' , user_id='$_SESSION[id]'  WHERE cat_id='$_POST[categoryid]'";
      echo $sql;
  $sucess_msg="Category is been editted";
  $redirect_link_head="Categories.php";
  $edit_sql_class = new Edit_query($sql);
  $edit_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
if (isset($_POST['book_name'])) {
    session_start();
      $sql = "UPDATE books SET cat_id='$_POST[category]' , book_name='$_POST[book_name]' , stock='$_POST[stock]' , price='$_POST[Price]' , user_id='$_SESSION[id]'  WHERE book_id='$_POST[book_id]'";
      echo $sql;
  $sucess_msg="Book is been editted";
  $redirect_link_head="Books.php";
  $edit_sql_class = new Edit_query($sql);
  $edit_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
if (isset($_GET['req_id'])) {
  $sql = "UPDATE request_books SET req_status	='Approve' WHERE req_id='$_GET[req_id]'";
  echo $sql;
$sucess_msg="Approval is completed";
$redirect_link_head="new_request.php";
$edit_sql_class = new Edit_query($sql);
$edit_sql_class->Redirect($sucess_msg, $redirect_link_head);
}

if (isset($_GET['dept_req_id'])) {
  $sql = "UPDATE dept_orders SET oder_approve	=0 WHERE dpt_order_id='$_GET[dept_req_id]'";
  echo $sql;
$sucess_msg="Approval is completed";
$redirect_link_head="dept_request.php";
$edit_sql_class = new Edit_query($sql);
$edit_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
 ?>
