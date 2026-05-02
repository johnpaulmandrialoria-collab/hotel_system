<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbes Hotel - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
    .availability-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
      @media screen and (max-width: 575px) {
      .availability-form{
        margin-top: 25px;
        padding: 0 35px;
      }
    }
    </style>
  </head>
<body>

<?php require('inc/header.php'); ?>

<!-- hotel_system -->

<div class="container-fluid">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/forbes_hotel/1.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images/forbes_hotel/2.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images/forbes_hotel/3.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images/forbes_hotel/4.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images/forbes_hotel/5.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images/forbes_hotel/6.jpg">
      </div>
    </div>
  </div>
</div>

<!-- check availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label  class="form-label" style="font-weight: 500;">Check-In</label>
            <input type="date" class="form-control shadow-none">
          </div>
            <div class="col-lg-3 mb-3">
            <label  class="form-label" style="font-weight: 500;">Check-Out</label>
              <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label  class="form-label" style="font-weight: 500;">Adult</label>
            <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
            <div class="col-lg-2 mb-3">
            <label  class="form-label" style="font-weight: 500;">Children</label>
            <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5>Premium Room Double Bed</h5>
          <h5 class="mb-4">₱8,000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Room
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                2 Bathrooms
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                2 Sofa
              </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap">
              Wifi
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              Television
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              AC
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              Room Heater
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap">
              5 Adults
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              4 Children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5>Simple Single Bed Room</h5>
          <h5 class="mb-4">₱4,000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Room
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Balcony
              </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Wifi
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Television
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              AC
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap">
              3 Adults
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              3 Children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5>Luxury Single Bed</h5>
          <h5 class="mb-4">₱6,000 per night</h5>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                3 Room
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                2 Bathrooms
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                3 Sofa
              </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Wifi
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Television
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              AC
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Room Heater
              </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge bg-light text-dark mb-3 text-wrap">
              4 Adults
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap">
              2 Children
              </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
  </div>
</div>

<!-- Our Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/feautures/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/feautures/gym.svg" width="80px">
      <h5 class="mt-3">Gym</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/feautures/rooms.svg" width="80px">
      <h5 class="mt-3">Rooms</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/feautures/tv.svg" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/feautures/bar.svg" width="80px">
      <h5 class="mt-3">Mini-bar</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
    </div>
  </div>
</div>

<!-- Testimonials -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

<div class="container mt-5">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4 shadow">
        <div class="profile d-flex align-items-center mb-3">
          <i class="bi bi-star-fill"></i>
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          This hotel are the best, because they're very approachable 
          and very accommodating. I will definitely come back here 
          again.
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4 shadow">
        <div class="profile d-flex align-items-center mb-3">
          <i class="bi bi-star-fill"></i>
          <h6 class="m-0 ms-2">Random user2</h6>
        </div>
        <p>
          This hotel are the best, because they're very approachable 
          and very accommodating. I will definitely come back here 
          again.
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4 shadow">
        <div class="profile d-flex align-items-center mb-3">
          <i class="bi bi-star-fill"></i>
          <h6 class="m-0 ms-2">Random user3</h6>
        </div>
        <p>
          This hotel are the best, because they're very approachable 
          and very accommodating. I will definitely come back here 
          again.
        </p>
        <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Reach Us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248683.32169312614!2d123.60811754952071!3d13.119643198288678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a101687e9bf8a7%3A0x305252e78d14537a!2sLegazpi%20City%2C%20Albay!5e0!3m2!1sen!2sph!4v1775985721102!5m2!1sen!2sph"loading="lazy"></iframe>
    </div>
  <div class="col-lg-4 col-md-4">
    <div class="bg-white p-4 rounded shadow mb-4">
      <h5>Call Us</h5>
      <a href="tel: 09672063219" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone"></i> 09672063219
      </a>
      <br>
      <a href="tel: 09672063219" class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-telephone"></i> 09672063219
      </a>
    </div>
    <!-- Follow Us -->
    <div class="bg-white p-4 rounded shadow flex-fill">
      <h5>Follow Us</h5>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i> Twitter
        </span>
      </a>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i> Facebook
        </span>
      </a>
      <a href="#" class="d-inline-block">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i> Instagram
        </span>
      </a>
    </div>
  </div>
</div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<style>
  .swiper {
    width: 100%;
    height: 450px; 
  }

  .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
</style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerview: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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