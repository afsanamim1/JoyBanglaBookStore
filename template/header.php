<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="./bootstrap/css/Style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./bootstrap/js/script.js" defer></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Joy-Bangla  E-Book Store</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
              <li><a href="admin.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Admin</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 align="CENTER" >Welcome to Joy-bangla Online <br>E-Bookstore</h1>
        <p class="lead"></p>
       <img src="bootstrap\img\Library.jpg" alt="BookLibrary" width="1180" height="345" >
       
      </div>
    </div>
    <div class="page-banner-area section " style="margin-top:90px">
<div class="container-fluid">
<div class="row">
</div>
</div>
</div>
<div class="event-area bg-white section pt-50 pb-50">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mb-10" style="text-align:justify">
<marquee><h3 align = "Center" style="margin-top:1px">Joy-bangla Online   E-Book store has a rich library comprising of <strong>29348 </strong>Text books and Reference Books.</h3></marquee>
<p style="font-size:15px;     font-family: Verdana, Geneva, Tahoma, sans-serif;font-weight: bold;">List of the number of books by Departments : </p>
<table border="0" cellpadding="0" cellspacing="0" xss=removed>
<tbody>
<tr>
<td xss=removed>
<p><strong> Sl</strong></p>
</td>
<td xss=removed>
<p><strong>Name of Department</strong></p>
</td>
<td xss=removed>
<p><strong>Total Book Titles</strong></p>
</td>
<td xss=removed>
<p><strong>Total Copies of Books</strong></p>
</td>
</tr>
<tr>
<td xss=removed>
<p>01</p>
</td>
<td xss=removed>
<p>Business Department</p>
</td>
<td xss=removed>
<p>255</p>
</td>
<td xss=removed>
<p>10821</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>02</p>
</td>
<td xss=removed>
<p>Law Department</p>
</td>
<td xss=removed>
<p>251</p>
</td>
<td xss=removed>
<p>5870</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>03</p>
</td>
<td xss=removed>
<p>English Department</p>
</td>
<td xss=removed>
<p>380</p>
</td>
<td xss=removed>
<p>10708</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>04</p>
</td>
<td xss=removed>
<p>MPH Department</p>
</td>
<td xss=removed>
<p>7</p>
</td>
<td xss=removed>
<p>332</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>05</p>
</td>
<td xss=removed>
<p>CSE</p>
</td>
<td xss=removed>
<p>54</p>
</td>
<td xss=removed>
<p>542</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>06</p>
</td>
<td xss=removed>
<p>Civil Engineering</p>
</td>
<td xss=removed>
<p>34</p>
</td>
<td xss=removed>
<p>300</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>07</p>
</td>
<td xss=removed>
<p>Architecture</p>
</td>
<td xss=removed>
<p>52</p>
</td>
<td xss=removed>
<p>353</p>
</td>
</tr>
<tr>
<td xss=removed>
<p>08</p>
</td>
<td xss=removed>
<p>Electrical and Electronics Engineering</p>
</td>
<td xss=removed>
<p>44</p>
</td>
<td xss=removed>
<p>422</p>
</td>
</tr>
<tr>
<td xss=removed>
<p> </p>
</td>
<td xss=removed>
<p> </p>
</td>
<td xss=removed>
<p><strong>Grand Total</strong></p>
</td>
<td xss=removed>
<p><strong>29348</strong></p>
</td>
</tr>
</tbody>
</table>
<div class="center">
<button onclick="document.location='books.php'">OUR BOOKS COLLECTION</button>
</div>
<div class="about" style="margin-top:50px">
<br>
<br>
<br>
<br>
<form>
  <fieldset>
    <legend> About Us </legend>
    <p style="font-size:20px;">
    Our library is a comprehensive library. Here you will find all kinds of books at very low prices. Delivery and receive very fast. Our library is rich in about <strong>29348 </strong> books. Books are a good friend of man, so when you have time, read books yourself and help others to read.
      </p>
    <br>
    <br>
    <h3>
      Our Team Member's Are :
    </h3><br>
    <br>
    <i class="fa fa-user" style="font-size:20px; color:red"></i><span>  Afsana mim</span>  &nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-mobile-phone" style="font-size:20px; color:red"></i><span>      01581837792</span>  &nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-envelope" style="font-size:20px;color:red"></i><span>         AfsanaMim304@gmail.com</span><br>
    <br>
    

    <i class="fa fa-user" style="font-size:20px; color:red"></i><span> Priya Dutta </span>  &nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-mobile-phone" style="font-size:20px; color:red"></i><span>      01728957882</span>  &nbsp;&nbsp;&nbsp;&nbsp;
    <i class="fa fa-envelope" style="font-size:20px;color:red"></i><span>         Priya013@gmail.com</span><br>
    <br>

  
      </fieldset>
      </form>
</div>

</div>
<!-- 
<div class="timer">
        <span id="hours">00</span>
        <span>:</span>
        <span id="minutes">00</span>
        <span>:</span>
        <span id="second">00</span>
        <span id="session">AM</span>

</div> -->

    <?php } ?>

    <div class="container" id="main">