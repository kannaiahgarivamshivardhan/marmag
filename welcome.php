<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Marmag</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="home.html">Marmag</a>
              </div>
            </header>

            <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Hello, Welcome to <em>Marmag </em></h4>
                            <span>An IIT madras Incubate Company</span>
                            <p>We are a company which provides innovative, economic and efficient infrastructure and engineering solutions in India and across the globe. We plan to harness the technical talent pool. We would like to have physical bases of our company in India thereby provide quality employment opportunities.</p>
                            <div class="primary-button">
                              <a href="https://marmag.in/">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            

            <!-- Top Image -->
            <section class="top-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <img src="#" alt="">
                    <div class="down-content">
                      <h4>Plan Your Buldings</h4>
                      
                      <div class="primary-button">
                        <a href="/quickcalculation.html">Quick Calculation</a>
                        <p>WE WILL WRITE ABOUT QUICK CALCULATION</p>
                      </div>
                      <div class="primary-button">
                        <a href="#">DETAILED ESTIMATE</a>
                        <p>WE WILL WRITE ABOUT DETAILED ESTIMATE
                      <div class="primary-button">
                        <a href="#">CUSTOMER BUILDING CALCULATION</a>
                        <p>WE WILL WRITE ABOUT CUSTOMER BUILDING CALCULATION</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


            

            

            

          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <img class="proimg" src="https://media-exp1.licdn.com/dms/image/C510BAQHsz_4VngymXg/company-logo_200_200/0/1547817037812?e=2159024400&v=beta&t=WFLdS4Ti69lyqbKYqLcwuVCTVF_2-eI7mpzvs7jLvek" alt="">
                <li><a href="/index.html">Profile</a></li>
                <li><a href="home.html">Homepage</a></li>
                
                
                <li>
                  <span class="opener">Calculations</span>
                  <ul>
                    <li><a href="/quickcalculation.html">Quick Calculation</a></li>
                    <li><a href="#">Detailed Estimate</a></li>
                    <li><a href="#">Custom Bulding Calculation</a></li>
                  </ul>
                </li>
                
                <li><a href="/assets/Weight Estimation User Manual-converted.pdf">User Manual</a></li>
                <li><a href="">Certificate</a></li>
                <li><a href="/privacypolicy.html">Privacy Policy</a></li>
               
                <li><a href="/contact.html">Contact Us</a></li>
                
              </ul>
            </nav>

            

            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; YEAR Company Name
              <br>Designed by <a rel="nofollow" href="#">Marvel Marmag</a></p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>

</html>