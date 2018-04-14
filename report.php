<?php session_start();
    require_once('conn.php');
    require_once('function/function.php');
    //$id=$_GET['v'];
    $sel="select * from lab_test";
    $qry=mysqli_query($conn,$sel);
    $data=mysqli_fetch_array($qry);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    <title>Report</title>
  </head>
  <body>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Test Information</strong>
            </div>
            <div class="col-sm-3">
                <a href="form_page.php" class="amar_btn"> <i class="fa fa-plus-square"></i> Add Test</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
          <!-- <form method="get" action="search-user.php">
          <input type="text" placeholder="search" name="search" />
          <input type="submit" value="search" /> 
          </form> -->
            <table class="table table-striped table-responsive table-hover amar_table">
            <thead>
                <tr>
                    <th>Test ID</th>
                    <th>Test Name</th>
                    <th>Test Cost</th>
                    <!-- <th>Report</th>
                    <th>Date</th>
                    <th>Biography</th> -->
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    $sel="select * from lab_test";
                    $qry=mysqli_query($conn,$sel);
                    while($data=mysqli_fetch_array($qry)){
                ?>
                <tr>
                    <td><?=$data['lab_id'];?></td>
                    <td><?=$data['test_name'];?></td>
                    <td><?=$data['test_cost'];?></td>
                   <!--  <td>shb@mail.com</td>
                    <td>12/2/2018</td>
                    <td>Carter</td> -->
                        <td>
                            <a href="#" title="View"><i class="fa fa-plus-square"></i></a>
                            <a href="#" title="Edit"><i class="fa fa-pencil-square"></i></a>
                            <a href="#" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                </tr>
                
                <?php
                    }
                  ?>
               
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>


<script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>