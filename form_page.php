<?php session_start();
    require_once('conn.php');
   

      if(isset($_POST['send'])){
    $test_name=$_POST['test_name'];
    $test_cost=$_POST['test_cost'];


    
    if(empty($test_name)||(empty($test_cost))){
      echo"<script>window.alert('please fill up the required fields!!')</script>";
      exit();
      }
    else{ 
    $insert="INSERT INTO lab_test(test_name,test_cost)VALUES('$test_name','$test_cost')";
    $qry=mysqli_query($conn,$insert);
    if($qry){
       header('Location: report.php');
      }
      else{
         echo"window.alert('Product insert Failed!!')";
        }
    }
  }
//}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    

    <title>Test</title>
  </head>
  <body>
    <div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Add Test</strong>
            </div>
            <div class="col-sm-3">
                <a href="report.php" class="amar_btn"> <i class="fa fa-plus-square"></i> View Report</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Test Name<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="test_name" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Test Cost<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="test_cost" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                    <input type="submit" name="send" class="btn btn-default" value="SEND">
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            .
          </div>
        </div>
    </div>
</div>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>