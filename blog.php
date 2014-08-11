<?php
  if (isset($_GET['id'])) {
    $blog_id = intval($_GET['id']);
  }
  if (($blog_id != 0) && empty($blog_id)){
    header("Location: blogs.html");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico">

    <title>Addressing Homes | Home</title>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- color schema -->
    <link href="css/color-5.css" rel="stylesheet" id="layoutstyle">   
    
    <!-- google font for title -->
    <link href="css/google-font.css" rel="stylesheet" id="googlefont">    
    
    <!-- fontawesome -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="lib/superslides/dist/stylesheets/superslides.css" rel="stylesheet">
  
    <link href="lib/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
    
    <link href="lib/3DGridEffect/css/component.css" rel="stylesheet" />
    <script src="lib/3DGridEffect/js/modernizr.custom.js"></script>   
    
    <link href="lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet" >

    <script src="http://www.addressinghomes.tumblr.com/api/read/json"></script> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  <body>
    <!-- Mask -->
    <div class="mask">      
      <div id="intro-loader">
      </div>    
    </div>

    <!-- Nav Start -->
    <div id="nav-wrapper">
    <div id="nav" class="navbar">
      <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navigation Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand"><img class="img-responsive" src="images/nav-logo.png" alt="logo"></div>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="plan.html">The Plan</a></li>
              <li class="current"><a href="blogs.html">Blog</a></li> 
              <li><a href="about.html">About Us</a></li>  
              <li><a href="contact.html">Contact Us</a></li>  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>    
    </div>
    <!-- Nav End -->

    <!-- Display Blog -->
    <div class="education" id="education">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading dark text-center animate_top" id="blog_title">
            <!-- title to be appended -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 welcome_txt text-left animate_bottom" id="blog_body">

          </div>
          <div class="col-md-1"></div>
      </div>
    </div>
      </div>
    </div>
    <!-- End Display Blog -->

    <!-- links to next -->
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <a  id="nav-prev" class="pull-left" href='blog.php?id=<?php echo ($blog_id - 1); ?>'>
            <img class="img-responsive" src="images/arrow-left.png" alt="previous blog">
          </a>
          <a id="nav-next" class="pull-right" href='blog.php?id=<?php echo ($blog_id + 1); ?>'>
            <img class="img-responsive" src="images/arrow-right.png" alt="next blog">
          </a>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    <!-- End links to next -->

    <!-- Footer -->
    <div class="footer">
    <div class="container">
          <div class="row text-center">
              <div class="col-md-12"><p>Copyright &copy; 2014 Addressing Homes, LLC | 8138 S State Street Suite 3 | Midvale, Utah 84047</p></div>
            </div>
      </div>
    </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script> 
  
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  
  <!--<script src="js/inviewport.jquery.js"></script>-->
  
  <script src="js/jquery.animateNumbers.js"></script> 
  
  <script src="js/responsive-tabs.js"></script>
  
  <script src="lib/jQuery-One-Page-Nav/jquery.scrollTo.js"></script>
  <script src="lib/jQuery-One-Page-Nav/jquery.nav.js"></script> 
  
  <!-- jquery-parallax -->
  <script src="lib/jquery-parallax/scripts/jquery.parallax-1.1.3.js"></script>  
  
  <!-- mailchimp -->
  <script src="lib/mcapi-simple-subscribe-jquery/js/mailing-list.js"></script>        
  <!-- mailchimp -->  
  
  <script src="lib/ajax-html-contact-form/js/validation.js"></script>
  
  <script src="lib/superslides/dist/jquery.superslides.js"></script>
  
  <script src="lib/jquery.appear/jquery.appear.js"></script>  
  
  <script src="lib/jquery.bxslider/jquery.bxslider.min.js"></script>
  
  <script src="lib/3DGridEffect/js/classie.js"></script>
  <script src="lib/3DGridEffect/js/helper.js"></script>
  <script src="lib/3DGridEffect/js/grid3d.js"></script>
  
  <script src="lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
  
  <script src="js/custom.js"></script>
  <script>
    var num_blogs = tumblr_api_read["posts"].length;
    if ((<?php echo $blog_id; ?> - 1) < 0){
      $('a#nav-prev').attr("href","blogs.html");
    }
    if ((<?php echo $blog_id + 1;  ?> >= num_blogs)){
      $('a#nav-next').attr('href',"blogs.html");
    }
    console.log(tumblr_api_read["posts"][<?php echo $blog_id; ?>]);
    var curBlog = tumblr_api_read["posts"][<?php echo $blog_id; ?>];
    var $title = $("<span>" + curBlog["regular-title"] + "</span>" + '<br><p id="blog-date">' + curBlog["date"] + "</p>");
    var $blogBody = curBlog["regular-body"];
    $('#blog_title').append($title);
    $('#blog_body').append($blogBody);
  </script>
  </body>
</html>