<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
body { 
  background-image: url("mv.png");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  font-family: Arial, Helvetica, sans-serif;


}
.a{ 
width:100%;
height:88vh;
position:absolute;

}
.header {
  overflow: hidden;
    padding: 1px 1px;
}

.header a {
  float: left;
  color: white ;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-size: 25px; 
  font-family: calibri ;
  font-weight: bold;
  line-height: 50px;
  border-radius: 5px;
}

.header a.logo {
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color:blue;
 e color: black;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
.container {
  position: relative;
}

.bottomleft {
  position: absolute;
  bottom: 54px;
  left: 16px;
  font-size: 24px;
}

  
  </style>

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
</div>

              
</body>
</html>
