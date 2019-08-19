<?php

$con=mysqli_connect("localhost","root","","addressbook");

if(isset($_POST['submit'])){

    if($con){

       if(!empty($_POST['name'])&& !empty($_POST['fname'])&&!empty($_POST['mobile'])&& !empty($_POST['city']))
       {
         $name=$_POST['name'];
         $fname=$_POST['fname'];
         $city=$_POST['city'];
         $mobile=$_POST['mobile'];
         
         
      #   $image=addslashes(file_get_contents($_FILES['st_image']["tmp_name"]));
      $file=$_FILES['image'];
      //   print_r($file);
        // print_r($username);  
         $filename=$file['name'];
         $filetemp=$file['tmp_name'];
         $fileext=explode('.',$filename);
         $fileextlower=strtolower(end($fileext));
         $fileextarray=['jpg','png','jpeg'];
         if(in_array($fileextlower  ,$fileextarray)){
         
         $imagefolder='image/'.$filename;
         move_uploaded_file($filetemp, $imagefolder);
         $chopname=preg_replace('/\s+/', '', $name);
         $q="INSERT INTO `useradd`( `name`, `father`, `mobile`, `city`, `image`) VALUES ('$name','$fname','$mobile','$city','$imagefolder')";
        
          $result=mysqli_query($con, $q);
          if($result){
      
          
 header('location:create.php');
       }
       else{
           echo 'sorry';
       }

    }
    else
    {
        echo "try ";
    }
}




}
}
?>