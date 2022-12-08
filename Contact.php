<?php
session_start();
$count = 0;
if (isset($_SESSION['Contact'])) {
  $count = count($_SESSION['Contact']);
  # code...
}
?>
<!------------------made with love......-->
<!DOCTYPE html>
<html>

<head>
  <html lang="en">
  <link rel="icon" href="img\fresh.png" height="20%" />
  <title>Contact Us</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store" />
  <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens. online Vegetables and fruits Shopping now made easy. Order Vegetables and fruits online with door step delivery all over Chennai at the best price & quality with get free home delivery." />


  <!-- //for-mobile-apps -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!-- bootystrap java script---->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

  <!----coustum styles sheet--->
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

  <div class="container-fluid head">
    <div class="row">
      <div class="col-md-8">

        <div class="icon">
          <a href="https://www.facebook.com/kenapabaik/"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/mohdyusuframdhani_/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://api.whatsapp.com/send?phone=6281271686799"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          <a href="https://mail.google.com/mail/u/0/#inbox"> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
        </div>

      </div>

      <div class="col-md-4 ">
        <div class="icon2">
          <i class="fa fa-mobile" aria-hidden="true"></i>
          <p>+62 81271686799</p>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="brand">
          <h2><span>Fresh</span>-Mart</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form">
          <form method="post">
            <input type="search" name="search" required="" placeholder="Search your Iteams...">
            <input type="submit" name="">
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon3">
          <a href="https://goo.gl/maps/wHoApX2kKDuJtEwz6"> <i class="fa fa-map-marker" aria-hidden="true">Location</i></a>
          <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Add To Card(<?php echo $count; ?>)</i></a>
        </div>

      </div>


    </div>

  </div>

  <!--------------------navbar....================------------m_c_1_4_3-------------->

  <nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">Fresh Mart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link" href="indexx.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="Meat.php">Meat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vegetables.php">Vegetables</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Fruitd.php">Fruits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Login</a>
        </li>

      </ul>

    </div>
  </nav>

  <!--end of nav---mc_-->
  <div class="container">
    <div class="Contact">
      <h3> CONTACT US</h3>
      <hr>
    </div>

  </div>

  <div class="container Contact">
    <div class="row">
      <div class="col-md-6 col-xs-12">

        <h4>SEND A MESSAGE</h4>
        <form method="post" name="form" onsubmit="return(validate())">
          <div class="form-group">
            <label>Name:</label>
            <input name="fname" type="text" class="form-control" id="fname" placeholder="Enter your Full Name">
          </div>

          <div class="form-group">
            <label>Phone:</label>
            <input name="phone" type="text" class="form-control" placeholder="Enter your Phone Number">
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input name="email" type="text" class="form-control" placeholder="Enter your Email Name">
          </div>

          <div class="form-group">
            <label>Subject:</label>
            <input name="Subject" type="text" class="form-control" type="text" placeholder="Enter your Subject">
          </div>

          <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" placeholder="Type Something" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <input type="submit" name="sub" value="Send Now">
        </form>


      </div>
      <div class="col-md-6 col-xs-12">

        <h4>LOCATION & ADDRESS</h4>


        <p>Email : mohdyusuframdhani0412@gmail.com</p>
        <p>Phone : +62 81271686799</p>
        <p>Address : Jalan Adam Malik, Air Batu, Bandarsyah.Kecamatan Bunguran timur, Natuna. Kepulauan Riau</p>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.8234453343387!2d108.37093592917608!3d3.92154403778669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ec6bc9d253e06b%3A0x7ab69a0fcc4e598b!2sJl.%20Adam%20Malik%2C%20Bandarsyah%2C%20Kec.%20Bunguran%20Tim.%2C%20Kabupaten%20Natuna%2C%20Kepulauan%20Riau%2029783!5e1!3m2!1sid!2sid!4v1660469930490!5m2!1sid!2sid" width="100%" height="50%" style="border-radius:10px; background: #0b650c ; " allowfullscreen="" loading="lazy"></iframe>

      </div>

    </div>

  </div>
  <br>
  <!---footer part--->

  <div class="container-fluid button_link">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <h3>INFORMATION</h3>
          <div class="imp_link">
            <a href="indexx.php">Home</a>
            <a href="Meat.php">Meat</a>
            <a href="vegetables.php">Vegetables</a>
            <a href="Fruitd.php">Fruits</a>
            <a href="Contact.php">Contact</a>
          </div>
        </div>


        <div class="col-md-4">
          <h3>MY ACCOUNT</h3>
          <div class="imp_link">
            <a href="index.php">Login</a>
            <a href="">Logout</a>
            <a href="">Logup</a>
            <a href="">FaQ</a>
            <a href="">Sitemap</a>
          </div>

        </div>

        <div class="col-md-4">
          <h3>FOLLOW US</h3>
          <div class="imp_link">
            <a href="https://www.facebook.com/kenapabaik/"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/mohdyusuframdhani_/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://api.whatsapp.com/send?phone=6281271686799"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="https://mail.google.com/mail/u/0/#inbox"> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
          </div>
        </div>

      </div>

    </div>

  </div>



  <div class="container-fluid footer">

    <h3>© 2022 Fresh Mart . All Rights Reserved | Design by Mohd Yusuf Ramdhani</h3>
  </div>
  <script type="text/javascript" src="js/javascript.js"></script>
</body>

</html>