<?php
session_start();
 ?>
<?php
function Status_Changer()
{
  require_once($_SERVER['DOCUMENT_ROOT'] . '/book_request/assets/include_Files/sql.php');
  $sql = "UPDATE admin_login SET status='offline' WHERE admin_id='$_SESSION[id]'";

  if ($conn->query($sql) === TRUE) {
    //  echo "Record updated successfully";

  } else {
      //echo "Error updating record: " . $conn->error;
  }
}
Status_Changer();
session_destroy();
   header('location:index.php');
 ?>
