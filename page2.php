<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>REPORT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

    <script>
      function pdf_generator()
      {
        const element = document.getElementById("pdf");
        html2pdf()
        .from(element)
        .save();
      }
    </script>
    
    

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
                <a href="home.php">MAGNUM</a>
              </div>
            </header>

            <!-- Page Heading -->
            <div id = "pdf" style = "margin-left: 50px;">
              <div class="col-md-10" align = "center">
                <fieldset>
                  <b><h3>PRELIMINARY MATERIAL TAKE OFF</h3></b>
                </fieldset>
              </div>
              <section class="forms">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="section-heading">
                        <div class="row">
                              <div class="col-md-10">
                                <img class="reportlogo" src="img/marvel.jpg">
                                <b><center><h7><fieldset>
                                PROJECT : 
                                <span type="text" id="project" ></span>
                                </fieldset></h7></center></b>
                              </div>
                              <br><br>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  PROJECT NO: 
                                  <span type="text" id="" ></span>
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  CLIENT: 
                                  <span type="text" id="" ></span>
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  DOCUMENT NO: 
                                  <span type="text" id="" ></span>
                                  <span style = "padding-left:200px"></span>
                                  DATE: 
                                  <span type="text" id="" ></span>
                                </fieldset></h7></b>
                              </div>
                              <br><br>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Bulding Name : </h7>
                                  <span style = "padding-left:150px"></span>
                                  <span type="text" id="buldingname" ></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Bulding Location : </h7>
                                  <span style = "padding-left:130px"></span>
                                  <span type="text" id="buldinglocation"></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Bulding Occupancy : </h7>
                                  <span style = "padding-left:112px"></span>
                                  <span type="text" id="buldingoccupancy"></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Bulding Type : </h7>
                                  <span style = "padding-left:160px"></span>
                                  <span type="text" id="buldingtype"></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  Building Dimensions:
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Length : </h7>
                                  <span type="text" id="length"></span>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Width : </h7>
                                  <span type="text" id="width"></span>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Clear/Eave Height : </h7>
                                  <span type="text" id="clearheight"></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Ridge Height : </h7>
                                  <span type="text" id="ridgeheight"></span>
                                  <span style = "padding-left:48px"></span>
                                  <h7>Wind speed : </h7>
                                  <span type="text" id="windspeed"></span>
                                  <span style = "padding-left:65px"></span>
                                  <h7>Bay Spacing : </h7>
                                  <span type="text" id="bayspacing"></span>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Slope : </h7>
                                  <span type="text" id="slope"></span>
                                  <span style = "padding-left:105px"></span>
                                  <h7>Canopy Height : </h7>
                                  <span type="text" id="canopyheight"></span>
                                </fieldset>
                              </div><br><br>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  Roafing Sheet:
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Type</h7>
                                  <span style = "padding-left:110px"></span>
                                  <h7>Thickness</h7>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Weight(kg/m2)</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:50px"></span>
                                  <h7>Galvalume sheet</h7>
                                  <span style = "padding-left:90px"></span>
                                  <h7>0.5mm</h7>
                                  <span style = "padding-left:150px"></span>
                                  <h7><span type="text" id = "weight"></span></h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  Cladding Sheet:
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Type</h7>
                                  <span style = "padding-left:110px"></span>
                                  <h7>Thickness</h7>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Weight(kg/m2)</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:50px"></span>
                                  <h7>Galvalume sheet</h7>
                                  <span style = "padding-left:90px"></span>
                                  <h7>0.5mm</h7>
                                  <span style = "padding-left:150px"></span>
                                  <h7><span type="text" id = "s_weight"></span></h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  Brick Wall:
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:100px"></span>
                                  <h7>Type</h7>
                                  <span style = "padding-left:110px"></span>
                                  <h7>Thickness</h7>
                                  <span style = "padding-left:125px"></span>
                                  <h7>Height</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:80px"></span>
                                  <h7>Brick Wall</h7>
                                  <span style = "padding-left:100px"></span>
                                  <h7>230mm</h7>
                                  <span style = "padding-left:150px"></span>
                                  <h7><span type="text" id="brickwallheight"></span></h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <b><h7><fieldset>
                                  Design Codes:
                                </fieldset></h7></b>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Steel Design</h7>
                                  <span style = "padding-left:200px"></span>
                                  <h7>IS 800:2007 LSD</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>Concrete Design</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10" align = "middle">
                                <fieldset>
                                  <b><h7>PRELIMINARY MATERIAL TAKE OFF</h7></b>
                                </fieldset>
                              </div><br><br>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:460px"></span>
                                  <h7>TOTAL</h7>
                                  <span style = "padding-left:45px"></span>
                                  <h7>AREA</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:250px"></span>
                                  <h7>GRADE OF MATERIAL</h7>
                                  <span style = "padding-left:20px"></span>
                                  <h7>WEIGHT(MT)</h7>
                                  <span style = "padding-left:10px"></span>
                                  <h7>(SQ.FT)</h7>
                                  
                                </fieldset>
                              </div><br><br>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>TOTAL STRUCTURAL</h7>
                                </fieldset>
                              </div>
                              <div class="col-md-10">
                                <fieldset>
                                  <h7>STEEL WEIGHT</h7>
                                  <span style = "padding-left:450px"></span>
                                  <span type="text" id = "area"></span>
                                </fieldset>
                              </div>
                              <p><h7><span style = "padding-left:40px"></span>(Including connections 15%)</h7></p>
                              <div class="col-md-10">
                                <fieldset>
                                  <span style = "padding-left:10px"></span>
                                  <h7>TOTAL SHEETING WEIGHT</h7>
                                  <span style = "padding-left:20px"></span>
                                  <h7>0.5mm Galvalume sheets</h7>
                                  <span style = "padding-left:50px"></span>
                                  <h7>0</h7>
                                  <span style = "padding-left:75px"></span>
                                  <h7>-96</h7>
                                </fieldset>
                              </div>
                              
                              <p><h7><span style = "padding-left:50px"></span>(Roof and Cladding Sheet)</h7></p>
                              
                        </div>

                        


                          
                  
                          
                          
                          
                        
                        <script>
                            document.getElementById('project').innerHTML=localStorage.getItem("bn");
                            document.getElementById('buldingname').innerHTML=localStorage.getItem("bn");
                            document.getElementById('buldinglocation').innerHTML=localStorage.getItem("bl");
                            document.getElementById('buldingoccupancy').innerHTML=localStorage.getItem("bo");
                            document.getElementById('buldingtype').innerHTML=localStorage.getItem("bt");
                            document.getElementById('length').innerHTML=localStorage.getItem("lt");
                            document.getElementById('ridgeheight').innerHTML=localStorage.getItem("rh");
                            document.getElementById('slope').innerHTML=localStorage.getItem("sl");
                            document.getElementById('canopyheight').innerHTML=localStorage.getItem("ct");
                            document.getElementById('brickwallheight').innerHTML=localStorage.getItem("bwh");
                            document.getElementById('windspeed').innerHTML=localStorage.getItem("ws");
                            document.getElementById('width').innerHTML=localStorage.getItem("wd");
                            document.getElementById('bayspacing').innerHTML=localStorage.getItem("bs");
                            document.getElementById('clearheight').innerHTML=localStorage.getItem("ch");
                
                            document.getElementById('weight').innerHTML=localStorage.getItem("wt");
                            document.getElementById('s_weight').innerHTML=localStorage.getItem("wt");
                            document.getElementById('area').innerHTML=localStorage.getItem("ar");
                            
                        </script>
                      

                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div> 


            
            <button type="submit" class="button" onclick = "pdf_generator();">Download</button>

      </div>
    </div>

  <!-- Sidebar -->
  <div id="sidebar">

    <div class="inner">

      
        
      <!-- Menu -->
      <nav id="menu">
        <ul>
          <img class="proimg" src="https://media-exp1.licdn.com/dms/image/C510BAQHsz_4VngymXg/company-logo_200_200/0/1547817037812?e=2159024400&v=beta&t=WFLdS4Ti69lyqbKYqLcwuVCTVF_2-eI7mpzvs7jLvek" alt="">
          <li><a href="/index.php">Profile</a></li>
          <li><a href="home.php">Homepage</a></li>
          
          
          <li>
            <span class="opener">Calculations</span>
            <ul>
              <li><a href="/quickcalculation.php">Quick Calculation</a></li>
              <li><a href="#">Detailed Estimate</a></li>
              <li><a href="#">Custom Bulding Calculation</a></li>
            </ul>
          </li>
          
          <li><a href="/assets/Weight Estimation User Manual-converted.pdf">User Manual</a></li>
          <li><a href="">Developers</a></li>
          <li><a href="/privacypolicy.php">Privacy Policy</a></li>
          
          <li><a href="/contact.php">Contact Us</a></li>
          
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



