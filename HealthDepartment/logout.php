
<?php
session_start();
unset($_SESSION['EmployeeID']);
unset($_SESSION['adminID']);
unset($_SESSION['HrID']);
unset($_SESSION['SuperID']);
unset($_SESSION['DivisionID']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['Firstname']);
unset($_SESSION['Middlename']);
unset($_SESSION['Lastname']);
unset($_SESSION['Address']);


session_destroy();
header("location:home.php");

die();
?>