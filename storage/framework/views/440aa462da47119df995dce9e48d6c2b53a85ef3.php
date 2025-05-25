<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>Training Studio</title>

<!--
TemplateMo 548 Training Studio
https://templatemo.com/tm-548-training-studio
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/assets/css/font-awesome.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/templatemo-training-studio.css')); ?>">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php echo $__env->yieldContent('customCss'); ?>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** Training<em> Studio -->
                        <a href="index.html" class="logo"><?php echo $siteSettings[0]['header_logo_title']; ?> </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            <li class="main-button"><a href="#">Sign Up</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="<?php echo e(asset('frontend/assets/images/'.$siteSettings[0]['mba_bg_video'])); ?>" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6><?php echo $siteSettings[0]['mba_heading_tag']; ?></h6>
                <h2><?php echo $siteSettings[0]['mba_heading_title']; ?></em></h2>
                <div class="main-button scroll-to-section">
                    <a href="#features">Become a member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    
        <?php echo $__env->yieldContent('content'); ?>

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p><?php echo $siteSettings[0]['footer_text']; ?></p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo e(asset('frontend/assets/js/jquery-2.1.0.min.js')); ?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo e(asset('frontend/assets/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo e(asset('frontend/assets/js/scrollreveal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/imgfix.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('frontend/assets/js/mixitup.js')); ?>"></script> 
    <script src="<?php echo e(asset('frontend/assets/js/accordions.js')); ?>"></script>
    
    <!-- Global Init -->
    <script src="<?php echo e(asset('frontend/assets/js/custom.js')); ?>"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
        
    <?php echo $__env->yieldContent('customJs'); ?>

  </body>
</html><?php /**PATH E:\wamp\www\mp\LARAV\PP\TrainingStudio\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>