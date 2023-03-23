    <?php
session_start();
include("connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // SOMTHING WAS POSTED
    
    $EmployeeID = $_POST['ID'];

    $query = "select * from emp_info  WHERE EmployeeID = '$EmployeeID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['EmployeeID'] = $row['EmployeeID'];
              
                
                if(isset($_SESSION['EmployeeID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
            }



        }

}   
if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // SOMTHING WAS POSTED
    
    $adminID = $_POST['ID'];

    $query = "select * from tbl_useraccounts  WHERE adminID = '$adminID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['adminID'] = $row['adminID'];
              
                
                if(isset($_SESSION['adminID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
            }



        }

}   

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // SOMTHING WAS POSTED
    
    $HrID = $_POST['ID'];

    $query = "select * from hr  WHERE HrID = '$HrID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['HrID'] = $row['HrID'];
              
                
                if(isset($_SESSION['HrID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
            }



        }

}   
if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    
    $facilityheadID = $_POST['ID'];

    $query = "select * from tbl_facilityhead  WHERE facilityheadID = '$facilityheadID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['facilityheadID'] = $row['facilityheadID'];
              
                
                if(isset($_SESSION['facilityheadID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
            }

}

        }

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // SOMTHING WAS POSTED
    
    $DivisionID = $_POST['ID'];

    $query = "select * from division WHERE DivisionID = '$DivisionID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['DivisionID'] = $row['DivisionID'];
              
                
                if(isset($_SESSION['DivisionID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
            }



        }

}   

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    // SOMTHING WAS POSTED
    
    $SuperID = $_POST['ID'];

    $query = "select * from superuser WHERE SuperID = '$SuperID' limit 1";
             $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)==1)
            {
                $row  = mysqli_fetch_array($result);
                $_SESSION['SuperID'] = $row['SuperID'];
              
                
                if(isset($_SESSION['SuperID']))
                {
                header("Location: login.php");
                 die;          
                }
            }else 

            {
                echo"<script>alert('No Record')</script>";
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
           
            <header>Enter Employee ID....</header>
        </div>
        <form method="POST">

        <div class="input-field">
            <input type="text" class="input" placeholder="Employee Id" name="ID" id="">
            <i class='bx bx-user' ></i>
        </div><br>
        <div class="input-field">
            <input type="submit" class="submit" name="login" value="Submit" id="">
        </div>
    </div>
</div>  
</form>
