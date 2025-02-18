<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Facilities</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
  <style>
    .custom-size {
      font-size: 40px; /* Adjust the size as needed */
    } 
    .pop:hover {
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
  <?php require('inc/header.php');?>

  <div class="my-5">
    <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <!-- WiFi Section (Repeating 6 Times) -->
      <?php
      for ($i = 1; $i <= 6; $i++) {
      ?>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
            <div class="d-flex align-items-center mb-2">
              <i class="fa fa-wifi custom-size"></i> <h5 class="m-0 ms-3">Wifi</h5>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum posuere iaculis. Aliquam non erat nibh. Nulla auctor dolor in est suscipit, et elementum quam lacinia. Donec vitae nisi eleifend, dapibus turpis et, cursus orci.
            </p>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- End of WiFi Section -->
    </div>
  </div>

  <?php require('inc/footer.php')?>

  <!-- JavaScript libraries for Bootstrap and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</body>
</html>