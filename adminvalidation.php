<?php 
if(isset($_POST['adminsubmit'])){
    if($_POST['adminuser']=="admin" && $_POST['adminpassword']=="admin123"){
        header('location:adminview.php');
        session_start();
        echo  "right";
        
    }
 else {
    print 'incorrect username or password.';
}   
    
    }


?>