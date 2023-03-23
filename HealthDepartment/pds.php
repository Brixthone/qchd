<?php
session_start();
include("connection.php");

?>
<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<style>
  body{
    background-color: white;
  }
	  td ,th tr
	  {

	  	border-collapse:collapse;	  }
      /* Remove the navbar's default margin-bottom and rounded borders */ 
      .navbar {
      margin-bottom: 4px;
      border-radius: 0;
      }
      /* Add a gray background color and some padding to the footer */
      footer {
      background-color: #f2f2f2;
      padding: 25px;
      }
      .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      }
      .navbar-brand
      {
      padding:5px 40px;
      }
      .navbar-brand:hover
      {
      background-color:#ffffff;
      }
      /* Hide the carousel text when the screen is less than 600 pixels wide */
      @media (max-width: 600px) {
      .carousel-caption {
      display: none; 
      }
      }
    </style>
  </head>
<body>
    <style>
      .box
      {
      width: 100%;
      max-width: 1390px;
      border-radius: 5px;
      border:1px solid #ccc;
      padding: 15px;
      margin: 0 auto;                
      margin-top:50px;
      box-sizing:border-box;
      }
    </style>
 <link rel="stylesheet" href="css/datepicker.css">
    <script src="js/bootstrap-datepicker1.js"></script>
    <script>
      $(document).ready(function(){
        $('#order_date').datepicker({
          format: "yyyy-mm-dd",
          autoclose: true
        });
      });
    </script>
    <div class="container-fluid">
<form method="post" id="invoice_form">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
<td><a href="pdf.php"><input type="button" value="PRINT" style="float:left;"></td>
</tr>
            <tr>
              <td colspan="2" align="center"><h2 style="margin-top:10.5px">PERSONAL DATA SHEET</h2></td>
            </tr>
            <tr><td>WARNING:Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filling of the administrative/criminal case/s against the person concerned.</td></tr>
            	<tr><td>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET(PDS)BEFORE ACCOMPLISHING THE PDS FORM.</td>
            	</tr><tr>
            	<td>Print legibly.tick the appropriate boxes and use separate sheet if necessary.Indicate M/A if not applicable.DO NOT ABBREVIATE.
            </tr>
            <tr>
                <td colspan="2" style="background-color: lightgray;"><i><b>I. Personal Information</b></i>
                </td>
            </tr>
                  <br />
                  <table id="invoice-item-table" class="table table-bordered">
                    <tr>
              		<td >2.  &nbsp SURNAME &nbsp</td>
              		<td colspan="4"><input type="text" name="surname" size="142"></td>
                    </tr>
                    <tr>
                    <td>  &nbsp &nbsp &nbsp FIRST NAME &nbsp</td>
              		<td colspan="2"><input type="text" name="fistname" size="90"></td>
              		<td><input type="text" name="ext" size="45" placeholder="Name Extension(JR,SR)"></td>
              		</tr>
              		<tr>
                    <td>&nbsp &nbsp &nbsp MIDDLE NAME &nbsp</td>
              		<td colspan="4"><input type="text" name="mname" size="142"></td></td>
              		</tr>
              		<tr>
                      <td> 3.  &nbsp DATE OF BIRTH &nbsp &nbsp &nbsp<br>
                      &nbsp &nbsp &nbsp (mm/dd/yyyy)</td>
                      <td><input type="text" name="dateofbirth">
                      <td rowspan="3">16. &nbsp CITIZENSHIP <br>
                      If holder of dual citizenship,please indicate the details.</td>
                      <td rowspan="3"><input type="checkbox">
                      	<label for="filipino"> Filipino</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      <input type="checkbox">
                      	<label for="dual"> Dual Citizenship</label><br>
						<input type="checkbox">
                      	<label for="bybirth"> By Birth</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                      	<input type="checkbox">
                      	<label for="natural"> By Naturalization</label><br>
                      	<br>Please Indicate Country: &nbsp &nbsp <input type="text" name="country">
                      </td>
                    </tr>
                    <tr><td>4. PLACE OF BIRTH</td>
                    	<td><input type="text" name="placeofbirth"></td>
                    </tr>
                    <tr>
                    	
                    	<td>5. &nbsp SEX</td>
                     <td> <input type="checkbox">
                      	<label for="male"> MALE</label>
						<input type="checkbox">
						<label for="female"> FEMALE</label>
					</td>
                    </tr>
                    <tr>
                    	<td>6. &nbsp CIVIL STATUS</td>
                    	<td>
                    	<input type="checkbox">
                    	<label for="single">Single</label>&nbsp &nbsp &nbsp &nbsp
                    	<input type="checkbox"> 
                    	<label for="married">Married</label><br>
                    	<input type="checkbox">
                    	<label for="widowed">Widowed</label>&nbsp &nbsp &nbsp &nbsp
                    	<input type="checkbox"> 
                    	<label for="separated">Separated</label><br>
                    	<input type="checkbox"> 
                    	<label for="other">Other/s:</label><br>
                    	</td>
                    	<td rowspan="3">17. &nbsp RESIDENTIAL ADRESS<br><br><br> <br><br><br>ZIP</td>
                      <td rowspan="3"><input type="text" name="blknum">&nbsp<input type="text" name="street"><br> house/Block/Lot No. &nbsp &nbsp &nbsp &nbsp &nbsp Street <br>
                        <input type="text" name="sub">&nbsp<input type="text" name="street"><br> Subdivision/Village &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baranggay <br>
                        <input type="text" name="city">&nbsp<input type="text" name="province"><br> City/Municipality &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Province
                        <br><input type="text" name="zipcode">
                    </tr>
<tr>
  <td>7. &nbsp HEIGHT (m)</td>
  <td><input type="text" name="height">
</tr>
<tr>
  <td>8. &nbsp WEIGHT (kg)</td>
  <td><input type="text" name="weight">
</tr>
<tr>
  <td>9. &nbsp BLOOD TYPE</td>
  <td><input type="text" name="bloodtype">
  <td rowspan="4">18. &nbsp PERMANENT ADRESS<br><br><br> <br><br><br>ZIP</td>
                      <td rowspan="4"><input type="text" name="blknum">&nbsp<input type="text" name="street"><br> house/Block/Lot No. &nbsp &nbsp &nbsp &nbsp &nbsp Street <br>
                        <input type="text" name="sub">&nbsp<input type="text" name="street"><br> Subdivision/Village &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Baranggay <br>
                        <input type="text" name="city">&nbsp<input type="text" name="province"><br> City/Municipality &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Province
                        <br><input type="text" name="zipcode">
</tr>
<tr>
  <td>10. &nbsp GSIS ID NO.</td>
  <td><input type="text" name="gsis"></td>
</tr>
<tr>
  <td>11. &nbsp PAGIBIG ID NO.</td>
  <td><input type="text" name="pagibig"></td>
</tr>
<tr>
  <td>12. &nbsp PHILHEALTH ID NO.</td>
  <td><input type="text" name="philhealth"></td>
</tr>
<tr>
  <td>13. &nbsp SSS ID NO.</td>
  <td><input type="text" name="sss"></td>
  <td>19. &nbsp TELEPHONE NO.</td>
  <td><input type="text" name="telephonenum"></td>
</tr>

<tr>
  <td>14. &nbsp TIN ID NO.</td>
  <td><input type="text" name="tin">
    <td>20. &nbsp MOBILE NO.</td>
  <td><input type="text" name="mobilenum"></td>
</tr>
<tr>
  <td>15. &nbsp AGENCY EMPLOYEE NO.</td>
  <td><input type="text" name="empid">
    <td>21. &nbsp EMAIL ADDRESS(if any)</td>
  <td><input type="text" name="emailadd"></td>
</tr>
<tr><td></td></tr>

                  </table>
                  <div align="right">
                    <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                    

                  </div>
                </td>
              </tr>
              <tr>
                <td align="right"><b><span id="final_total_amt"></span></b></td>
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                </td>
              </tr>
          </table>
        </div>
      </form>
    </html>