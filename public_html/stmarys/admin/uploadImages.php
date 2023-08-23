<?php
// $arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
  
// if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
//     echo "false";
//     return;
// }
  
// if (!file_exists('../images')) {
//     mkdir('../images', 0777);
// }
  
// $filename = time().'_'.$_FILES['file']['name'];
  
// move_uploaded_file($_FILES['file']['tmp_name'], '../images/'.$filename);
  
// echo '../images/'.$filename;




// if (!file_exists('../images')) {
//     mkdir('../images', 0777);
// }
 
// foreach ($_FILES['file']['name'] as $key=>$val) {
//     $filename = uniqid().'_'.$_FILES['file']['name'][$key];
 
//     move_uploaded_file($_FILES['file']['tmp_name'][$key], '../images/'.$filename);
// }
 
// echo "File(s) uploaded successfully.";
// die;



// <?php
// Include the database connection file
error_reporting(E_ALL);             // Report all types of errors
ini_set('display_errors', 1);       // Display errors in the output
ini_set('display_startup_errors', 1); // Display startup errors in the output

include('../../../stmarys_private/db_admin_connection.php');

$conn = OpenCon();

$fileData = '';
if(isset($_FILES['file']['name'][0]))
{
  foreach($_FILES['file']['name'] as $keys => $values)
  {
    $fileName = uniqid().'_'.$_FILES['file']['name'][$keys];
    if(move_uploaded_file($_FILES['file']['tmp_name'][$keys], '../images/' . $fileName))
    
    {
      $fileData .= '<img src="../images/'.$fileName.'" class="thumbnail" />';
      $query = "INSERT INTO imagegal (picture, status)VALUES('".$fileName."','1')";
      mysqli_query($conn, $query);
    }
  }
}
echo $fileData;
?>