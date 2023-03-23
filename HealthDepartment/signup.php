
<?php
session_start();
    include("connection.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        // SOMTHING WAS POSTED
        
        $EmployeeID  = $_POST['EmployeeID'];
        $Firstname = $_POST['Firstname'];
        $Middlename = $_POST['Middlename'];
        $Lastname = $_POST['Lastname'];
        $Address = $_POST['Address'];
        $Position = $_POST['Position'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role =     $_POST['role'];
        

        if(!empty($Firstname) && !empty($password))
        {
            

          //validation so no name duplication
          $query = "SELECT * FROM emp_info WHERE Firstname = '$Firstname' 
          and Middlename ='$Middlename' and Lastname = '$Lastname' and EmployeeID = '$EmployeeID'";
          
          $result = mysqli_query($con,$query);
      
          if(mysqli_num_rows($result) == 0)
          {
            //save to database
          $query = "insert into emp_info  (EmployeeID, Firstname, Middlename,Lastname,Address,Position,username,password)
           values ('$EmployeeID','$Firstname','$Middlename', '$Lastname', '$Address', '$Position','$username','$password')";
 
            
            mysqli_query($con,$query);
           
            header("Location: superuserpage.php");
            echo"<script>alert('Successfull')</script>";
            die;
          }else{
            echo"<script>alert('Please enter Unique Username')</script>";
            

                }

        }else{
            echo"<script>alert('Please enter some valid information')</script>";

        }

    }

?>
<html>
<head>
     <title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="sg.css">
</head>
<body>
     <form method="post">
          <h1 class="form-title">REGISTRATION</h1>

         

          <label>Employee ID</label>
          <input type="text" 
                 name="EmployeeID" 
                 placeholder="Employee Id" required>

          <label>First Name</label>
          <input type="text" 
                 name="Firstname" 
                 placeholder="First Name" required>

          <label>Middle Name</label>
          <input type="text" 
                 name="Middlename" 
                 placeholder="Middle Name" required>

              <label>Last Name</label>
          <input type="text" 
                 name="Lastname" 
                 placeholder="Last Name" required>

                <label>Address</label>
          <input type="text" name="Address" placeholder="Address" required>

                <label>Position</label>
          <input type="text" name="Position" placeholder="Position" required>

                <label>Username</label>
          <input type="text" name="username" placeholder="Username" required>

                   <label>Password</label>
          <input type="password" name="password" placeholder="Password" required>
          <br>&nbsp;&nbsp;&nbsp;
          <select name="i" id="i">
           <option>Division</option>
            <option>employee</option>
            <option>Hr</option>
            <option>Superuser</option>
            <option>department</option>
          
          
        <br>



</select><br><br>
<br>
            <div class="form-submit-btn">
          <input type="submit" name="submit" value="Register">
<center>
          <a href="superuserpage.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>