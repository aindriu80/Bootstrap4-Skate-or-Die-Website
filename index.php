﻿<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Personalisation -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <!-- SASS -->
    <link rel="stylesheet" type="text/css" href="resources/css/app.css">
    <title>Skate or Die!</title>
</head>
<body>
    <div class="container-fluid">
        <!-- page content -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SKATE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trophies">Trophies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Swag
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Pants</a>
                            <a class="dropdown-item" href="#">Shirts</a>
                            <a class="dropdown-item" href="#">Apparel</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-90 justify-content-end">
<!--                    <a class="nav-link" href="#registerLoginModal" onclick="myFunction();">Register / Login</a>-->
                    <a class="nav-link" href="register.php" onclick="myFunction();">Register / Login</a>
                </ul>
            </div>
        </nav>
        <div class="sectionLight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-3">Welcome to My World</h1>
                            <p class="lead">Total Radness since 1987</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col"></div>
                <div class="col-sm-12 col-md-6">
                    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="resources/img/board.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/img/tipsolahraga.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Skate for life!</h3>
                                    <p>Show me some tricks</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="resources/img/longboard.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <!-- Section Two -->
        <div class="sectionDark">
            <div class="row">
                <div class="col-sm-12 col-md-3 offset-md-2">
                    <img class="img-fluid" src="resources/img/prodigy.png">
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, impedit, aperiam tempora odit voluptate tempore dolor consectetur! Molestiae eveniet numquam rerum, dicta? Rem velit provident, voluptates repellendus, numquam facere ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum nisi odit, totam saepe accusantium maiores cum vel sunt sequi vero perspiciatis ut architecto facilis nostrum. Quod natus, suscipit illum consectetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut distinctio optio voluptatem atque veniam fugiat iste enim, aut consequatur sunt blanditiis doloremque modi eum nulla officia voluptatibus. Vel, optio, obcaecati.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, impedit, aperiam tempora odit voluptate tempore dolor consectetur! Molestiae eveniet numquam rerum, dicta? Rem velit provident, voluptates repellendus, numquam facere ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum nisi odit, totam saepe accusantium maiores cum vel sunt sequi vero perspiciatis ut architecto facilis nostrum. Quod natus, suscipit illum consectetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut distinctio optio voluptatem atque veniam fugiat iste enim, aut consequatur sunt blanditiis doloremque modi eum nulla officia voluptatibus. Vel, optio, obcaecati.</p>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <img class="img-fluid" src="resources/img/KFS.png">
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="coolStuffWrapper">
                        <button type="button" class="btn btn-primary coolStuffBtn" data-toggle="modal" data-target="#coolStuffModal">Get Cool Stuff!</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="sectionLight" id="videos">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">

                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/kickflip.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".kf-modal-lg">Kickflip</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/360flip.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".360-modal-md">360 Flip</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/bscrook.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".bscrook-modal-sm">BS Crook</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/no-comply.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".kf-modal-lg">No Comply</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/heel-flip.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".360-modal-md">Heel Flip</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img class="img-fluid imgCenter" src="resources/img/ollie-north.jpg">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-danger btn-lrg btnCenter" data-toggle="modal" data-target=".bscrook-modal-sm">Ollie North</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trophy Section -->
        <div class="sectionDark" id="trophies">
            <div class="row">
                <img class="imgCenter" src="resources/img/Trophy-Free-PNG-Image.png" class="img-responsive">
            </div>
        </div>

        <!-- SASS -->
        <section class="about-container">
            <div class="container">
                <div class="row">
                    
                    <div class="col-6">
                        <div class="about-content">
                            <h1 class="about-title">
                                Examples of SASS                                
                            </h1>
                            <button class="btn btn-third buy-btn-md"type="button" name="button">Buy Now</button>
                            <p class="about-text">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.is purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt</p>
                            
                        </div>
                        
                    </div>
                    <div class="col-4">
                        <div class="b-video">
                            <img class="b-video-img" src="resources/img/KFSmd.jpg" alt="" /><p class="card-text">Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt</p>
                          </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- working with image splitter -->
        
        
        <section class="splitter-container">
            <div class="container">
              <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                  <div class="img-list">
<!--
                      <img class="img-item" src="resources/img/KFS-DRK.png" alt="">
                      <img class="img-item" src="resources/img/KFS-LT.png" alt="">
                      <img class="img-item" src="resources/img/KFS-DRK.png" alt="">
                  </div>
-->
                </div>
              </div>
            </div>
        </section>
        
        
        <!-- Styling the next Container with Sass -->
          <section class="about-container">
            <div class="container">
              <div class="row">
                <div class="col-4 img-cont">
                  <img class="gear-img" src="resources/img/gear.png" alt="">
                </div>
                <div class="col-6">
                  <div class="about-content">
                    <h2 class="about-title">Styling container with SASS
                      <br />
                      UP MY STUFF!</h2>
                      <p class="about-text">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.is purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt</p>
                      <button class="btn btn-third buy-btn-md"type="button" name="button">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
          </section>

        <!-- Modal -->
        <!-- Cool Stuff Modal -->
        <div class="modal fade" id="coolStuffModal" tabindex="-1" role="dialog" aria-labelledby="coolStuffLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contentLabel">Get Exclusive Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img class="img-fluid" src="resources/img/KFS_modal.png">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="modalFormWrapper">
                                    <form>
                                        <div class="form-group">
                                            <label for="forName">What's your name?</label>
                                            <input type="text" class="form-control" id="formName" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="formEmail">Where should we send your cool content?</label>
                                            <input type="text" class="form-control" id="formEmail" placeholder="Email">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="registerLoginModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contentLabel">Sign in / Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="card signin-card">
                    <div class="card-block">

                        <div class="form-group">
                            <img class="img-fluid2" src="resources/img/KFS_LIGHT.png">
                        </div>

                        <form class="sigin-form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                            </div>
                            <button type="submit" class="btn signin-btn btn-lg">Sign In</button>
<!--                            <button class="uk-button uk-button-default" type="submit">Login</button>-->
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember me<a href="#"> Need Help?</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="register.php" class="create-new-account">Create New Account</a>
            </div>
        </div>
    </div>

    <!-- Kickflip Modal -->
    <div class="modal fade kf-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ilzy0viqVes" allowfullscreen></iframe>
                </div>
                <p>Kickflips are easy. Pop, flick, catch, land. #BOOM</p>
            </div>
        </div>
    </div>

    <!-- 360 Modal -->
    <div class="modal fade 360-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ilzy0viqVes" allowfullscreen></iframe>
                </div>
                <p>360 are easy. Pop, scissor kick, catch, land. #BOOM</p>
            </div>
        </div>
    </div>

    <!-- BS Crook -->
    <div class="modal fade bscrook-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ilzy0viqVes" allowfullscreen></iframe>
                </div>
                <p>Backside Crooks are sick! Nollie in nollie out! #BOOM</p>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer bg-dark">
        <div class="container-fluid">

            <div class="col-md-12">
            </div>
            <div class="section-wrapper">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icons wow slideInDown">
                                    <ul class="list-unstyled">
                                        <img class="img-fluid footerImg" src="resources/img/KFS_LIGHT.png">
                                        <li>
                                            <a href="https://www.facebook.com/aindriu80"><i class="fa fa-facebook fa-3x"></i></a>
                                            <a href="https://twitter.com/aindriu80"><i class="fa fa-twitter fa-3x"></i></a>
                                            <a href="https://plus.google.com/u/0/+AindriuMacGiollaEoin"><i class="fa fa-google-plus fa-3x"></i></a>
                                            <a href="https://www.instagram.com/aindriu80/"><i class="fa fa-instagram fa-3x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery first, then popper, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>

    
    <!-- php -->
    <?php require_once "inc/footer.php"; ?>
</body>
</html>