<?php
session_start();
include("connection.php");

?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="adminfe.css">
<style>
  .a{
   margin-top: 25px;
    margin-left: 1000px;
    font-size: 25px;
    height: 60px;
    width: 230px;
    background-color: transparent;
    border: transparent;
  }

.block {
  border-radius: 50%;
  margin-left: 1230px;
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
</style>
</head>   
<?php
  if(isset($_SESSION["EmployeeID"])){
?>
 <input type="text" name="admin" class="a" value="<?php echo $_SESSION['Firstname'] ." ".  $_SESSION['Middlename'] ." ". $_SESSION['Lastname']; ?>" readonly></input><br>
<div class="container">
  <div class="block">
    <a href="#"><img src="icon.png"></a>
    <a href="logout.php"><input type="button" name="logout" value="   logout   " class="button"></a>
  </div><br><br>
<div class="header">

<frameset cols="25%,*">
  <iframe src="tabs.php" style="height:530px;width:1330px;" frameborder="0" noresize="noresize" name="gg">
</frameset>
          <?php
            }else {
            echo "<h1>Please login first .</h1>";
            header("location:login.php");
            }
            ?>
</html>