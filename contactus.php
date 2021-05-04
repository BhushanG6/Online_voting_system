<html lang="en">

<head>
        <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="styleh.css">
    <style type="text/css">


    </style>

    <title>Vote India</title>
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mr-auto" href="#"><img src="img/logo2.png" height="110" width="110"></a>
          <div class="col-12 col-sm-6 align-self-center">
              <h3>VOTEINDIA</h3>
              <p class="d-none d-sm-block">Your Vote is Your Pride.<br>Your Vote is Your Voice.</p>
          </div >
          <div class="collapse navbar-collapse" id="Navbar">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item "><a class="nav-link" href="index.php" style="color: #444747"><span class="fa fa-home fa-lg"> </span> Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.php" style="color: #444747"><span class="fa fa-user-plus fa-lg"></span> Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="contactus.php" style="color: #444747"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>

              </ul>
              <span class="navbar-text">
                 <a href="login.php">
                      <span class="fa fa-sign-in fa-lg"></span> Login
                  </a>
              </span>
          </div>
      </div>
  </nav>


  <div id="loginmodal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
          <div class="modal-content">
              <div class="modal-header" style="background-color: #30c4e6">
                  <h4 class="modal-title">Login</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                   <form action="login_action.php"methode="post">
                      <div class="form-row">
                          <div class="form-group col-sm-4">
                                  <label class="sr-only">User-ID</label>
                                  <input class="form-control form-control-sm mr-1" placeholder="Enter User-ID">
                          </div>
                          <div class="form-group col-sm-4">
                              <label class="sr-only" for="exampleInputPassword3">Password</label>
                              <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                          </div>
                          <div class="col-sm-auto">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox">
                                  <label class="form-check-label"> Remember me
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="form-row">
                          <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>
                      </div>
                  </form>

              </div>
          </div>
      </div>
  </div>

		<header class="jumbotron">
    </header>

<div class="container">
        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
                      Near Modern College<br>
                      JM Road, Shivajinagar<br>
                      Pune,Maharashtra-411005<br>
                      <i class="fa fa-phone"></i>: +91 12345 67890<br>
                      <i class="fa fa-fax"></i>: +91 88888 48321<br>
                      <i class="fa fa-envelope"></i>:
                        <a href="mailto:voteindia@online.gov">voteindia@online.gov</a>
                   </address>
            </div>
            <div class="col-12 col-sm-4 offset-sm-1" style="margin-top:-40px">
                <h5>Map of our Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2036.1076554821677!2d73.84831889277179!3d18.524982012692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07c41e61447%3A0x709dfdb9d1408b66!2sModern%20College%20Chowk%2C%20Cavthan%2C%20Revenue%20Colony%2C%20Shivajinagar%2C%20Pune%2C%20Maharashtra%20411005!5e0!3m2!1sen!2sin!4v1606146207960!5m2!1sen!2sin" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
               <div class="btn-group" role="group">
                   <a role="button" class="btn btn-primary" href="tel:08888618192"><i class="fa fa-phone"></i> Call </a>
                   <a role="button" class="btn btn-success" href="mailto:"><i class="fa fa-envelope"></i>Email</a>
               </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12 col-sm-9 offset-sm-1 align-self-center">
                <div class="card" id="new">
                    <div class="card-header text-white" style="background-color:#30c4e6 ">Send Us Your Feedback</div>
                    <div class="card-body">

                        <form>

                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text"class="form-control" name="firstname" id="firstname
                            " placeholder="First Name">
                        </div>
                    </div>

                     <div class="form-group row">
                         <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text"class="form-control" name="lastname" id="lastname
                            " placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel:</label>
                        <div class="col-5 col-md-3">
                            <input type="tel"class="form-control" name="countrycode" id="countrycode" placeholder="Country-code ">
                        </div>
                         <div class="col-7 col-md-7 ">
                            <input type="tel"class="form-control" name="telnum" id="telnum" placeholder="TEL NO.">
                        </div>
                    </div>

                     <div class="form-group row">
                         <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email"class="form-control" name="emailid" id="emailid" placeholder="Email Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">

                        </div>

                    </div>
                    <div class="form-group row">
                         <label for="Feedback" class="col-md-2 col-form-label"> Your Feedback</label>
                        <div class="col=md-10">
                            <textarea type="email"class="form-control" name="Feedback" id="Feedback" placeholder="Your Comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </div>

                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="indexh.html">Home</a></li>
                        <li><a href="aboutus.html">Candidates</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5 ">
                    <h5>Our Address</h5>
                    <address>
                      Near Modern College<br>
                      JM Road, Shivajinagar<br>
                      Pune,Maharashtra-411005<br>
                      <i class="fa fa-phone fa-lg"></i>.: +91 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +91 888214542<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:voteindia@online.gov">voteindia@online.gov</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-youtube"href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon btn"href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2020</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>

</body>



</html>
