<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        min-width: 900px;
        max-width: 900px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li><a href="./index.php">Home</a></li>
          <li class="active"><a href="#">ABOUT US</a></li>
          <li><a href="./project.php">PROJECT</a></li>
          <li><a href="./apply.php">APPLY</a></li>
          <li><a href="./faq.php">FAQ</a></li>
        </ul>
        <h3 class="muted">STORY ON FOUNDATION</h3>
      </div>

      </div>

      <!-- Jumbotron -->
      <!--
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>
      </div>

      -->
      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4 offset1">
          <h4><font color=red>Mission</font></h4>
          <p>우리 재단은 공감과 나눔을 통해 아시아 평화에 기여합니다.</p>
          <p>&nbsp;</p>
          <h4><font color=red>Practice</font></h4>
          <p>감동의 벽을 넘고 소통을 시도하는 프로젝트를 매월 한 건씩 선정하여 100만원을 지원합니다.</p>
          <p>기부자와 지원자, 동아시아 시민들이 평화와 나눔의 가치를 공유하는 네트워크를 구축합니다.</p>
          <p>&nbsp;</p>
          <h4><font color=red>Idea</font></h4>
          <p>우리는 공감과 나눔의 아이디어를 가진 이들이 우리 재단을 통해 그 이야기를 실현하여, 평화를</p>
          <p>만드는 시민(Citizen Peacemaker)이 될 것을 기대합니다.</p>
          <p>&nbsp;</p>
        </div>
        <div class="span6">
          <h4><font color=red>Trustees</font></h4>
          <div class="hero-unit">
          <img src="./img/kyy.jpg" class="img-circle" width="70px" height="70px">
          <img src="./img/jdh.jpg" class="img-circle" width="70px" height="70px">
          <img src="./img/sjy.jpg" class="img-circle" width="70px" height="30px">
          </div>
        </div>
        <div class="span1">
        </div>
       </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; story ON foundation</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>


