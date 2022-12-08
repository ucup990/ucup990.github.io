<?php
session_start();
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
    # code...
}
?>
<!------------------made with love......-->
<!DOCTYPE html>
<html>

<head>
    <html lang="en">
    <link rel="icon" href="img\fresh.png" height="20%" />
    <title>Meat Page</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="online Vegetables,fruits and Meat ,online Vegetables, fruits and Meat chennai,online Vegetables, fruits and Meat shopping,online Vegetables, fruits and Meat store,online supermarket,Vegetables, fruits and Meat chennai, buy Vegetables, fruits and Meat online,online Vegetables, fruits and Meat purchase,online vegetable store" />
    <meta name="description" content="Buy fresh Vegetables, fruits and Meat at online store of Natuna Indonesia. Online Supermarket includes fresh vegetable,fruits,greens,Meat. online Vegetables, fruits and Meat Shopping now made easy. Order Vegetables, fruits Meat online with door step delivery all over Chennai at the best price & quality with get free home delivery." />


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
                <li class="nav-item active">
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

    <div class="container-fluid">
        <div class="container vegetables">
            <div class="container Meat">
                <h3>Meat</h3>
                <form>
                    <select>
                        <option value="1">Defualt Sorting</option>
                        <option value="2">Sort By Price</option>
                        <option value="3">Sort By Popularity</option>
                        <option value="4">Sort By Sale</option>
                        <option value="5">Sort By Rating</option>
                    </select>
                    <span><i class='bx bx-chevron-down'></></span>
                </form>
                <hr>


            </div>

        </div>

        <!---===-------------Meat------------>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="img/meat/ayam.png" width="100%" height="300px" alt="">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Ayam</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">50/-</i>|
                            <span>500gm</span><i aria-hidden="true">25/-</i>|
                            <span>250gm</span><i aria-hidden="true">12/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/ayam.png">
                                <input type="hidden" name="Iteamname" value="ayam">
                                <input type="hidden" name="price" value="50">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="img/meat/bebek.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Bebek</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">50/-</i>|
                            <span>500gm</span><i aria-hidden="true">25/-</i>|
                            <span>250gm</span><i aria-hidden="true">12/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/bebek.png">
                                <input type="hidden" name="Iteamname" value="bebek">
                                <input type="hidden" name="price" value="50">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="thumbnail">
                        <img src="img/meat/belut.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Belut</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">35/-</i>|
                            <span>500gm</span><i aria-hidden="true">18/-</i>|
                            <span>250gm</span><i aria-hidden="true">9/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/belut.png">
                                <input type="hidden" name="Iteamname" value="belut">
                                <input type="hidden" name="price" value="35">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>




                </div>

                <div class="col-md-3">

                    <div class="thumbnail">
                        <img src="img/meat/domba.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Domba</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">24/-</i>|
                            <span>500gm</span><i aria-hidden="true">12/-</i>|
                            <span>250gm</span><i aria-hidden="true">6/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/domba.png">
                                <input type="hidden" name="Iteamname" value="domba">
                                <input type="hidden" name="price" value="24">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="img/meat/kambing.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>kambing</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">50/-</i>|
                            <span>500gm</span><i aria-hidden="true">25/-</i>|
                            <span>250gm</span><i aria-hidden="true">12/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/kambing.png">
                                <input type="hidden" name="Iteamname" value="kambing">
                                <input type="hidden" name="price" value="50">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="img/meat/lele.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>lele</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">50/-</i>|
                            <span>500gm</span><i aria-hidden="true">25/-</i>|
                            <span>250gm</span><i aria-hidden="true">12/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/lele.png">
                                <input type="hidden" name="Iteamname" value="lele">
                                <input type="hidden" name="price" value="50">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="thumbnail">
                        <img src="img/meat/sapi.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Sapi</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">35/-</i>|
                            <span>500gm</span><i aria-hidden="true">18/-</i>|
                            <span>250gm</span><i aria-hidden="true">9/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/sapi.png">
                                <input type="hidden" name="Iteamname" value="sapi">
                                <input type="hidden" name="price" value="35">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="thumbnail">
                        <img src="img/meat/udang.png" width="100%" height="300px">
                        <div class="caption">
                            <a href="product-detail.php">
                                <p>Udang</p>
                            </a>
                        </div>
                        <div class="price">
                            <span>1Kg</span><i aria-hidden="true">24/-</i>|
                            <span>500gm</span><i aria-hidden="true">12/-</i>|
                            <span>250gm</span><i aria-hidden="true">6/-</i>
                            <form method="post" action="manage.php">
                                <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                                <input type="hidden" name="image" value="img/meat/udang.png">
                                <input type="hidden" name="Iteamname" value="udang">
                                <input type="hidden" name="price" value="24">
                                <input type="hidden" name="quantity" value="1kg">
                            </form>
                        </div>
                    </div>
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

        <div class="container-fluid footer">

            <h3>© 2022 Fresh-Mart . All Rights Reserved | Design by Mohd Yusuf Ramdhani</h3>
        </div>

        <script>
            function msg() {
                alert("Add successfully..");
            }
        </script>

</body>

</html>