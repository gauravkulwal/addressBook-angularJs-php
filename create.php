<?php 
include_once('header.php');
?>

<div class="container-fluid">
  <div class="col-md-3 col-xl-3 col-xs-12 col-sm-12">
<ul class="nav navbar-nav">
    <li class=>
        <a href="create.php">ENTER DETAIL</a>
    </li>
    <li>
        <a href="adminview.php">VIEW</a>
    </li>

</ul>

  </div>
  <div class="col-xl-6 col-md-6 col-xs-12 col-sm-12">
  <div  ng-app="myApp" ng-controller="myController">
        <form action="useradd.php" method="POST" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">Enter Detail</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-xl-3 col-xs-12 col-sm-12">Name</label>
                        <input type="text" id="name" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="name">
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-md-3 col-xl-3 col-xs-12 col-sm-12">Father Name</label>
                        <input type="text" id="fname" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="fname">
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-3 col-xl-3 col-xs-12 col-sm-12">City</label>
                        <input type="text" id="city" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="city">
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-md-3 col-xl-3 col-xs-12 col-sm-12">Mobile</label>
                        <input type="text" id="mobile" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="mobile">
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-3 col-xl-3 col-xs-12 col-sm-12">Image</label>
                        <input type="file" id="image" class="col-md-6 col-xl-6 col-xs-12 col-sm-12" name="image">
                    </div>

                </div>
                <div class="panel-footer ">
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </div>

        </form>
        
    </div>

  </div>
</div>
<?php 
include_once('footer.php');
?>
</body>
</html>



