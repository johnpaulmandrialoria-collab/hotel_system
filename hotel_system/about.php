<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbes Hotel - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
      .box{
        border-top-color: var(--teal) !important;
        transition: all 0.3s;
      }
    </style>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    FC hotel at your service,we are here to serve you the best
    experience in your staycation. In this hotel, <br> we are very 
    approachable and very accommodating, we will make sure that 
    you will have a good stay in our hotel.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Our Story</h3>
      <p>
        FC hotel was established with a vision to provide exceptional hospitality and
        comfort to all our guests. Over the years, we have grown to become a trusted 
        name in the hospitality industry, known for our commitment to quality and guest
        satisfaction.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about1.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/about2.jpg" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/about3.jpg" width="70px">
        <h4 class="mt-3">300+ COSTUMERS</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/about4.jpg" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class = "bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/about5.jpg" width="70px">
        <h4 class="mt-3">100+ STAFS</h4>
      </div>
    </div>
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <?php
        $about_r = selectAll('team_details');
        $path=ABOUT_IMAGE_PATH;
        while($row = mysqli_fetch_assoc($about_r)){
          echo <<<DATA
            <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="{$path}{$row['picture']}" class="w-100">
            <h5 class="text-center mt-2">{$row['name']}</h5>
            </div>
          DATA;
        }

      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
</script>

</body>
</html>