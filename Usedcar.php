<!DOCTYPE html>
<html lang="en">
<head>
  <title>HAMROCAR.COM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }-->
  </style>
  <style>
  #img1{
 height:550px;
 width:1400px; 
  }
  </style>
  <style>
  #img2{
 height:50px;
 width:150px;
  }
  </style>
 
</head>
<style>
.qwer{
float:right;
}
p{
font-size:12px;}
</style>


<body>

<div class="container-fluid">
<div class="well well-sm"><img src="Image/logo.png" id=img2> <div class="qwer">

        <a href="form.php" style="margin-right:10px,margin-bottom:20px"><span class="glyphicon glyphicon-user" ></span> Sign Up</a>
        <a href="formlogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
      </div></div>
	
	<ul class="nav nav-tabs" >
    <li class="active"><a href="index.php">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">CAR<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="Usedcar.php">Used car</a></li>
        <li><a href="Newcar.php">New car</a></li>
      </ul>
    </li>
	<li><a href="contactus.php">CONTACT US</a></li>
	<li><a href="admin/index.php">ADMIN PANNEL
	<li><a>  <form action="searchprocess.php" method="post">
  <input type="text" name="search" placeholder="Search the Car"/>
  <select name="filter1">
    <option name="search by brand"> search by brand</option> 
    <option name="search by model ">search by model</option>
    <option name="search by budget"> search by budget</option>
	<option name="search by type"> search by type</option>
    </select>
  <input type="submit" value="Search Now"/>
  </form></a></li>
  </ul>
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox" >
	<h1>SOME USED CAR</h1>

      <div class="item active">
        <img src="Image/HyundaiVerna1.6CRDiSX0.jpg" alt="Chania" id="img1">
        <div class="carousel-caption">
          <h3>HYUNDAI</h3>
          <p>VERNA</p>
        </div>
      </div>

      <div class="item">
        <img src="Image/IMG-20150721-WA00084.jpg" alt="Chania" id="img1">
        <div class="carousel-caption">
          <h3>Hyundai</h3>
          <p>verna-sedan</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Image/usedcar_img_20150723_wa0000_22681437626432_1437626585.jpg" alt="Flower" id="img1">
        <div class="carousel-caption">
          <h3>TOYOTA</h3>
          <p>COROLLA</p>
        </div>
      </div>

      <div class="item">
        <img src="Image/usedcar_01_57_32_IMG_20150622_134758877_32681_1434961842.jpg" alt="Flower" id="img1">
        <div class="carousel-caption">
          <h3>HONADA</h3>
          <p>CITY</p>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
 
 

<div class="bottomCta">
<h1 class="well well-lg" style="background-color:#333333; color:#E6E6E6; text-align: center; font-size: 20px;" size="2000px">HAMROCAR.COM</br><p>HamroCar is not 
just a web portal that lists cars in Nepal, but is a rich automotive platform that brings to its readers to-the-minute insights from around the world. 
Be it a newbie, an auto freak, or a layman in terms of complex car engine and performance terminologies, HamroCar is the place where you can read fresh news,
 and road tests; browse recently shot images and videos, compare car features, prices, and other car specifications.</p> </h1>
<p></p>
<p style="text-align: center; color: white; font-size: 20px;"><img src="Image/logo.png" id=img2></p>
<div class="clear"></div>
</div>


</body>
</html>
