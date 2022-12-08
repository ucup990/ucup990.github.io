  <?php

  session_start();

  $count = 0;
  if (isset($_SESSION['about'])) {
    $count = count($_SESSION['about']);

    # code...
  }
  ?>



  <!------------------made with love......-->

  <!DOCTYPE html>
  <html>

  <head>

    <html lang="en">
    <link rel="icon" href="img\th (1).jfif" height="20%" />
    <title>Index page</title>
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
            <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
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
      <a class="navbar-brand" href="index.php">Fresh Mart</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item ">
            <a class="nav-link" href="indexx.php">Home</a>
          </li>
          </li>
          <li class="nav-item">
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

    <div class="container-fluid about" style="background-image:url('img/61gUGe.jpg');">
      <div class="container sub_about">
        <h3>ABOUT US</h3>

        <p>Fresh-Mart Adalah Situs Belanja Online Dimana Pelanggan Dapat Memesan Buah, Sayuran, dan daging Segar. Saat Ini Beroperasi Hanya Di Kabupaten Natuna. Fresh-Mart Menawarkan Lebih Banyak Varietas Buah Dan Sayuran Dengan Kualitas Dan Kesegaran Terbaik.</p>

        <p>Fresh-Mart Menyediakan Buah, Sayur dan daging Dari Petani Untuk Pelanggannya. Pelanggan Kami Dapat Memilih Lebih Banyak Variasi Dan Memesan Dengan Mudah Di Mana Saja Dan Membawa Suasana Seperti Desa Ke Tempat Mereka Dan Memiliki Kepuasan Akan Kesegaran Dan Kualitas Buah, Sayuran dan daging Seperti Desa.</p>

        <p>Kebijakan Pembayaran dan Logistik</p>
        <p> 1. Bayar di tempat.</p>
        <p> 2. Fresh-Mart menerima semua kartu debit, kartu kredit.</p>
        <p> 3. Pelanggan dapat menggunakan gateway pembayaran.</p>
        <p> 4. Batas Daerah Pengiriman masih sebatas pulau di sekitar natuna, Tanjungpinang, Jakarta, Surabaya, Pontianak, Batam, dan Pekanbaru.</p>
        <p> 5. Untuk Kawasan Natuna pengiriman itu menggunakan NatunaJek dan NatunaKargo.</p>
      </div>

    </div>

    <!---footer part--->

    <div class="container-fluid button_link">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3>INFORMATION</h3>
            <div class="imp_link">
              <a href="indexx.php">Home</a>
              <a href="vegetables.php">Vegetables</a>
              <a href="Fruitd.php">Fruits</a>
              <a href="Contact.php">Contact</a>
              <a href="about.php">About</a>
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
              <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href=""> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div>



    <div class="container-fluid footer">

      <h3>© 2022 Fresh-Mart . All Rights Reserved | Design by Mohd Yusuf Ramdhani</h3>
    </div>

  </body>

  </html>