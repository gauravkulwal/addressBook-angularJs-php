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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="footer.css">
</head>
<body style="background: linear-gradient(to right, #e96443, #904e95); ">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="icon.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav ">
    <li class="nav-item">
      <a class="nav-link text-white " href="adminlogin.php">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="userregistration.php">User</a>
    </li>
    <li class="nav-item">
    <a href="logout.php" class="nav-link text-white float-right">Logout</a>
    </li>
 
  </ul>
</nav>

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