<!DOCTYPE html>
<html lang="en">
<?php

include('../include/authentication.php');
include('../process/config.php');
include('../include/calling_profile.php');
include('../include/include_body.php');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hero-img.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/body.css">
  <link rel="stylesheet" type="text/css" href="../css/service_list_table.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/add_type.js"></script>
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="../css/add_account.css">
  <link rel="stylesheet" type="text/css" href="assets/css/upload_photo.css">
  <link href="assets/css/registraion_applicant.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jul 05 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $adminNavigation; ?>
  <br><br>
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add User</h3>
          <form action="../process/add_account.php" method="post" enctype="multipart/form-data">

            <!--Code for uploading Photo-->
            <div class="file-upload">
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

              <div class="image-upload-wrap">
                <input class="file-upload-input" id="profilePic" name="profilePic" type='file' onchange="readURL(this);" accept="image/*" required />
                <div class="drag-text">
                  <h3>Drag and drop a photo</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                </div>
              </div>
            </div>
            <!----------------------------------------------------------------------------------->


            <div class="row">
              <div class="col-md-6 mb-4">

                <div class="form-outline">
                  <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" required />
                  <label class="form-label" for="firstName">First Name</label>
                </div>

              </div>
              <div class="col-md-6 mb-4">

                <div class="form-outline">
                  <input type="text" id="middleName" name="middleName" class="form-control form-control-lg" />
                  <label class="form-label" for="middleName">middle Name</label>
                </div>

              </div>
              <div class="col-md-6 mb-4">

                <div class="form-outline">
                  <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" required />
                  <label class="form-label" for="lastName">Last Name</label>
                </div>

              </div>

              <div class="col-md-6 mb-4">

                <div class="form-outline">
                  <input type="text" id="suffix" name="suffix" class="form-control form-control-lg" />
                  <label class="form-label" for="suffix">suffix</label>
                </div>

              </div>

            </div>

            <div class="row">
              <div class="col-md-6 mb-4 d-flex align-items-center">

                <div class="form-outline datepicker w-100">
                  <input type="date" class="form-control form-control-lg" id="birthdayDate" name="birthdayDate" required />
                  <label for="birthdayDate" class="form-label">Birthday</label>
                </div>

              </div>
              <div class="col-md-6 mb-4">

                <h6 class="mb-2 pb-1">Gender: </h6>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="Female" checked />
                  <label class="form-check-label" for="femaleGender">Female</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="Male" />
                  <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="Other" />
                  <label class="form-check-label" for="otherGender">Other</label>
                </div>

              </div>
            </div>


            <div class="form-outline">
              <input type="text" id="homeAddress" name="homeAddress" class="form-control form-control-lg" />
              <label class="form-label" for="homeAddress">Address</label>
            </div>



            <div class="form-outline">
              <input type="text" id="username" name="username" class="form-control form-control-lg" required />
              <label class="form-label" for="username">Username</label>
            </div>

            <div class="form-outline">
              <input type="password" id="password" name="password" class="form-control form-control-lg" minlength="8" required />
              <label class="form-label" for="password">Password</label>
            </div>


            <div class="mt-4 pt-2">
              <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>




  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <?php echo $adminScript; ?>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/upload_photo.js"></script>

</body>

</html>