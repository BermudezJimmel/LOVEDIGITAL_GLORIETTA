<?php
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <title>LOVE DIGITAL</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/faviconDigiPARC.png" rel="icon">
  <link href="assets/img/FAVI.png" rel="fAVI-ICON">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Siimple - v2.1.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <!--<header id="header">
    <div class="container-fluid">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
       <!--</div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#why-us">Why Us</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav> .nav-menu -->

    <!-- </div>
  </header> End #header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">


      <div class="php-email-form mb-3">
      <img
        src="assets/img/Glo/Vday Thumbnail Glo_Vday_Template 02 (Phone).png"
        class="card-img-center"
        alt="..."
        style="max-width: 150px;"
      />
        <div>
          <!--<h2 id="detail">Globaltronics, in partnership with The PARC Foundation,<br>transforms several of the latter's spaces into the first "Truly Digital Events Place" in the country.</h2>-->
    
   
    </div>
    </div>
         
  <form class="was-validated" action="Temp2Reg.php"  method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="file" name="image" class="form-control" aria-label="file example" required>
  </div>
  <div class="mb-3">
    <textarea class="form-control is-invalid" name="address" id="validationTextarea" placeholder="Type your Message Here 100 Characters only" maxlength="100" required></textarea>
  </div>
  <div class="mb-3">
  <input type="text" class="form-control" name="name" aria-label="file example" placeholder="Enter your Name" required>
  </div>
  <div class="mb-3">
  <input type="email" class="form-control" name="email" aria-label="file example" placeholder="Enter your Email" required>
  </div>
  <div class="mb-3">
  <input type="tel" class="form-control" name="phone" aria-label="file example" placeholder="Enter your Phone Number" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{3}" required>
  </div>

  <div class="mb-3">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                  <label class="form-check-label" for="invalidCheck3">
                    <a href="#" class="text-white" data-toggle="modal" data-target="#Terms">Terms and Condition Policy</a>
                  </label>
  </div>


  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name="submit" value="Submit" >Submit form</button>
  </div>
</form>
    
    
  </section><!-- #hero -->


  
  
<!-- Modal -->
<div class="modal fade" id="Terms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Condition Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Ayala Malls is committed to protecting the privacy of data submitted to it through this promotion. Submission of an official entry hereby gives full consent to Ayala Malls to collect, record, organize, store, update, use, consolidate, block, erase or otherwise process information, whether personal, sensitive or privileged, pertaining to the entrant and the subject hereof.  In this connection, the entrant acknowledges that he/she has read and understood terms and conditions pertaining to the data privacy practices of Ayala Malls and its parent company as reflected in the latter’s Data Privacy Policy at <a href="https://www.ayalaland.com.ph/privacy-policy/">https://www.ayalaland.com.ph/privacy-policy/</a> and the entrant hereby express full conformity thereto.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- ======= Footer ======= 
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DigiPARC</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer> End #footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  




</body>

</html>