<?php      
session_start();

    include('connection.php');  
    

    
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="adpage.css">
<style type="text/css">
 .a{
    display: block;
    margin-left: 1020px;
    font-size: 25px;
    height: 60px;
    width: 230px;
    background-color: transparent;
    border: transparent;
  }

.block {
  margin-left: 1250px;
  display: inline-block;
    height: 75px;
    width: 75px;
  background-color: white;
}

.container {
  text-align: center;
}

.block img {
    height: 75px;
    width: 75px;
}
.button
{
  background-color:yellow;
}
    h2{
        text-align: center;
    }
    td{
    text-align: center;
    }
    table {
        margin:auto;
        border-collapse: collapse;
    border: 1px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
    width:50%;
}td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px;
}

td {
    text-align: center;
}
</style>
<!-- this is the search bar-->
<?php
if(isset($_POST['search'])){

    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM emp_info WHERE CONCAT(EmployeeID, Firstname,Middlename,Lastname,Address,Position, Username) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}else{
    $query = "SELECT * FROM emp_info";
    $search_result = filterTable($query);
}
function filterTable($query){
    $connect = mysqli_connect("localhost", "root","","qchd");
    $filter_Result = mysqli_query($connect,$query);
    return $filter_Result;
}

?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="desk.css">

</head>

    
<div class="header">
  <div class="header-right">
    <a class="active" href="signup.php">REGISTRATION</a>
      <a class="active" href="logout.php">LOGOUT</a>
     
      </div>
  </div>
</div>

<head>
     <br><br><br>
     <link rel="stylesheet" type="text/css" href="crts.css">
</head>
<form action ="superuserpage.php" method="post">



<?php
if(isset($_SESSION["SuperID"])) {
?>
<center><h1>SUPER USER</center>


<br>
<br>
<div>
<h4><input type="text" name="valueToSearch" placeholder="Search.....">  
<br>
<input type="submit" name="search"  id="button" value="Search"></h4>
</div>
 <div class="table-responsive">
    

    <table class="table table-bordered">
           
    <thead>
        <tr>
            <th>Employee_id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Position</th>
            <th>Username</th>
            <th>Password</th>
            <th colspan ="5">Action</th>
        </tr>
    </thead>
    <tboday>
        
        
        <?php 
        // output data of each row
                // LOOP TILL END OF DATA
                
                while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $row['EmployeeID'];?></td>
                <td><?php echo $row['Firstname'];?>&nbsp<?php echo $row['Middlename'];?>&nbsp<?php echo $row['Lastname'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Position'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
               
           </form>
           
                     

                <form action="view.php" method="post">
                <input type="hidden" name="EmployeeID" value="<?php echo $row['EmployeeID'];?>">
                <td><input type="submit" value="VIEW" ></td>
                </form>
                <form action="edit.php" method="post">
                <input type="hidden" name="EmployeeID" value="<?php echo $row['EmployeeID'];?>">
                <td> <input type="submit" value="UPDATE"></td>
                        </form>
                            <?php
            endwhile;

            }else {
            echo "<h1>Please login first .</h1>";
            header("location:login.php");
            }
            ?>
            
        </table>
</form>

    </tbody>
<br>
</div>

</div>

</body>
</div>
</html>