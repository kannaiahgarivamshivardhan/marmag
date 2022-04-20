<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Marmag</title>

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

    <script>
      function quick_calculation()
      {
          const buldingname = document.getElementById('buldingname').value;
          localStorage.setItem("bn", buldingname);
          const buldinglocation = document.getElementById('buldinglocation').value;
          localStorage.setItem("bl", buldinglocation);
          const buldingoccupancy = document.getElementById('buldingoccupancy').value;
          localStorage.setItem("bo", buldingoccupancy);
          const buldingtype = document.getElementById('buldingtype').value;
          localStorage.setItem("bt", buldingtype);
          var length = parseFloat(document.getElementById('length').value);
          localStorage.setItem("lt", length);
          var ridgeheight = parseFloat(document.getElementById('ridgeheight').value);
          localStorage.setItem("rh", ridgeheight);
          var slope = parseFloat(document.getElementById('slope').value);
          localStorage.setItem("sl", slope);
          var canopyheight = parseFloat(document.getElementById('canopyheight').value);
          localStorage.setItem("ct", canopyheight);
          var brickwallheight = parseFloat(document.getElementById('brickwallheight').value);
          localStorage.setItem("bwh", brickwallheight);
          var windspeed = document.getElementById('windspeed').value;
          localStorage.setItem("ws", windspeed);
          var width = parseFloat(document.getElementById('width').value);
          localStorage.setItem("wd", width);
          var bayspacing = parseFloat(document.getElementById('bayspacing').value);
          localStorage.setItem("bs", bayspacing);
          var clearheight = parseFloat(document.getElementById('clearheight').value);
          localStorage.setItem("ch", clearheight);
          var area = length * width;
          localStorage.setItem("ar", area);
          //return false;   
          
          if(windspeed > 40 && windspeed <= 50){
              if(width > 0 && width <= 10){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight  > 0 && clearheight <= 7){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 10 && width <= 20){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 20 && width <= 30){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 30 && width <= 40){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 40 && width <= 50){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.2;
                          localStorage.setItem("wt", weight);
                          return false;;
                      }
                      else if(clearheight == 8){
                          var weight = 4.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 50 && width <= 60){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 5.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 5.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
          }
          else if(windspeed > 0 && windspeed <= 40){
              if(width > 0 && width <= 10){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 1.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 1.7;
                          localStorage.setItem("wt", weight);
                          return false;;
                      }
                      else if(clearheight == 9){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 1.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 1.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 10 && width <= 20){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 20 && width <= 30){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 2.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 30 && width <= 40){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 3.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 3.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 3.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 3.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 40 && width <= 50){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.6;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.1;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }
              else if(width > 50 && width <= 60){
                  if(bayspacing > 0 && bayspacing <= 6){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.4;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.7;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 7){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.8;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.2;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
                  else if(bayspacing == 8){
                      if(clearheight > 0 && clearheight <= 7){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 8){
                          var weight = 4.9;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 9){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 10){
                          var weight = 5;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 11){
                          var weight = 5.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                      else if(clearheight == 12){
                          var weight = 5.3;
                          localStorage.setItem("wt", weight);
                          return false;
                      }
                  }
              }

              
          }
      
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
                <a href="home.php">MARMAG</a>
              </div>
            </header>

            
            

            <!-- Forms -->
            <section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Enter the values</h2>
                    </div>
                    <form id="contact" action="page2.php" method="post">
                    <div class="row">
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Bulding Name</h7>
                            <input name="name" type="text" class="form-control" id="buldingname" placeholder="" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Bulding Location</h7>
                            <input name="name" type="text" class="form-control" id="buldinglocation" placeholder="City,State" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Wind Speed</h7>
                            <input name="name" type="number" class="form-control" id="windspeed" placeholder="(max value 50)in m/s" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Bulding Occupancy</h7>
                            <input name="name" type="text" class="form-control" id="buldingoccupancy" placeholder="" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Bulding Type</h7>
                            <input name="name" type="text" class="form-control" id="buldingtype" placeholder="Industrial/General" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Length</h7>
                            <input name="name" type="number" class="form-control" id="length" placeholder="In Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>width</h7>
                            <input name="name" type="number" class="form-control" id="width" placeholder="(Max Value:60) in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Clear/Eave Height</h7>
                            <input name="name" type="number" class="form-control" id="clearheight" placeholder="(Max Value:12) in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Ridge Height</h7>
                            <input name="name" type="number" class="form-control" id="ridgeheight" placeholder="in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Bay Spacing</h7>
                            <input name="name" type="number" class="form-control" id="bayspacing" placeholder="(Max Value:8) in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Slope</h7>
                            <input name="name" type="number" class="form-control" id="slope" placeholder="in Degree" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Canopy Height</h7>
                            <input name="name" type="number" class="form-control" id="canopyheight" placeholder="in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        <div class="col-md-10">
                          <fieldset>
                            <h7>Brick Wall Height</h7>
                            <input name="name" type="number" class="form-control" id="brickwallheight" placeholder="in Meters" required="">
                          </fieldset>
                        </div><br><br><br><br>
                        
                        

                      
                        
                        
                        <div class="col-md-3">
                            
                        <div class="filled-rounded-button">
                            <li type="submit" class="button" onclick = "quick_calculation();">
                              <a href="/quicksubmit.php" class="white-text modal-trigger">SUBMIT</a>
                            </li>
                          </div>
                        </div>
                   
                        

                            
    
    



                        
                          
                          
                        
                    </div>
                    </form>
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
