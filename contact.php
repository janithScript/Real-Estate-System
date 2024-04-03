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

/* header section */

.hero_area {
    position: relative;
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  
  .sub_page .hero_area {
    min-height: auto;
  }
  
  .sub_page .header_section {
    margin-top: 0;
    -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.25);
  }
  
  .header_section .container-fluid {
    padding-right: 25px;
    padding-left: 25px;
  }
  
  .navbar-brand span {
    font-weight: bold;
    color: #000000;
    font-size: 24px;
    text-transform: uppercase;
  }
  
  .custom_nav-container {
    padding: 15px 0;
  }
  
  .custom_nav-container .navbar-nav {
    margin: auto;
  }
  
  .custom_nav-container .navbar-nav .nav-item .nav-link {
    padding: 5px 25px;
    color: #000000;
    text-align: center;
    text-transform: uppercase;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    
  }
  
  .custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link {
    color: #ffffff;
    background-color: #19c862;
  }
  
  .custom_nav-container .nav_search-btn {
    width: 35px;
    height: 35px;
    padding: 0;
    border: none;
    color: #000000;
  }
  
  .custom_nav-container .nav_search-btn:hover {
    color: #000000;
  }
  
  .custom_nav-container .navbar-toggler {
    outline: none;
  }
  
  .custom_nav-container .navbar-toggler {
    padding: 0;
    width: 37px;
    height: 42px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }
  
  .custom_nav-container .navbar-toggler span {
    display: block;
    width: 35px;
    height: 4px;
    background-color: #000000;
    margin: 7px 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    position: relative;
    border-radius: 5px;
    transition: all 0.3s;
  }
  
  .custom_nav-container .navbar-toggler span::before, .custom_nav-container .navbar-toggler span::after {
    content: "";
    position: absolute;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #000000;
    top: -10px;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
  }
  
  .custom_nav-container .navbar-toggler span::after {
    top: 10px;
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] span {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] span::before, .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
    top: 0;
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-1 {
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    margin: 0;
    margin-bottom: -4px;
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-2 {
    display: none;
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-3 {
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    margin: 0;
    margin-top: -4px;
  }
  
  .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-1,
  .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-2,
  .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-3 {
    -webkit-transform: none;
            transform: none;
  }

/*  contact section */
    .contact_section .form_container input::-webkit-input-placeholder {
  color: #444;
}

.contact_section .form_container input:-ms-input-placeholder {
  color: #444;
}

.contact_section .form_container input::-ms-input-placeholder {
  color: #444;
}

.contact_section .form_container input::placeholder {
  color: #444;
}

.contact_section .form_container input.message-box {
  height: 120px;
}

.contact_section .form_container button {
  border: none;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 55px;
  background-color: #8019c8;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: none;
}

.contact_section .form_container button:hover {
  background-color:#541184;;
}

.contact_section .map_container {
  height: 450px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  padding: 0;
}

.contact_section .map_container .map {
  height: 100%;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.contact_section .map_container .map #googleMap {
  height: 100%;
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
              <li class="nav-item ">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="./property.php">Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Mini_project/buy.php">Buy Now</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./contact.php">Contact Us</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="./index.php#register">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="./cont.action.php" method="POST">
              <div>
                <input type="text" name="usr" placeholder="Registered Username" />
              </div>
              <div>
                <input type="text" name="number" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" name="email1" placeholder="E-mail" />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button type="submit" name="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
            <div class="map_container">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d506790.86723333586!2d81.05231934604008!3d7.090756859072238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTMnNDUuMiJOIDgxwrAxMyc0OS45IkU!5e0!3m2!1sen!2slk!4v1700108503070!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
           </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end contact section -->



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
  <!-- Google Map -->
  <!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script-->
  <!-- End Google Map -->
</body>
</html>