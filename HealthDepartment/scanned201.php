  <?php
  session_start();

          include('connection.php');
         $result = mysqli_query($con,"SELECT * FROM tbl_addemp");
        ?>
<style type="text/css">
.txtbx
{
 background: transparent;
 border-color: 1px;
 font-size: 25px;   
}



</style>
<html>
<?php 
                    while ($row  = mysqli_fetch_assoc($result))
                    {
                ?>
                <div>
<input type="text" name="name" class=" txtbx" value=" <?php echo $row['Firstname'] ." " . $row['Middlename'] ." ". $row['Lastname']?>" readonly>
</div>
<?php } ?>
<div><br>
    <table>
<tr>
    <td><input type="text" name="1" placeholder="Certificate"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
    <td><input type="text" name="2" placeholder="Certificates"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="3" placeholder="Verbal Autopsy"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="4" placeholder="Data Privacy"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="5" placeholder="Certificate1"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="6" placeholder="Certificate2"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="7" placeholder="Certificate3"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
<tr>
    <td><input type="text" name="8" placeholder="Certificate4"></td>
    <td><input type="button" name="view" value="view uploaded files"></td>
</tr>
</table>




































































</html>