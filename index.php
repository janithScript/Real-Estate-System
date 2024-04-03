<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    
    <title>Real Estate</title>
    <link href="./style.css" type="text/css" rel="stylesheet" />

     <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

 <!-- responsive style -->
 <link href="css/responsive.css" rel="stylesheet" />

<style>
    /* slider section */
.slider_section {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    position: relative;
  }
  
  .slider_section .row {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  
  .slider_section #customCarousel1 {
    width: 100%;
    position: unset;
  }
  
  .slider_section .detail-box {
    color: #ffffff;
  }
  
  .slider_section .detail-box h1 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0;
  }
  
  .slider_section .detail-box p {
    margin: 25px 0;
  }
  
  .slider_section .detail-box .btn-box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 0 -5px;
  }
  
  .slider_section .detail-box .btn-box a {
    margin: 5px;
    text-align: center;
    width: 165px;
  }
  
  .slider_section .detail-box .btn-box .btn1 {
    display: inline-block;
    padding: 10px 15px;
    background-color: #19c880;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: none;
  }
  
  .slider_section .detail-box .btn-box .btn1:hover {
    background-color: #118454;
  }
  
  .slider_section .detail-box .btn-box .btn2 {
    display: inline-block;
    padding: 10px 15px;
    background-color: #8019c8;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    border: none;
  }
  
  .slider_section .detail-box .btn-box .btn2:hover {
    background-color: #541184;
  }
  
  .slider_section .img-box img {
    width: 100%;
  }
  
  .slider_section .carousel-indicators {
    position: unset;
    margin: 0;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-top: 45px;
  }
  
  .slider_section .carousel-indicators li {
    background-color: #ffffff;
    width: 15px;
    height: 15px;
    border-radius: 100%;
    opacity: 1;
  }
  
  .slider_section .carousel-indicators li.active {
    width: 23px;
    height: 23px;
    background-color: #19c880;
  }
  
  .slider_bg_box {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    overflow: hidden;
  }
  
  .slider_bg_box img {
    height: 100%;
    width: 100%;
  }
  #buy {
  background-color: #ffff;
  margin-bottom: 20px;
}
.btn-box a {
  text-decoration: none;
}
  
</style>
</head>
<body>
    
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="./index.php">
            <span>
              Real Estate
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="./property.php">Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Mini_project/buy.php">Buy Now</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.php">Contact Us</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="#register">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

     <!-- slider section -->
     <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="./images/bg2.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Make your dream home
                    </h1>
                   
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Choose your place
                    </h1>
                   
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      With full of benifits
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Freedom of life
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      This is your place
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


 <!-- product section -->

 <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Top houses
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/home1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kottawa road, Homagama.
                </h6>
                <h5>
                  <span>LKR.</span> 3000000/=
                </h5>
              </div>
              <div class="like">
               
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/home2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Nudedoda road, Thunmulla.
                </h6>
                <h5>
                  <span>LkR.</span> 4500000/=
                </h5>
              </div>
              <div class="like">
             
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/home3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kaduwela road, Colombo.
                </h6>
                <h5>
                  <span>LKR.</span> 3000000/=
                </h5>
              </div>
              <div class="like">
           
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Top Lands
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/land1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Kilinochchi road, Jaffna.
                </h6>
                <h5>
                  <span>LKR.</span> 500000/=
                </h5>
              </div>
              <div class="like">
                
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/land2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Rathmalana Road, Nugegoda.
                </h6>
                <h5>
                  <span>LKR.</span> 7000000/=
                </h5>
              </div>
              <div class="like">
               
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="./images/land3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Negombo
                </h6>
                <h5>
                  <span>LKR.</span> 8000000/=
                </h5>
              </div>
              <div class="like">
               
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="./buy.php#buy">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end product section -->

  <!------- register ------>

<section class="contact_section layout_padding" id="register">
    <div class="container">
        <div class="heading_container">
        <h2>
          Register Now
        </h2>
        </div>
        <div class="register">
            <form method="POST" action="./register.php">
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="Enter your name"> <br><br>
                <label for="email"> E-mail : </label>
                <input type="email" name="email" placeholder="Enter your email"><br> <br>
                <label for="pwd">Password : </label>
                <input type="password" name="pwd" placeholder="Enter your password"> <br> <br>
                <input type="submit" value="Register" name="submit">

            </form>
        </div>
    </div>
</section>

<!-- info section -->
<section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Real Estate
        </h2>
      </div>
      <div class="row">

        
        

    

  <!-- end info_section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="./index.php">G.M.J.C Sugathapala (516970780)</a>
      </p>
    </div>
  </section>
  <!-- footer section -->


  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>