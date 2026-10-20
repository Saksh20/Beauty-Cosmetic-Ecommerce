<!DOCTYPE HTML>
<html lang="en">
<head>
<title>BEAUTY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/Style.css">
</head>
<body>
 <style>
*{
 margin:0;
 padding:0;
 border-sizing: border-box;
font-family: 'Josefin Sans', sans-serif;}
 
  .carousel-inner img {
    width:100%;
    height:600px;
  }
 .aboutimg{
width:100%;
height:250px!important;
 }
 .navbar-brand {
     font-size: 2rem;
color: rgb(238, 11, 105);
}
.navbar-brand:hover{
color: black;
}
   Logo img {
  width:100%;
  height: 65px;
  }
  .nav-link {
  margin-right:10px;
  margin-left:10px;
  text-transform: uppercase;
  color: white;
  }
  .Search {
  height: 40px;
  width: 80%;
  border-radius: 60px;
  outline: none;
  border: 2px solid rgb(248, 26, 92);
  }
  .btn0{
  height: 40px;
  weight: 40%;
  outline: none;
  border: none;
  background :rgb(248, 26, 92);
  color:white;
  border-radius: 60px;
  font-weight: 700;
  }
   .about{
 background: url(./Images/about1.jpg)no-repeat;
 background-size: cover;
 height: 90vh;
 width: 100%;
 margin-right: 36%;
  margin-top: 80px;
  margin-left:10px;
 }
 .Our Services{
   background-size: cover;
 height: 70vh;
 width: 100%;
 margin-right: 36%;
  margin-top: 20px;
  margin-left:10px;
 }
  .line{
 width:30%;
    height:6px;
background :rgb(248, 26, 92);
display: inline-block;
}

 .news{
background-color: black;
color: white;
}
.btn2{
height: 45px;
width: 100px;
background: white;
margin-left: -10px;
border: 2px solid white;
font-weight: 600;
}
.news input{
height: 45px;
width: 55%;
border: 2px solid white;
outline: none;
background: black;
color: white;
margin-top: 20px;
font-weight:600;
}
.news:placeholder{
color: white;
}
.news p{
margin:0;
}
.cos13{
background:linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url(./Images/cos13.jpg)no-repeat;
background-size: cover;
height: 100vh;
width: 100%;
margin-right: 36%;
  margin-top: 80px;
  margin-left:10px;
}
 
 </style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Beauty</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">                                    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">                                    
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">Products</a>
        </li>
<li class="nav-item">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
role="button" aria-haspopup="true" aria-expanded="false">Brand</a>
<div class="dropdown-menu">
      <a class="dropdown-item" href="Lakme.php">Lakme</a>
      <a class="dropdown-item" href="LO'real.php">LO'real</a>
      <a class="dropdown-item" href="Garniear.php">Garniear</a>
      <a class="dropdown-item" href="Nivea.php">Nivea</a>
    </div></a>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
role="button" aria-haspopup="true" aria-expanded="false">Ayurveda</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Patanjali.php">Patanjali</a>
      <a class="dropdown-item" href="Himaliya.php">Himaliya</a>
      </div></a>
<li class="nav-item">
          <b><a class="nav-link" href="Login.php">Login</a></b>
        </li>
      <form class="d-flex">
        <input class="mr-2 Search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  
<div id="demo" class="carousel slide" data-ride="carousel" style="width:100%">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Images/pata1.jpg" width="1100" height="600">
      <div class="carousel-caption">
       </div>  
    </div>
    <div class="carousel-item">
      <img src="./Images/pata2.jpg" width="1100" height="600">
      <div class="carousel-caption"> 
        </div>  
    </div>
    <div class="carousel-item">
      <img src="./Images/pata3.jpg" width="1100" height="600">
      <div class="carousel-caption">
         </div>  
    </div>
  </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <ul class="nav justify-content-center">
  <li class="nav-item">
<li class="nav-item dropdown">
    <h4><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
role="button" aria-haspopup="true" aria-expanded="false">Makeup</a></h4>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Face.html">Face</a>
      <a class="dropdown-item" href="Lip.html">Lip</a>
      <a class="dropdown-item" href="Nail.html">Nail</a>
      <a class="dropdown-item" href="Eye.html">Eye</a>
    </div></a>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
role="button" aria-haspopup="true" aria-expanded="false">Hair Care</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Facecare.html">Shampoo</a>
      <a class="dropdown-item" href="Shaving.html">Nourishment</a>
 <a class="dropdown-item" href="Shower.html">Hair Styling</a>
      </div></a>
  </div>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
role="button" aria-haspopup="true" aria-expanded="false">Skin Care</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="Facecare.html">Cleansers</a>
      <a class="dropdown-item" href="Shaving.html">Lip Care</a>
 <a class="dropdown-item" href="Shower.html">Moisturaiser</a>
 <a class="dropdown-item" href="Shaving.html">Mask</a>
 <a class="dropdown-item" href="Shower.html">Hand and Foot Care</a>
      </div></a>
  </div>
 
</ul>
<Section class="my-4">
<div class="py-5">
<h2 class="display-6 py-5 text-center">Patanjali Products</h2>
<div class="d-flex justify-content-center flex-coloumn-flex-lg-row my-5">
<div class="card m-2">
<a href="./product.php">
<img src="./Images/pata4.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Facewash</p></b>
  <small class="text-secoundary">$77.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.php">
<img src="./Images/pata5 (1).jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Anti Aging Cream</p></b>
  <small class="text-secoundary">$299.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata6.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Hair Shampoo</p></b>
  <small class="text-secoundary">$95.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata7.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Kesh Kanti Oil</p></b>
  <small class="text-secoundary">$499.00</small>
  </div>
  </div>
 <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata8.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Face Pack</p></b>
  <small class="text-secoundary">$117.00</small>
 
  </div>
  </div>
 </section>
 <Section class="my-4">
<div class="py-5">
<div class="d-flex justify-content-center flex-coloumn-flex-lg-row my-5">
<div class="card m-2">
<a href="./product.html">
<img src="./Images/pata14.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Harbal Kajal</p></b>
  <small class="text-secoundary">$90.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata10.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Lip Balm</p></b>
  <small class="text-secoundary">$100.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata11.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Sunscreen</p></b>
  <small class="text-secoundary">$100.00</small>
  </div>
  </div>
  <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata12.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Honey Face Wash</p></b>
  <small class="text-secoundary">$40.00</small>
  </div>
  </div>
 <div class="card m-2">
<a href="./product.html">
<img src="./Images/pata13.jpg" class="card-img-top"
  height="300" alt="Product">
  </a>
  <div class="card-body">
  <b><p class="card-text fw-bold">Body Lotion</p></b>
  <small class="text-secoundary">$350.00</small>
 
  </div>
  </div>
 </section>
 <section>
 <a href="./view.php" class="btn btn-outline-dark my-5 text-center">View all Products</a>
  <div class="position-relative m-2 text-center">
  </section>
  <section class="news py-05">
  <div class="container py-05">
<div class="row">
<div class="col-lg-9 m-auto text-center">
<h1>Join With Us</h1>
<input type="text" placeholder="Enter Your Email">
<button class="btn2">Submit</button>
</div>
</div>
  <div class="text-center row">
<div class="col-lg-11">
<div class="row">
<div class="col-lg-3 py-3">
<h5 class="pb-3">CUSTOMER CARE</h5>
<p>Regular Time</p>
<p> On Time</p>
<p> Always</p>
</div>
<div class="col-lg-3 py-3">
<h5 class="pb-3">FAQ'S</h5>
<p>No E-charges</p>
<p> Always Care</p>
</div>
<div class="col-lg-3 py-3">
<h5 class="pb-3">OUR COMPANT</h5>
<p>About</p>
<p>Events</p>
</div>
</div>
<hr>
<p class="text-center">copyright @2022 All rights reserved | This template is made by
Sakshi Kulkarni</p>
<p class="text-center">@BeautyProduction</P>
</div>
</section>
</body>

</html>

