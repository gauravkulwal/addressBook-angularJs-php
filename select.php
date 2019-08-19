<?php 
$con=mysqli_connect('localhost','root','','addressbook');
$sel=mysqli_query( $con,"SELECT * from useradd");
$data=array();
while($row=mysqli_fetch_array($sel)){
 $data[]=array("name"=>$row['name'],"father"=>$row['father'],"mobile"=>$row['mobile'],"city"=>$row['city'],"image"=>$row['image']);

}
echo json_encode($data);
?>