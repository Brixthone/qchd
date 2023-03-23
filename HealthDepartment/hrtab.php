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
  <button class="tablinks" onclick="openCity(event, 'Monitoring')">ADD EMPLOYEE</button>
    <button class="tablinks" onclick="openCity(event, 'requirements')">REQUIREMENTS</button>
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
                <td>&nbsp &nbsp <a href="print.php" class="button" value="view">VIEW</a> &nbsp &nbsp  </td>
              </tr>
              <?php
               }
              ?>
              
          </table>


</div>

<!--dito end ng list of employee -->      
<!-- Start of Requirements-->
<div id="requirements" class="tabcontent">

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
                <td>&nbsp &nbsp <a href="other201.php" class="button" value="view">View Submitted files</a> &nbsp &nbsp  </td>
              </tr>

              <?php
               }
              ?>
          </table>
</div>
<!--dito ang monitoring -->
<div id="Monitoring" class="tabcontent">
  <?php

   include('connection.php');

  if (isset($_POST['submit'])){

        
        $EmployeeID = $_POST['EmployeeID'];
        $Firstname = $_POST['Firstname'];
        $Middlename = $_POST['Middlename'];
        $Lastname = $_POST['Lastname'];
        $Suffix= $_POST['Suffix'];
        $Age = $_POST['Age'];
        $Gender = $_POST['Gender'];
        $Emailaddress  = $_POST['Emailaddress'];
        $phonenumber =     $_POST['phonenumber'];
        $Address =     $_POST['Address'];
        $assignHC =     $_POST['assignHC'];
  

 if(!empty($Firstname) && !empty($Lastname))
        {
            

          //validation so no name duplication
          $query = "SELECT * FROM tbl_addemp WHERE Firstname = '$Firstname' and Lastname = 'Lastname'";
          
          $result = mysqli_query($con,$query);



          if(mysqli_num_rows($result) == 0)
          {
            //save to database
          $query = "INSERT INTO tbl_addemp(`EmployeeID`, `Firstname`, `Middlename`, `Lastname`, `Suffix`, `Age`, `Gender`, `Emailaddress`, `phonenumber`, `Address`, `assignHC`) VALUES 
          ('$EmployeeID','$Firstname', '$Middlename','$Lastname','$Suffix','$Age','$Gender','$Emailaddress','$phonenumber','$Address','$assignHC')";
 
            
            mysqli_query($con,$query);
            echo"<script>alert('Successfull')</script>";
          
      } }   else{
            echo"<script>alert('Denied')</script>";
            }
}
                
                ?>

<html>
<link rel="stylesheet" href="crts.css">
<body>
<form action="hrtab.php" method="post">
<div class="wrapper">
    <div class="title">
      ADD EMPLOYEE
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Employee ID</label>
          <input type="text" class="input" name="EmployeeID" required>
       </div>  

       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="Firstname" required>
       </div>  
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name="Middlename" required >
       </div>  
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="Lastname" required>
       </div> 
              <div class="inputfield">
          <label>Suffix</label>
          <input type="text" class="input" name="Suffix">
       </div> 
       <div class="inputfield">
          <label>Age</label>
          <input type="text" class="input" name="Age">
       </div>   
        <div class="inputfield">
          <label for="Gender">Gender</label>
          <div class="custom_select">
            <select name="Gender" id="Gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="Emailaddress" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phonenumber"required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="Address" required></textarea>
       </div>

<div class="inputfield">
          <label for="assignHC"></label>
          <div class="custom_select">
          <select id="Districts" name="assignHC" >
              <option value="District1">District  1</option>
              <option value="PROJECT 6 HEALTH CENTER">PROJECT 6 HEALTH CENTER</option>
              <option value="PROJECT 6 ANIMAL BITE TREATMENT CENTER">PROJECT 6 ANIMAL BITE TREATMENT CENTER</option>
              <option value="TORO HILLS HEALTH CENTER">TORO HILLS HEALTH CENTER</option>
              <option value="BAGO BANTAY HEALTH CENTER">BAGO BANTAY HEALTH CENTER</option>
              <option value="BAGONG PAG ASA HEALTH CENTER">BAGONG PAG ASA HEALTH CENTER</option>
              <option value="PROJECT 7 HEALTH CENTER">PROJECT 7 HEALTH CENTER</option>
              <option value="PROJECT 7 SOCIAL HYGIENE CLINIC">PROJECT 7 SOCIAL HYGIENE CLINIC</option>
              <option value="KLINIKA PROJECT 7">KLINIKA PROJECT 7</option>
              <option value="SAN FRANCISCO SUPER HEALTH CENTER">SAN FRANCISCO SUPER HEALTH CENTER</option>
              <option value="SAN FRANCISCO LYING IN CLINIC">SAN FRANCISCO LYING IN CLINIC</option>
              <option value="SAN ANTONIO HEALTH CENTER">SAN ANTONIO HEALTH CENTER</option>
              <option value="PALTOK HEALTH CENTER">PALTOK HEALTH CENTER</option>
              <option value="MASAMBONG HEALTH CENTER">MASAMBONG HEALTH CENTER</option>
              <option value="LA LOMA HEALTH CENTER">LA LOMA HEALTH CENTER</option>
              <option value="MERCEDES DE JOYA HEALTH CENTER">MERCEDES DE JOYA HEALTH CENTER</option>
              <option value="SAN JOSE HEALTH CENTER">SAN JOSE HEALTH CENTER</option>
              <!--District 2 -->
              <option value="District2">District 2</option>
              <option value="BATASAN SUPER HEALTH CENTER">BATASAN SUPER HEALTH CENTER</option>
              <option value="BATASAN LYING IN CLINIC">BATASAN LYING IN CLINIC</option>
              <option value="BATASAN SOCIAL HYGIENE CLINIC">BATASAN SOCIAL HYGIENE CLINIC</option>
              <option value="KLINIKA BATASAN">KLINIKA BATASAN</option>
              <option value="BATASAN ANNEX HEALTH CENTER">BATASAN ANNEX HEALTH CENTER</option>
              <option value="PAYATAS A HEALTH CENTER">PAYATAS A HEALTH CENTER</option>
              <option value="PAYATAS B HEALTH CENTER">PAYATAS B HEALTH CENTER</option>
              <option value="PAYATAS SUPER HEALTH CENTER">PAYATAS SUPER HEALTH CENTER</option>
              <option value="PAYATAS LYING IN CLINIC">PAYATAS LYING IN CLINIC</option>
              <option value="DONA NICASIA HEALTH CENTER">DONA NICASIA HEALTH CENTER</option>
              <option value="BAGONG SILANGAN HEALTH CENTER">BAGONG SILANGAN HEALTH CENTER</option>
              <option value="BAGONG SILANGAN LYING IN CLINIC">BAGONG SILANGAN LYING IN CLINIC</option>
              <option value="COMMONWEALTH HEALTH CENTER">COMMONWEALTH HEALTH CENTER</option>
              <option value="HOLY SPIRIT HEALTH CENTER">HOLY SPIRIT HEALTH CENTER</option>
              <option value="VETERANS HEALTH CENTER">VETERANS HEALTH CENTER</option>
              <option value="BETTY GO BELMONTE SUPER HEALTH CENTER">BETTY GO BELMONTE SUPER HEALTH CENTER</option>
              <option value="BETTY GO BELMONTE LYING IN CLINIC">BETTY GO BELMONTE LYING IN CLINIC</option>
              <option value="NGC HEALTH CENTER">NGC HEALTH CENTER</option>
              <option value="NGC LYING IN CLINIC">NGC LYING IN CLINIC</option>
              <!-- District 3-->
<option value="District3">District3</option>
<option value="MURPHY SUPER HEALTH CENTER">MURPHY SUPER HEALTH CENTER</option>
<option value="MURPHY LYING IN CLINIC">MURPHY LYING IN CLINIC</option>
<option value="E RODRIGUEZ HEALTH CENTER">E RODRIGUEZ HEALTH CENTER</option>
<option value="ERMIN GARCIA HEALTH CENTER">ERMIN GARCIA HEALTH CENTER</option>
<option value="PROJECT 4 HEALTH CENTER">PROJECT 4 HEALTH CENTER</option>
<option value="ESCOPA HEALTH CENTER">ESCOPA HEALTH CENTER</option>
<option value="SOCORRO HEALTH CENTER">SOCORRO HEALTH CENTER</option>
<option value="SOCORRO ANIMAL BITE TREATMENT CENTER">SOCORRO ANIMAL BITE TREATMENT CENTER</option>
<option value="LIBIS HEALTH CENTER">LIBIS HEALTH CENTER</option>
<option value="PANSOL HEALTH CENTER">PANSOL HEALTH CENTER</option>
              <!--District 4 -->
<option value="District4">District 4</option>
<option value="KAMUNING SUPER HEALTH CENTER">KAMUNING SUPER HEALTH CENTER</option>
<option value="KAMUNING LYING IN CLINIC">KAMUNING LYING IN CLINIC</option>
<option value="CUBAO HEALTH CENTER">CUBAO HEALTH CENTER</option>
<option value="PINYAHAN HEALTH CENTER">PINYAHAN HEALTH CENTER</option>
<option value="SAN VICENTE HEALTH CENTER">SAN VICENTE HEALTH CENTER</option>
<option value="KRUS NA LIGAS HEALTH CENTER">KRUS NA LIGAS HEALTH CENTER</option>
<option value="BERNARDO HEALTH CENTER">BERNARDO HEALTH CENTER</option>
<option value="BERNARDO SOCIAL HYGIENE CLINIC">BERNARDO SOCIAL HYGIENE CLINIC</option>
<option value="KLINIKA BERNARDO">KLINIKA BERNARDO</option>
<option value="TATALON HEALTH CENTER">TATALON HEALTH CENTER</option>
<option value="TATALON ANIMAL BITE TREATMENT CENTER">TATALON ANIMAL BITE TREATMENT CENTER</option>
<option value="GALAS HEALTH CENTER">GALAS HEALTH CENTER</option>
<option value="KALAYAAN HEALTH CENTER">KALAYAAN HEALTH CENTER</option>
<option value="GENERAL ROXAS HEALTH CENTER">GENERAL ROXAS HEALTH CENTER</option>
              <!--District 5 -->
<option value="District5">District 5</option>
<option value="ARSENIA MAXIMO SUPER HEALTH CENTER">ARSENIA MAXIMO SUPER HEALTH CENTER</option>
<option value="NOVALICHES LYING IN CLINIC">NOVALICHES LYING IN CLINIC</option>
<option value="ARSENIA MAXIMO SOCIAL HYGIENE CLINIC">ARSENIA MAXIMO SOCIAL HYGIENE CLINIC</option>
<option value="KLINIKA NOVALICHES">KLINIKA NOVALICHES</option>
<option value="BAGBAG HEALTH CENTER">BAGBAG HEALTH CENTER</option>
<option value="SAN BARTOLOME HEALTH CENTER">SAN BARTOLOME HEALTH CENTER</option>
<option value="GULOD HEALTH CENTER">GULOD HEALTH CENTER</option>
<option value="CAPRI HEALTH CENTER">CAPRI HEALTH CENTER</option>
<option value="NAGKAISANG NAYON HEALTH CENTER">NAGKAISANG NAYON HEALTH CENTER</option>
<option value="KALIGAYAHAN HEALTH CENTER">KALIGAYAHAN HEALTH CENTER</option>
<option value="KALIGAYAHAN ANIMAL BITE TREATMENT CENTER">KALIGAYAHAN ANIMAL BITE TREATMENT CENTER</option>
<option value="MALIGAYA HEALTH CENTER">MALIGAYA HEALTH CENTER</option>
<option value="GREATER LAGRO HEALTH CENTER">GREATER LAGRO HEALTH CENTER</option>
<option value="FAIRVIEW HEALTH CENTER">FAIRVIEW HEALTH CENTER</option>
<option value="NORTH FAIRVIEW HEALTH CENTTER">NORTH FAIRVIEW HEALTH CENTTER</option>
<option value="STA LUCIA SUPER HEALTH CENTER">STA LUCIA SUPER HEALTH CENTER</option>
<option value="STA LCUIA LYING IN CLINIC">STA LCUIA LYING IN CLINIC</option>
<!--District 6 -->
<option value="District6">District 6</option>
<option value="BANLAT HEALTH CENTER">BANLAT HEALTH CENTER</option>
<option value="WENCESLAO DELA PAZ HEALTH CENTER">WENCESLAO DELA PAZ HEALTH CENTER</option>
<option value="MH PEDRO HEALTH CENTER">MH PEDRO HEALTH CENTER</option>
<option value="MELCHORA AQUINO HEALTH CENTER">MELCHORA AQUINO HEALTH CENTER</option>
<option value="MELCHORA AQUINO ANIMAL BITE TREATMENT CENTER">MELCHORA AQUINO ANIMAL BITE TREATMENT CENTER</option>
<option value="SAUYO HEALTH CENTER">SAUYO HEALTH CENTER</option>
<option value="TALIPAPA HEALTH CENTER">TALIPAPA HEALTH CENTER</option>
<option value="SANGANDAAN HEALTH CENTER">SANGANDAAN HEALTH CENTER</option>
<option value="BAESA HEALTH CENTER<">BAESA HEALTH CENTER</option>
<option value="APOLONIO SAMSON HEALTH CENTER">APOLONIO SAMSON HEALTH CENTER</option>

            </select>
          </div>
       </div> 
      <div class="inputfield">
        <input type="submit" name="submit"  class="btn">
      </div>
</div>
</div>
</body>
</html>


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