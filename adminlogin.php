<?php
include_once('header.php');
?>

<div class="container " style="margin-top:20px" ng-app="myApp" ng-controller="myController">
        <form action="adminvalidation.php" method="POST" >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">Admin Login</h4>
                </div>

                <div class="panel-body">
                <div class="col-xs-10 col-sm-10 col-md-3 col-xl-3">
                <img src="admin.gif" alt="" style="width:200px;height:100px;">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-9 col-xl-9">
                <div class="form-group row">
                    <label for="auname" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">UserName:</label>
                        <input type="text" name="adminuser" required id="auname" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" >
                    </div>
                    <div class="form-group row">
                    <label for="apassword" class="col-md-3 col-xl-3 col-xs-10 col-sm-10">Password</label>
                        <input type="text" required id="apassword" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="adminpassword">
                    </div>
                </div>
                   
                    
                </div>
                <div class="panel-footer ">
                    <div class="text-right">
                    <button type="submit" name="adminsubmit" class="btn btn-primary">Login</button>
                    </div>

                </div>
            </div>
        
        
        </form>
     
    </div>


 
<?php 
include_once('footer.php');
?>
