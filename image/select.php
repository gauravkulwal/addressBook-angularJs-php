<?php 
$con=mysqli_connect("localhost","root","","school");
$sel = mysqli_query($con,"select * from class");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("id"=>$row['id'],"class"=>$row['class'],"rollnumber"=>$row['rollnumber'],"stname"=>$row['stname'],"stfname"=>$row['stfname'],"image"=>$row['image']);
 
}
echo json_encode($data);

?>