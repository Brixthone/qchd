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
    text-align: right;
    margin-left: 900px;
    font-size: 25px;
    height: 60px;
    width: 280px;
    background-color: transparent;
    border: transparent;
  }

.block {
  margin-left: 1175px;
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
  if(isset($_SESSION["DivisionID"])){
?>
 <input type="text" name="admin" class="a" value="<?php echo $_SESSION['Firstname'] . " ".  $_SESSION['Middlename'] ." ". $_SESSION['Lastname'];?>" readonly>
<div class="container">
  <div class="block">
    <a href="#"><img src="icon.png"></a>
    <a href="logout.php"><input type="button" name="logout" value="   logout   " class="button"></a>
  </div><br><br>
<div class="header">
  <br><br>
<frameset cols="25%,*">
  <iframe src="divtab.php" style="height:530px;width:1330px;" frameborder="0" noresize="noresize">
</frameset>
                            <?php
            }else {
            echo "<h1>Please login first .</h1>";
            header("location:login.php");
            }
            ?>
</html>