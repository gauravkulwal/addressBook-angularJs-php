<?php  
session_start();
 $conn = mysqli_connect("localhost", "root", "", "school");  
 $info = json_decode(file_get_contents("php://input"));  
 
 
 if(count($info) > 0) {  
    $id = $info->id;  
    $query = "DELETE FROM class WHERE id='$id'";  
    if(mysqli_query($conn, $query)) {  
         echo 'You data has successfully been deleted..';  
    } else {  
         echo 'Failed';  
    }  
}  
  
 ?>