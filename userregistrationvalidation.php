<?php 
$user=$_POST['user'];
$password=$_POST['up'];
$mobile=$_POST['umobile'];
$con=mysqli_connect('localhost','root','','addressbook');
if($con){
    if(isset($_POST['usersubmit'])){
       $q="INSERT INTO `userlogin`( `username`, `password`, `mobile`) VALUES ('$user','$password','$mobile')";
    $result=mysqli_query($con,$q);
    
    
    
    }
    else{


    }

}


?>