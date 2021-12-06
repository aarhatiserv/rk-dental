<?php include("header.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Colorlib Medi+</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <link rel="stylesheet" href="css1/bootstrap.css">
  <link rel="stylesheet" href="css1/animate.css">
  <link rel="stylesheet" href="css1/owl.carousel.min.css">
  <link rel="stylesheet" href="css1/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css1/jquery.timepicker.css">

  <link rel="stylesheet" href="fonts1/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts1/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts1/flaticon/font/flaticon.css">


  <!-- Theme Style -->
  <link rel="stylesheet" href="css1/style.css">
</head>

<body>
  <section class="cover_1" style="background-image: url(img/slider-2.jpg);">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-10">
          <h2 class="heading element-animate">Contact us</h2>
          <p class="sub-heading element-animate mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END slider -->

  <!-- form section for contact us  -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5 element-animate">
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control form-control-lg" name="fname" id="fname" required>
              </div>
              <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control form-control-lg" name="lname" id="lname" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" id="message" name="message" class="form-control form-control-lg" required cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
              </div>

            </div>
          </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 element-animate">

          <h5 class="text-uppercase mb-3">Address</h5>
          <p class="mb-5">Shiv Hari Niketan, <br> UCO Bank, Malancha Main Rd, <br> Kharagpur, West Bengal 721301</p>

          <h5 class="text-uppercase mb-3">Email Us At</h5>
          <p class="mb-5"><a href="mailto:dentalcarerk@gmail.com">dentalcarerk@gmail.com</a> <br> </p>

          <h5 class="text-uppercase mb-3">Call Us</h5>
          <p class="mb-5">Phone: +91 90648 87991 <br> Mobile:+91 90648 87991</p>


        </div>
      </div>
    </div>
  </section>


  <script src="js1/jquery-3.2.1.min.js"></script>
  <script src="js1/popper.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/owl.carousel.min.js"></script>
  <script src="js1/bootstrap-datepicker.js"></script>
  <script src="js1/jquery.timepicker.min.js"></script>
  <script src="js1/jquery.waypoints.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js1/main.js"></script>
  <!-- function for form -->
  <?php

  ?>
  <!-- connecting database -->
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databse = "rk_dental";


    // create connection
    $conn = mysqli_connect($servername, $username, $password, $databse);
    // if (!$conn) {
    //   die("Sorry we failed to connect" . mysqli_connect_error());
    // } else {
    //   echo "Connection was successful ";
    // }

    // inserting in database 
    $sql = "INSERT INTO `contact_us` (`f_name`, `l_name`, `email`, `msg`) VALUES ( '$fname', '$lname' , '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      //         <strong>Success!</strong> Your entry has beem submitted successfull!y.
      //     </div>';
      echo '<script type="text/javascript">';
      echo 'setTimeout(function () { swal("WOW!","Your Submitted","success");';
      echo '}, 1000);</script>';
    } else {
      // echo "The record was not Inserted  Successfully because of this error -----> ". mysqli_error($conn). "<br>";
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Ooops!</strong> We are facing some technical issue and Your entry was not submitted successfull!y!. We regrat the innconvinience caused.
          </div>';
    }
  }
  ?>
</body>

</html>
<?php include("footer.php"); ?>