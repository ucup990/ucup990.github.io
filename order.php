<?php
session_start();
$count = 0;
if (isset($_SESSION['order'])) {
  $count = count($_SESSION['order']);
  # code...
}
?>
<!------------------made with love......-->
<!DOCTYPE html>
<html>

<head>
  <html lang="en">
  <link rel="icon" href="img\fresh.png" height="20%" />
  <title>Order Page</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store" />
  <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens." />


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
    <a class="navbar-brand" href="index.php">Fresh Mart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link" href="indexx.php">Home</a>
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

  <div class="container">
    <div class="col-md-8" style="margin: auto;">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Order Details</h4>

      </div>
      <div class="modal-body mx-3 text-success">
        <form method="post">
          <div class="form-row ">
            <div class="form-group col-md-6">
              <label for="inputname">Nama</label>
              <input type="text" name="name" class="form-control" id="inputName" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPhone">Phone</label>
              <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Locality / Main Streat...">
          </div>
          <div class="form-group">
            <label for="inputopsi_pengiriman">Opsi Pengiriman</label>
            <input type="text" name="opsi_pengiriman" class="form-control" id="inputopsi_pengiriman" placeholder="Reguler, Kargo, Antar Jemput">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" name="city" class="form-control" id="inputCity" placeholder="City">
            </div>
            <div class="form-group col-md-4">
              <label for="inputno_ktp">No KTP</label>
              <input type="text" name="no_ktp" class="form-control" id="inputno_ktp" placeholder="No KTP">
            </div>
            <div class="form-group col-md-2">
              <label for="inputzip">Zip</label>
              <input type="text" name="zip" class="form-control" id="inputzip" placeholder="Zip">
            </div>
          </div>
          <input type="submit" name="sub" class="btn btn-primary bg-success text-white" value="Check Out">
          <a href="cetakfaktur.php">Cetak Struk</a>
        </form>
      </div>
    </div>
  </div>

  <!---footer part--->

  <div class="container-fluid button_link">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <h3>INFORMATION</h3>
          <div class="imp_link">
            <a href="index.php">Home</a>
            <a href="Meat.php">Meat</a>
            <a href="vegetables.php">Vegetables</a>
            <a href="Fruitd.php">Fruits</a>
            <a href="Contact.php">Contact</a>
          </div>
        </div>


        <div class="col-md-4">
          <h3>MY ACCOUNT</h3>
          <div class="imp_link">
            <a href="login.php">Login</a>
            <a href="">Logout</a>
            <a href="Logup.php">Logup</a>
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


  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>

  <div class="container-fluid footer">

    <h3>© 2022 Fresh Mart . All Rights Reserved | Design by Mohd Yusuf Ramdhani</h3>
  </div>

  <script>
    //pageup.....

    var mybutton = document.getElementById('top');

    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function pageup() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>

<?php

if (isset($_POST['sub'])) {

  include('db.php');

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat'];
  $opsi_pengiriman = $_POST['opsi_pengiriman'];
  $city = $_POST['city'];
  $no_ktp = $_POST['no_ktp'];
  $zip = $_POST['zip'];

  $sql = "INSERT INTO `user_de`( `name`, `phone`, `alamat`, `opsi_pengiriman`, `city`, `no_ktp`, `zip`) VALUES ('$name','$phone','$alamat','$opsi_pengiriman','$city','$no_ktp','$zip')";

  if (mysqli_query($conn, $sql) == 1) {
    $order = mysqli_insert_id($conn);
    $sql = "INSERT INTO `user_order`(`id`, `itename`, `price`, `qunt`, `imgpath`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "zip", $order, $order_name, $order_price, $order_quantity, $path);
      foreach ($_SESSION['cart'] as $key => $value) {
        $order_name = $value['Iteamname'];
        $order_price = $value['price'];
        $order_quantity = $value['quantity'];
        $path = $value['image'];

        mysqli_stmt_execute($stmt);
      }
      unset($_SESSION['cart']);

      echo "<script>alert('order placed...' );window.open('indexx.php','_self')</script>";
    } else {
    }
    //echo "<script>alert('Ordered Sucessfully..');window.open('indexx.php','_self')</script>";
  } else {
    echo "<script>alert('Some thing Wrong Try Again..');</script>";
  }
}


//mysqli_close($conn);
?>