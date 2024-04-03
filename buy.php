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
    #buy {
  background-color: #ffff;
  margin-top: 40px;
  margin-bottom: 20px;
}

#remove{
    margin-top: 40px;
  margin-bottom: 20px;
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
              <li class="nav-item active">
                <a class="nav-link" href="../Mini_project/buy.php">Buy Now</a>
              </li>
              <li class="nav-item">
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

    <!--------- add to cart ---------->

<section id="buy">
    <div class="container">
      <div class="heading_container">
          <h2>
              Add to cart
          </h2>
        </div>
      <div class="buying">
          <form method="POST" action="./cart.php">
              <label for="usrname">Registered username : </label>
              <input type="text" name="usrname" Placeholder="Enter your registered username">
              <label for="addrss">Property's address : </label>
              <input type="text" name="address" placeholder="Enter the address of the property">
              <label for="price">Price : </label>
              <input type="text" name="price" placeholder="Enter your price">
              <label for="type">Status : </label>
              <input type="text" name="type" placeholder="Enter 'Buy or Rent or Leased'">
              <input type="submit" value="Add to cart" name="submt">

          </form>
        </div>
    </div>
</section>

    <!--------- remove from cart ---------->

    <section id="remove">
    <div class="container">
      <div class="heading_container">
          <h2>
             Remove from the cart
          </h2>
        </div>
      <div class="buying">
          <form method="POST" action="./remove.php">
              <label for="usrname">Registered username : </label>
              <input type="text" name="usrname" Placeholder="Enter your registered username">
              <label for="type">Status : </label>
              <input type="text" name="type" placeholder="Enter 'Buy or Rent or Leased'">
              <input type="submit" value="Remove from the cart" name="submt">

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
</body>
</html>