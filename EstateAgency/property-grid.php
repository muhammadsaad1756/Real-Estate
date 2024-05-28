<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>EstateAgency Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
    
    .form-container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .form-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
    }
    .form-group input, .form-group textarea {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .form-group textarea {
      resize: vertical;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: none;
      background: #007bff;
      color: white;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .form-group button:hover {
      background: #0056b3;
    }
    .property-grid {
      max-width: 800px;
      margin: 0 auto;
    }

    .property {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 20px;
    }

    .property h3 {
      margin-top: 0;
    }

    .property p {
      margin: 5px 0;
    }
  </style>
  </head>

  <body>
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed ion-ios-close"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="Type">Keyword</label>
                <input
                  type="text"
                  class="form-control form-control-lg form-control-a"
                  placeholder="Keyword"
                />
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="Type">Type</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="Type"
                >
                  <option>All Type</option>
                  <option>For Rent</option>
                  <option>For Sale</option>
                  <option>Open House</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="city">City</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="city"
                >
                  <option>All City</option>
                  <option>Alabama</option>
                  <option>Arizona</option>
                  <option>California</option>
                  <option>Colorado</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bedrooms">Bedrooms</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="bedrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="garages">Garages</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="garages"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="bathrooms">Bathrooms</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="bathrooms"
                >
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group">
                <label for="price">Min Price</label>
                <select
                  class="form-control form-control-lg form-control-a"
                  id="price"
                >
                  <option>Unlimite</option>
                  <option>$50,000</option>
                  <option>$100,000</option>
                  <option>$150,000</option>
                  <option>$200,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Property</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--/ Form Search End /-->

    <!--/ Nav Star /-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#navbarDefault"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html"
          >Estate<span class="color-b">Agency</span></a
        >
        <button
          type="button"
          class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-expanded="false"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div
          class="navbar-collapse collapse justify-content-center"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="property-grid.php">Property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog-grid.html">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="property-single.html"
                  >Property Single</a
                >
                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                <a class="dropdown-item" href="agent-single.html"
                  >Agent Single</a
                >
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-expanded="false"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
      </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Search Form Start /-->
    <section class="section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-box">
              <form action="" method="GET" class="form-a">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control form-control-lg form-control-a"
                        placeholder="Keyword"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select
                        class="form-control form-control-lg form-control-a"
                        id="Type"
                      >
                        <option>All Type</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <select
                        class="form-control form-control-lg form-control-a"
                        id="city"
                      >
                        <option>All City</option>
                        <option>Alabama</option>
                        <option>Arizona</option>
                        <option>California</option>
                        <option>Colorado</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-b">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Search Form End /-->

    <!-- houses form -->
    <div class="form-container" style="margin-top: 49px;">
  <h2>Add New House Details</h2>
  <form action="submit_house.php" method="POST">
    <div class="form-group">
      <label for="house-name">Name</label>
      <input type="text" id="house-name" name="name" required>
    </div>
    <div class="form-group">
      <label for="house-rooms">Rooms</label>
      <input type="number" id="house-rooms" name="rooms" required>
    </div>
    <div class="form-group">
      <label for="house-baths">Baths</label>
      <input type="number" id="house-baths" name="baths" required>
    </div>
    <div class="form-group">
      <label for="house-price">Price</label>
      <input type="number" id="house-price" name="price" required>
    </div>
    <div class="form-group">
      <label for="house-description">Description</label>
      <textarea id="house-description" name="description" rows="5" required></textarea>
    </div>
    <input type="hidden" name="id" value="0"> <!-- hidden field for ID, assuming auto-increment -->
    <div class="form-group">
      <button type="submit">Submit House</button>
    </div>
  </form>
</div>

    <!--/ Intro Single star /-->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav
              aria-label="breadcrumb"
              class="breadcrumb-box d-flex justify-content-lg-end"
            >
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    
    <div class="property-grid">
  <h2>Properties</h2>
   <!-- PHP code to fetch and display dynamic properties -->
   <?php
  // Database configuration
  $servername = "localhost";
  $username = "root"; // change to your database username
  $password = ""; // change to your database password
  $dbname = "real-estate"; // change to your database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Fetch dynamic properties from database
  $sql = "SELECT * FROM houses";
  $result = $conn->query($sql);

  // Display dynamic properties
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<div class="property">';
      echo '<h3>' . $row["Name"] . '</h3>';
      echo '<p>Rooms: ' . $row["Rooms"] . '</p>';
      echo '<p>Baths: ' . $row["Baths"] . '</p>';
      echo '<p>Price: $' . $row["price"] . '</p>';
      echo '<p>Description: ' . $row["Description"] . '</p>';
      echo '</div>';
    }
  } else {
    echo "No properties found";
  }

  $conn->close();
  ?>
  </div>
    <!--/ Property Grid End /-->

    <!--/ footer Star /-->
    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">EstateAgency</h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                  Enim minim veniam quis nostrud exercitation ullamco laboris
                  nisi ut aliquip exea commodo consequat duis sed aute irure.
                </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                  <li class="color-a">
                    <span class="color-text-a">Phone .</span>
                    contact@example.com
                  </li>
                  <li class="color-a">
                    <span class="color-text-a">Email .</span> +54 356 945234
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">The Company</h3>
              </div>
              <div class="w-body-a">
                <div class="w-body-a">
                  <ul class="list-unstyled">
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Agent Admin</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Affiliate</a>
                    </li>
                    <li class="item-list-a">
                      <i class="fa fa-angle-right"></i>
                      <a href="#">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand">International sites</h3>
              </div>
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">China</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Philippines</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="nav-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">Home</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">About</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Property</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright
                <span class="color-a">EstateAgency</span> All Rights Reserved.
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ Footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
