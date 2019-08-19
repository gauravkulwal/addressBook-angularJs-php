<?php 
session_start();
$user=$_POST['uname'];
$password=$_POST['apass'];
$con=mysqli_connect('localhost','root','','addressbook');

$q="Select * from userlogin where `username`='$user' && `password`='$password' ";
$sel=mysqli_query($con,$q);
$row=mysqli_num_rows($sel);
if($row==0){
    header('location:userlogin.php');
 
}
else{
    $result=mysqli_fetch_array($sel);
$name= $result['username'];
   
}


?>
<?php 
include_once('header.php');
?>

<div class="container-fluid">
  
  <div class="col-md-3 col-xl-3 col-xs-12 col-sm-12 text-white font-weight-bold display-4">
<?php
echo "Hello ".$name;
?>

  </div>
  <div ng-app="myApp" ng-controller="customersCtrl" class="col-md-8 col-xl-8 col-xs-12 col-sm-12">
<table>
<tr>
<td>

Search:
<input type=text ng-model="search.name"></<input>
</td>
<td>

</td>
<td class="pl-5">

City
<input type=text ng-model="search.city"></<input>

</td>
</tr>


</table>
<br>
<div class="panel panel-primary" ng-repeat="x in names |filter:search">
<div class="panel-heading">
<h3 class="panel-title text-center">{{x.name}}</h3>
</div>
<div class="row panel-body">
<div class="col xl-4 col-lg-4 col-xs-12 col-sm-12">
<img class="img-fluid" ng-src="{{x.image}}" alt="" style="width:100px;height:100px;">
</div>
<div class="col xl-6 col-lg-6 col-xs-12 col-sm-12">
<div class="row">
<div class="col xl-2 col-lg-2 col-xs-12 col-sm-12">
Name:
</div>
<div class="col xl-6 col-lg-6 col-xs-12 col-sm-12">
{{x.name}}
</div>
</div>
<div class="row">
<div class="col xl-2 col-lg-2 col-xs-12 col-sm-12">
Father:
</div>
<div class="col xl-6 col-lg-6 col-xs-12 col-sm-12">
{{x.father}}
</div>
</div>

<div class="row">
<div class="col xl-2 col-lg-2 col-xs-12 col-sm-12">
City:
</div>
<div class="col xl-6 col-lg-6 col-xs-12 col-sm-12">
{{x.city}}
</div>
</div>

<div class="row">
<div class="col xl-2 col-lg-2 col-xs-12 col-sm-12">
Mobile:
</div>
<div class="col xl-6 col-lg-6 col-xs-12 col-sm-12">
{{x.mobile}}
</div>
</div>




</div>







</div>
<div class="panel-footer text-center">
@gauravkulwal
</div>
</div>



























 
</div>
</div>

<?php 
include_once('footer.php');
?>
</body>
<script>
    var app = angular.module('myApp', []);

app.controller('customersCtrl', ['$scope', '$http', function ($scope, $http) {
 $http({
  method: 'get',
  url: 'select.php'
 }).then(function successCallback(response) {
  
  $scope.names = response.data;
 });
 
 $scope.remove = function(index,id){
 
 $http({
  method: 'post',
  url: 'delete.php',
  data: {id:id},
 }).then(function successCallback(response) {
  $scope.names.splice(index, 1);
 }); 
}
}


]);

</script>
</html>