<?php 
    require_once('conn.php');
    require_once('function/function.php');
    //$id=$_GET['v'];
    $sel="select * from booked_test";
    $qry=mysqli_query($conn,$sel);
    $data=mysqli_fetch_array($qry);
?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    <title>Report</title>
  </head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="tableExport/tableExport.js" ></script>
<script type="text/javascript" src="tableExport/jquery.base64.js" > </script>
<!--for png-->
<script type="text/javascript" src="tableExport/html2canvas.js" ></script>
<!--for pdf-->
<script type="text/javascript" src="tableExport/jspdf/libs/sprintf.js" ></script>
<script type="text/javascript" src="tableExport/jspdf/jspdf.js" ></script>
<script type="text/javascript" src="tableExport/jspdf/libs/base64.js" ></script>

<script type="text/javascript">
  $(document).ready(function (e) {

    $("#pdf").click(function (e) {

      $("#myTable").tableExport({
        type: 'pdf',
        escape: 'false'
      });

    });
 $("#png").click(function (e) {

      $("#myTable").tableExport({
        type: 'png',
        escape: 'false'
      });

    });

  });
  

</script>
  <body>
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="col-sm-9">
                  <strong> Test details</strong>
              </div>
              <div class="col-sm-3">
                  <a href="doctorlist.php" class="amar_btn"> <i class="fa fa-plus-square"></i></a> All Doctors
              </div>

              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table id='myTable' class="table table-striped table-responsive table-hover amar_table">

                 			<tr>
                          <td>Patient Name</td>
                          <td>:</td>
                          <td><?=$data['name'];?></td>
                          </tr>
                          <tr>
                          <td>Patient Email</td>
                          <td>:</td>
                          <td><?=$data['email'];?></td>
                     		</tr>
                          <tr>
                          <td>Appointment Date</td>
                          <td>:</td>
                          <td><?=$data['b_date'];?></td>
                     		</tr>
                          <tr>
                          <td>Time Slot</td>
                          <td>:</td>
                          <td><?=$data['slot'];?></td>
                     		</tr>

              </table>
              
              </div>
              <div class="col-md-2"></div>
              <div class="clr"></div>

            </div>
            <div class="panel-footer">
              <button id="pdf" type="button" class="btn btn-primary">
                Export as PDF <span class="badge badge-light"></span>
              </button> <br> <br>

               <button id="png" type="button" class="btn btn-success">
                Export as PNG <span class="badge badge-success"></span>
              </button>
              
              
            </div>
          </div>
      </div>
  </div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>
