<?php 
    require 'config.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>
<body class="realestate_version">




    <!-- LOADER -->
<!--     <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
 -->    <!-- END LOADER -->
    <ul class='slideshow'>
        <li>
            <span>Summer</span>
        </li>
        <li>        
            <span>Fall</span>
        </li>
        <li>        
            <span>Winter</span>
        </li>
        <li>
            <span>Spring</span>
        </li>
    </ul>
    
    <div class="parallax first-section" >
        <div class="container" style="margin-top: 100px; height: -1080px;">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i>rregis</h3>
                        <form id="contactform1" class="row" name="contactform" method="POST" action="register_process.php">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select name="property" id="property" class="form-control" required="TRUE">
                                        <option value="">Select types of property</option>
                                        <option value="flat">Flat</option>
                                        <option value="bunglows">bunglows</option>
                                         <option value="tenament">tenament</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select name="price" id="price" class="form-control" required="TRUE">
                                        <option value="">furnist</option>
                                        <option value="fullfurnist">full-furnist</option>
                                        <option value="semifurnist">semi-furnist</option>
                                         <option value="nonfurnist">non-furnist</option>
                                    </select>
                                </div>
                                
<!--                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Mobile" required="TRUE">
                                </div -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="text" name="description" class="form-control" placeholder="Address" required="TRUE">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="file" name="description" class="form-control" placeholder="file" required="TRUE">
                                </div>
                             <div class="form-group">
                                 <textarea  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                             </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" value="SEND" id="submit1" name="submit"class="btn btn-light btn-radius btn-brd grd1 btn-block">Register</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="login.php" class="btn btn-light btn-radius btn-brd grd1 btn-block">Have Account</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline clearfix">
                        <h2>Rent Your Property with Tenant Tale</h2>
                        <p class="lead">With Tenant Tale, you can promote your all property & real estate projects. </p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
</body>
</html>
<?php 
    include 'footer.php';
?>
