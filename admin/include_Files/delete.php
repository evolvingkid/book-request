<?php
class Delete_query
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
        echo "Record deleted successfully";
    } else {
       echo "Error deleting record: " . $conn->error;
      $this->$sucess_msg="Something might go wrong Please Try agin";
    }
}
public function Redirect($sucess_msg, $redirect_link_head)
{
header("Location: /book_request/admin/".$redirect_link_head."?msg=".$sucess_msg);
}
}
if (isset($_GET['categoryid'])) {
  $sql = "DELETE FROM category WHERE cat_id='$_GET[categoryid]'";
  $sucess_msg="Category is been deleted";
  $redirect_link_head="Categories.php";
  $delete_sql_class = new Delete_query($sql);
  $delete_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
if (isset($_GET['bookid'])) {
  $sql = "DELETE FROM books WHERE book_id='$_GET[bookid]'";
  $sucess_msg="book  is been deleted";
  $redirect_link_head="Books.php";
  $delete_sql_class = new Delete_query($sql);
  $delete_sql_class->Redirect($sucess_msg, $redirect_link_head);
}
if (isset($_GET['bannerid'])) {
  $sql = "DELETE FROM banner WHERE banner_id='$_GET[bannerid]'";
  $sucess_msg="banner  is been deleted";
  $redirect_link_head="banners.php";
  $delete_sql_class = new Delete_query($sql);
  $delete_sql_class->Redirect($sucess_msg, $redirect_link_head);
}

 ?>
