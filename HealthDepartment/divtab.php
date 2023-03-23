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
  <button class="tablinks" onclick="openCity(event, '201')">UPLOADED FILES</button>
  <button class="tablinks" onclick="openCity(event, 'reports')">GENERATE REPORTS</button>
</div>

<!--dito start ng ListOfEmployees -->
 <link rel="stylesheet" type="text/css" href="reccomendation.css">
<div id="ListofEmployees" class="tabcontent">

       <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
          <thead>
              <tr>
                <th class="blk">  EMPLOYEE ID </th>
                  <th class="blk">  NAME  </th> 
                  <th class="blk">  ADDRESS  </th>
                  <th class="blk">  POSITION </th>
                  <th class="blk">  ACTION</th>
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
                <td><?php echo $row['Position']?></td>
                <td><a class="button" value="view">VIEW</a></td>
              </tr>
              <?php }?>
              
          </table>


</div>

<!--dito end ng list of employee -->      

<!--dito ang monitoring -->
<div id="Monitoring" class="tabcontent">
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
 <link rel="stylesheet" type="text/css" href="reccomendation.css">
<form>
 <div class="content">
<div class="box">
    <td><a class="button" href="#popup1">View appraisal</a></td>
    <td><a class="button" href="#popup1">Add Recommendation</a></td>
</div>
     <div id="popup1" class="overlay">
            <div class="popup"><a class="close" href="#">×</a>
                            <label for="recco">Reccomendation</label>
                <input type="submit" id="submit" name="submit" class="open" style="float:right;">

              </div>
            </div>
        </div>
                  
              </tr>
              <?php }?>
              
          </table>
</div>

<!--dito end ng monitoring -->

<!--dito start ng 201 -->
 <link rel="stylesheet" type="text/css" href="reccomendation.css">
<div id="201" class="tabcontent">
     <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
          <thead>
              <tr>
                <th class="blk">Employee ID</th>
                  <th class="blk">NAME</th>
                  <th class="blk">ADDRESS</th>
                  <th class="blk">POSITION</th>
                  <th class="blk">Action</th>
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
                <td><?php echo $row['Position']?></td>
                <td><a class="button" href="">UPLOADED FILES</a></td>
              </tr>
              <?php }?>
              
          </table>




</table>
</div>
<!--dito ang end ng end ng 201 -->

<!--dito ang start ng generate reports -->
    <div id="reports" class="tabcontent">
     <?php
          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM emp_info");
        ?>
          <table class="table table-bordered">  
          <thead>
            <tr>
              <th><select name="contra" id="id" class="button" style="color:black;">
                <option value="">EMPLOYMENT STATUS</option>
                <option value="permanent">PERMANENT</option>
                <option value="contract">CONTRACTUAL</option>
                 </select></th>
                    <th><select name="contra" id="id" class="button" style="color:black;">
                <option value="">POSITION</option>
                <option value="permanent">DOCTOR</option>
                <option value="contract">ENCODER</option>
                <option value="contract">NURSE</option>
              </select>
                </tr><tr>   
                <th class="blk">Employee ID</th>
                  <th class="blk">NAME</th>
                  <th class="blk">POSITION</th>
                  <th class="blk">STATUS</th>
                  <th class="blk">SSS</th>

              </tr>
          </thead>
              <tr>
                <?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <td><?php echo $row['EmployeeID']?></td>
                <td><?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?></td>
                <td><?php echo $row['Position']?></td>

              </tr>
              <?php }?>
              
          </table>
    </div>
<!--dito ang end ng generate reports  -->

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