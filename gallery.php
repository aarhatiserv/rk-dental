<?php include("header.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Colorlib Medi+</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- this link is used for bootstrap -->
  <link rel="stylesheet" href="css1/bootstrap.css">
  <link rel="stylesheet" href="css1/animate.css">
  <link rel="stylesheet" href="css1/owl.carousel.min.css">
  <link rel="stylesheet" href="css1/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css1/jquery.timepicker.css">
  <!-- this is used for font and icons -->
  <link rel="stylesheet" href="fonts1/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts1/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts1/flaticon/font/flaticon.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="css1/style.css">
  <!-- css for gallery starts here -->
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .column {
      float: left;
      width: 25%;
      padding: 10px;
    }

    .column img {
      opacity: 0.8;
      cursor: pointer;
    }

    .column img:hover {
      opacity: 1;
    }

    .row::after {
      content: "";
      display: table;
      clear: both;
    }

    .container2 {
      position: relative;
      display: none;
    }

    /* Expanding image text */
    #imgtext {
      position: absolute;
      bottom: 15px;
      left: 15px;
      color: white;
      font-size: 20px;
    }

    /* Closable button inside the expanded image */
    .closebtn {
      position: absolute;
      top: 10px;
      right: 15px;
      color: white;
      font-size: 35px;
      cursor: pointer;
    }
  </style>
  <!-- css for gallery ends here -->
</head>

<body>
  <section class="cover_1" style="background-image: url(img/slider-2.jpg);">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-10">
          <h2 class="heading element-animate">Gallery</h2>
          <p class="sub-heading element-animate mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END slider -->
  <!-- gallery title section start here -->
  <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center mb-5">
          <h2 class="text-uppercase heading border-bottom mb-4">Our gallery</h2>
          <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
        </div>
      </div>
      <!-- gallery title section ends here -->

      <!-- gallery image section start here -->
      <div class="row">
        <div class="column">
          <img src="img/img_thumb_1.jpg" alt="Machine" style="width: 100%;" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="img/img_thumb_2.jpg" alt="X-Ray" style="width: 100%;" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="img/img_thumb_3.jpg" alt="Dental chair" style="width: 100%;" onclick="myFunction(this);">
        </div>
        <div class="column">
          <img src="img/img_thumb_4.jpg" alt="Operation Theater" style="width: 100%;" onclick="myFunction(this);">
        </div>
      </div>
      <div class="container2">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
      </div>
    </div>
  </section>
  <!-- gallery image section ends here -->


  <script src="js1/jquery-3.2.1.min.js"></script>
  <script src="js1/popper.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <script src="js1/bootstrap-datepicker.js"></script>
  <script src="js1/jquery.timepicker.min.js"></script>
  <script src="js1/jquery.waypoints.min.js"></script>
  <script src="js1/main.js"></script>
  <!-- function for gallery images geting expand -->
  <script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
  </script>
</body>

</html>
<?php include("footer.php"); ?>