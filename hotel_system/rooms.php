<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbes Hotel - ROOMS</title>
    <?php require('inc/links.php'); ?>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
  <div class="h-line bg-dark"></div>
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                <label  class="form-label">Check-In</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label  class="form-label">Check-Out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                <label  class="form-check-label" for="f1">Facility One</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                <label  class="form-check-label" for="f2">Facility Two</label>
                </div>
                <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                <label  class="form-check-label" for="f3">Facility Three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                <div class="d-flex">
                  <div class ="me-3">
                  <label  class="form-label">Adults</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div>
                  <label  class="form-label">Children</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                </div>
              </div>
          </div>
        </div>
      </nav>
    </div>

  <div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">

      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="images/rooms/1.jpg" class="img-fluid rounded w-100">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Premium Room Double Bed</h5>

        <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge bg-light text-dark mb-2">1 Room</span>
          <span class="badge bg-light text-dark mb-2">2 Bathrooms</span>
          <span class="badge bg-light text-dark mb-2">1 Balcony</span>
          <span class="badge bg-light text-dark mb-2">2 Sofa</span>
        </div>

        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge bg-light text-dark mb-2">Wifi</span>
          <span class="badge bg-light text-dark mb-2">Television</span>
          <span class="badge bg-light text-dark mb-2">AC</span>
          <span class="badge bg-light text-dark mb-2">Room Heater</span>
        </div>

        <div class="guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge bg-light text-dark mb-2">5 Adults</span>
          <span class="badge bg-light text-dark mb-2">4 Children</span>
        </div>
      </div>
      <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
        <h5 class="mb-3">₱8,000 per night</h5>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
      </div>

    </div>
  </div>
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">

      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="images/rooms/2.jpg" class="img-fluid rounded w-100">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Simple Single Bed Room</h5>

        <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge bg-light text-dark mb-2">1 Room</span>
          <span class="badge bg-light text-dark mb-2">2 Bathrooms</span>
          <span class="badge bg-light text-dark mb-2">1 Balcony</span>
        </div>

        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge bg-light text-dark mb-2">Wifi</span>
          <span class="badge bg-light text-dark mb-2">Television</span>
          <span class="badge bg-light text-dark mb-2">AC</span>
        </div>

        <div class="guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge bg-light text-dark mb-2">3 Adults</span>
          <span class="badge bg-light text-dark mb-2">3 Children</span>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <h5 class="mb-3">₱4,000 per night</h5>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
      </div>

    </div>
  </div>
  <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">

      <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
        <img src="images/rooms/3.jpg" class="img-fluid rounded w-100">
      </div>
      <div class="col-md-5 px-lg-3 px-md-3 px-0">
        <h5 class="mb-3">Luxury Single Bed Room</h5>

        <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge bg-light text-dark mb-2">3 Room</span>
          <span class="badge bg-light text-dark mb-2">2 Bathrooms</span>
          <span class="badge bg-light text-dark mb-2">1 Balcony</span>
          <span class="badge bg-light text-dark mb-2">3 Sofa</span>
        </div>

        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge bg-light text-dark mb-2">Wifi</span>
          <span class="badge bg-light text-dark mb-2">Television</span>
          <span class="badge bg-light text-dark mb-2">AC</span>
          <span class="badge bg-light text-dark mb-2">Room Heater</span>
        </div>

        <div class="guests">
          <h6 class="mb-1">Guests</h6>
          <span class="badge bg-light text-dark mb-2">4 Adults</span>
          <span class="badge bg-light text-dark mb-2">2 Children</span>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <h5 class="mb-3">₱6,000 per night</h5>
        <a href="#" class="btn btn-sm w-100 text-white custom-bg mb-2">Book Now</a>
        <a href="#" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
      </div>

    </div>
  </div>
</div>

  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>