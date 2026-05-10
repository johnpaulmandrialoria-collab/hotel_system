<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbes Hotel - CONTACT</title>
    <?php require('inc/links.php'); ?>
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<body>

<?php require('inc/header.php'); ?>
<?php

    if(isset($_POST['send']))
    {
      $frm_data = filteration($_POST);

      $query = "INSERT INTO user_queries (name, email, subject, message) VALUES (?, ?, ?, ?)";
      $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

      $result = insert($query, $values, 'ssss');
      if($result==1){
        alert('success', 'Mail sent!');
      }
      else{
        alert ('error', 'Server Down! Try again later.');
      }
    }

?>
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    FC hotel at your service,we are here to serve you the best
    experience in your staycation. In this hotel, <br> we are very 
    approachable and very accommodating, we will make sure that 
    you will have a good stay in our hotel.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
        
        <h5>Address</h5>
        <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-geo-alt-fill"><?php echo $contact_r['address'] ?></i> 
        </a>

        <h5 class="mt-4">Call Us</h5>
        <a href="tel: <?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill">+63</i> <?php echo $contact_r['pn1'] ?>
        </a>
        <br>
        <?php
          if ($contact_r['pn2'] != '') {
            echo <<<DATA
              <a href="tel: {$contact_r['pn2']}" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone-fill">+63</i> {$contact_r['pn2']}
              </a>
            DATA;
          }
        ?>
        
        <h5 class="mt-4">Email</h5>
        <a href="mailto: <?php echo $contact_r['email'] ?>" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email'] ?>
        </a>
        <h5 class="mt-4">Follow Us</h5>
        <?php
        if ($contact_r['twitter'] != '') {
          echo <<<DATA
            <a href="{$contact_r['twitter']}" class="d-inline-block text-dark fs-5 me-2">
              <i class="bi bi-twitter me-1"></i>
            </a>
          DATA;
        }
        ?>
      
      <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark fs-5 me-2">
          <i class="bi bi-facebook me-1"></i>
      </a>
      <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark fs-5">
        <i class="bi bi-instagram me-1"></i>
      </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
        <form method="POST">
          <h5>Send us a message</h5>
            <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Name</label>
              <input name="name" required type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Email</label>
              <input name="email" required type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Subject</label>
              <input name="subject" required type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
              <label  class="form-label" style="font-weight: 500;">Message</label>
              <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>



<?php require('inc/footer.php'); ?>

</body>
</html>