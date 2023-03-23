<?php      
session_start();

    include('connection.php');  


   
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial;
color:white;
font-size:20px;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
   background:white;
   border-radius: 30px;
}

/* Style the buttons inside the tab */
.tab button {
  background:transparent;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 20px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 9px 15px;
  border: 1px solid #ccc;
  border-top: none;
}
table, tr,td{
border:0px solid black ;
background-color: #4094fd;
font-size: 20px;
}
.txtbx
{
  width: 200px;
} 
textarea
{
  resize:none;
}
.blk{
  
  background-color: black;
  font-size:20px;
}
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'ListofEmployees')" id="defaultOpen">     LIST OF EMPLOYEE   </button>
  <button class="tablinks" onclick="openCity(event, 'Monitoring')">MONITORING</button>
  <button class="tablinks" onclick="openCity(event, '201')">201 FILES</button>
  <button class="tablinks" onclick="openCity(event, 'reports')">GENERATE REPORTS</button>
  <button class="tablinks" onclick="openCity(event, 'Training')">TRAINING</button>
</div>

<!--dito start ng ListOfEmployees -->
  <link rel="stylesheet" type="text/css" href="reccomendation.css">
<div id="ListofEmployees" class="tabcontent">

       <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM tbl_addemp");
        ?>
          <table class="table table-bordered">  
          <thead>
              <tr>
                <th class="blk">  EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  ADDRESS  </th>
                  <th class="blk">  ACTION &nbsp &nbsp &nbsp &nbsp</th>
              </tr>
          </thead>
              <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                <td><?php echo $row['Address']?></td>
                <td>&nbsp &nbsp <a href="print.php" class="button" value="view">VIEW</a> &nbsp &nbsp  
              </tr>
              <?php
               }
              ?>
              
          </table>

</div>

<!--dito end ng list of employee --> 
  <!--Start of Monitoring -->
<div id="Monitoring" class="tabcontent">

       <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM tbl_addemp");
        ?>
          <table class="table table-bordered">  
          <thead>
              <tr>
                <th class="blk">  EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  ADDRESS  </th>
                  <th class="blk" colspan="2">  ACTION &nbsp &nbsp &nbsp &nbsp</th>
              </tr>
          </thead>
              <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                <td><?php echo $row['Address']?></td>
            <div class="content">
<div class="box">
    <td><a class="button" href="#popup1">View appraisal</a></td>
</html>
    <td><a class="button" href="#popup1">View Recommendation</h2></a></td>
</div>

<form>
     <div id="popup1" class="overlay">
            <div class="popup">
              <h2><input type="text" style="width: 350px;height: 200px;" id ="good" name="good" readonly> <br></h2>
                <a class="close" href="#">×</a>
                <input type="button" value="Accept" name="accept" class="open" style="float:right;">
                <input type="button" value="Reject" name="reject" class="open">
              </div>
            </div>
        </div>
                  </form>
              </tr>
              <?php }?>
              
          </table>
</div>
<!--Start of 201 Files-->
     <div id="201" class="tabcontent">
  <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
                   <thead>
              <tr>
                <th class="blk"> EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  POSITION </th>
                  <th class="blk" colspan="2">  ACTION</th>
              </tr>
          </thead>
          <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']." " ?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                  <td><?php echo $row['Position']?></td>
                 <td>&nbsp &nbsp <a href="scanned201.php" class="button" value="view">Scanned 201 Files</a></td>
                 <td>&nbsp &nbsp <a href="other201.php" class="button" value="view">Other Files</a></td>
</tr>
  <?php }?>
</table>
</div>
<!--End-->
<!-- Start Generate Reports-->
 <div id="reports" class="tabcontent">
  <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
                   <thead>
              <tr>
                <th class="blk"> EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  POSITION </th>
                  <th class="blk" colspan="2">  ACTION</th>
              </tr>
          </thead>
          <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']." " ?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                  <td><?php echo $row['Position']?></td>
                 <td>&nbsp &nbsp <a href="reports.php" class="button" value="view">View Uploaded Files </a></td>
</tr>
  <?php }?>
</table>
</div>

     <div id="201" class="tabcontent">
  <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
                   <thead>
              <tr>
                <th class="blk"> EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  POSITION </th>
                  <th class="blk" colspan="2">  ACTION</th>
              </tr>
          </thead>
          <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']." " ?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                  <td><?php echo $row['Position']?></td>
                 <td>&nbsp &nbsp <a href="scanned201.php" class="button" value="view">Scanned 201 Files</a></td>
                 <td>&nbsp &nbsp <a href="other201.php" class="button" value="view">Other Files</a></td>
</tr>
  <?php }?>
</table>
</div>
<!--End-->
<!-- Start Generate Reports-->
 <div id="Training" class="tabcontent">
  <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
                   <thead>
              <tr
>                <th class="blk"> EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  POSITION </th>
                  <th class="blk" colspan="2">  ACTION</th>
              </tr>
          </thead>
          <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']." " ?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                  <td><?php echo $row['Position']?></td>
                 <td>&nbsp &nbsp <a href="trainings.php" class="button" value="view">View Trainings </a></td>
</tr>
  <?php }?>
</table>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 