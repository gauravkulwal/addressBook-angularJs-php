<?php
include_once('header.php');
?>



<div class="container userregistration " style="margin-top:20px;" ng-app="myApp" ng-controller="myController">
<div class="col-xl-8 mx-auto ">
<form action="userregistrationvalidation.php" method=post
      oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>
<!-- <form action="userregistrationvalidation.php" method="POST"> -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">Admin Login</h4>
                </div>

                <div class="panel-body">
                <div class="col-xs-10 col-sm-10 col-md-3 col-xl-3">
                <img src="user1.png" alt="" style="width:200px;height:100px;">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-9 col-xl-9">
                <div class="form-group row">
                    <label for="auname" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">UserName:</label>
                        <input type="text" name="user" required id="auname" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" >
                    </div>
                    <div class="form-group row">
                    <label for="mobile" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">Mobile:</label>
                        <input type="text" name="umobile" required id="mobile" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" >
                    </div>
                    <div class="form-group row">
                    <label for="upassword" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">Password:</label>
                        <input type="password" required id="upassword" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="up">
                    </div>
                    <div class="form-group row">
                    <label for="ucpassword" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">Confirm Password:</label>
                        <input type="password" required id="ucpassword" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="up2">

                       
                    </div>
                </div>
                <div class="text-center">

                <input type="checkbox" onclick="myFunction()" >Show Password
                </div>

                    
                </div>
                <div class="panel-footer ">
                    <a href="userlogin.php">Already a User:</a>
                    <div class="text-right">

                    <button type="submit" name="usersubmit" class="btn btn-primary" >Login</button>
                    </div>

                </div>
            </div>
        
        
        </form>
</div>
        

     
    </div>
    
    <script>
function myFunction() {
  var x = document.getElementById("ucpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>






<?php
include_once('footer.php');

?>
