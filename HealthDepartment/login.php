<?php
session_start();
include("connection.php");

if(isset($_POST['login']))
{
    if(isset($_SESSION['EmployeeID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $EmployeeID = $_SESSION['EmployeeID'];

        $result = mysqli_query($con,"SELECT * FROM emp_info WHERE username='$username' and password = '$password' and EmployeeID = '$EmployeeID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['EmployeeID'] = $row['EmployeeID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Address'] = $row['Address'];
            $_SESSION['password'] = $row['password'];
   

            if(isset($_SESSION['EmployeeID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:employeepage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }   else 
            {
             echo  '<script>alert("Invalid Username or Password!")</script>';
             
            }
    }

}

if(isset($_POST['login']))
{
    if(isset($_SESSION['adminID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $adminID = $_SESSION['adminID'];
        
        $result = mysqli_query($con,"SELECT * FROM tbl_useraccounts WHERE username='$username' and password = '$password' and adminID = '$adminID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['adminID'] = $row['adminID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Address'] = $row['Address'];
   

            if(isset($_SESSION['adminID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:adminpage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }   
    }

}
if(isset($_POST['login']))
{
    if(isset($_SESSION['facilityheadID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $facilityheadID = $_SESSION['facilityheadID'];
        
        $result = mysqli_query($con,"SELECT * FROM tbl_facilityhead WHERE username='$username' and password = '$password' and facilityheadID = '$facilityheadID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['facilityheadID'] = $row['facilityheadID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Suffix'] = $row['Suffix'];
   

            if(isset($_SESSION['facilityheadID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:Facilitypage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }   
    }

}
if(isset($_POST['login']))
{
    if(isset($_SESSION['HrID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $HrID = $_SESSION['HrID'];
        
        $result = mysqli_query($con,"SELECT * FROM hr WHERE username='$username' and password = '$password' and HrID = '$HrID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['HrID'] = $row['HrID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Suffix'] = $row['Suffix'];
   

            if(isset($_SESSION['HrID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:hrpage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }  
    }

}

if(isset($_POST['login']))
{
    if(isset($_SESSION['DivisionID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $DivisionID = $_SESSION['DivisionID'];
        
        $result = mysqli_query($con,"SELECT * FROM division WHERE username='$username' and password = '$password' and DivisionID = '$DivisionID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['DivisionID'] = $row['DivisionID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Address'] = $row['Address'];
            $_SESSION['password'] = $row['password'];
   

            if(isset($_SESSION['DivisionID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:divisionheadpage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }   else 
            {
             echo  '<script>alert("Invalid Username or Password!")</script>';
             
            }
    }

}

if(isset($_POST['login']))
{
    if(isset($_SESSION['SuperID'])) 
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $SuperID = $_SESSION['SuperID'];
        
        $result = mysqli_query($con,"SELECT * FROM superuser WHERE username='$username' and password = '$password' and SuperID = '$SuperID' limit 1");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) 
        {
            $_SESSION['SuperID'] = $row['SuperID'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['Middlename'] = $row['Middlename'];
            $_SESSION['Lastname'] = $row['Lastname'];
            $_SESSION['Address'] = $row['Address'];
            $_SESSION['password'] = $row['password'];
   

            if(isset($_SESSION['SuperID'])) 
            {
                echo '<script>alert("Login Success")</script>';
                header("Location:superuserpage.php");
                die;
            }
                else 
                {
                 echo  '<script>alert("Invalid Username or Password!")</script>';
                 
                }

        }   else 
            {
             echo  '<script>alert("Invalid Username or Password!")</script>';
             
            }
    }

}
   
?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="loginbox.css">  
</head>
<body>

<div class="header">
  <div class="header-right">
    <a href="home.php">Home</a>
       <a href="Missionvision.php">Mission & Vision</a>
       
          <a href="contact.php">Contact</a>
    <a href="about.php">About</a>  
          <a href="Loginempid.php" >Login</a>
  </div>
</div>

<div class="container">
               

            </div>
        </div>
    </footer>
 </div>
</body>
</html>

<body>
    <div class="box">
    <div class="container">
        <div class="top">
           
            <header>LOGIN</header>
        </div>
        <form method="POST">

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" name="user" id="" required>
            <i class='bx bx-user' ></i>
        </div><br>
        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" name="pass" id=""required   >
            <i class='bx bx-lock-alt'></i>
        </div><br>
        <div class="input-field">
            <input type="submit" class="submit" name="login" value="Login" id="">
        </div>
    </div>
</div>  
</form>