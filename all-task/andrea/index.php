<!DOCTYPE html>
<html lang="en">

<head>
  <title>Andrea </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <script defer="" referrerpolicy="origin" src="js/s.js"></script>
  <script nonce="2c1f858e-02f5-4bb2-a44f-bd63bbc7d166">
    try {
      (function(w, d) {
        ! function(du, dv, dw, dx) {
          du[dw] = du[dw] || {};
          du[dw].executed = [];
          du.zaraz = {
            deferred: [],
            listeners: []
          };
          du.zaraz.q = [];
          du.zaraz._f = function(dy) {
            return async function() {
              var dz = Array.prototype.slice.call(arguments);
              du.zaraz.q.push({
                m: dy,
                a: dz
              })
            }
          };
          for (const dA of ["track", "set", "debug"]) du.zaraz[dA] = du.zaraz._f(dA);
          du.zaraz.init = () => {
            var dB = dv.getElementsByTagName(dx)[0],
              dC = dv.createElement(dx),
              dD = dv.getElementsByTagName("title")[0];
            dD && (du[dw].t = dv.getElementsByTagName("title")[0].text);
            du[dw].x = Math.random();
            du[dw].w = du.screen.width;
            du[dw].h = du.screen.height;
            du[dw].j = du.innerHeight;
            du[dw].e = du.innerWidth;
            du[dw].l = du.location.href;
            du[dw].r = dv.referrer;
            du[dw].k = du.screen.colorDepth;
            du[dw].n = dv.characterSet;
            du[dw].o = (new Date).getTimezoneOffset();
            if (du.dataLayer)
              for (const dH of Object.entries(Object.entries(dataLayer).reduce(((dI, dJ) => ({
                  ...dI[1],
                  ...dJ[1]
                })), {}))) zaraz.set(dH[0], dH[1], {
                scope: "page"
              });
            du[dw].q = [];
            for (; du.zaraz.q.length;) {
              const dK = du.zaraz.q.shift();
              du[dw].q.push(dK)
            }
            dC.defer = !0;
            for (const dL of [localStorage, sessionStorage]) Object.keys(dL || {}).filter((dN => dN.startsWith("_zaraz_"))).forEach((dM => {
              try {
                du[dw]["z_" + dM.slice(7)] = JSON.parse(dL.getItem(dM))
              } catch {
                du[dw]["z_" + dM.slice(7)] = dL.getItem(dM)
              }
            }));
            dC.referrerPolicy = "origin";
            dC.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(du[dw])));
            dB.parentNode.insertBefore(dC, dB)
          };
          ["complete", "interactive"].includes(dv.readyState) ? zaraz.init() : du.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
      })(window, document)
    } catch (e) {
      throw fetch("/cdn-cgi/zaraz/t"), e;
    };
  </script>
</head>

<body>
  <div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    

    <!-- sidebar start -->
    <?php require_once('parts/sidebar.php'); ?>
     <!-- sidebar end -->


    <div id="colorlib-main">
      <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
          <div class="row d-flex">
            <div class="col-xl-8 py-5 px-md-5">
                <!-- home start-->
                 <?php require_once('parts/home.php'); ?>
                <!-- home end-->
            </div>
            <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
               <!-- right-side-bar start-->
               <?php require_once('parts/right-side-bar.php'); ?>
                <!-- right-side-bar end-->
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle>
    </svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" ></script>

</body>

</html>