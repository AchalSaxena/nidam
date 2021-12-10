<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Yoga School | Responsive Photography Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Pacifico" rel="stylesheet">

        <!-- Vendor CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <div class="menu"> <span></span> </div>
        <nav id="nav">
            <ul class="main">
                <li><a href="{{ asset('home')}}">Home</a></li>
                <li><a href="{{ asset('about')}}">About</a></li>
                <li><a href="{{ asset('teacher')}}">Teachers</a></li>
                <li><a href="{{ asset('class')}}">Classes</a></li>
                <li><a href="{{ asset('blog')}}">Blog</a></li>
				<li><a href="{{ asset('login')}}">Login</a></li>
                <li><a href="{{ asset('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>

        <div class="header banner">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1><a class="brand" href="index.html">Yoga School</a></h1>
                        <!-- <a class="brand" href="index.html"><img alt="Logo" src="img/logo.jpg"></a> -->
                    </div>
                </div>

                <div class="col-md-12">
                    <h1>Home / Login</h1>
                </div>
            </div>
        </div>
        <!-- Header Section End -->

		<!-- Login Section Start -->
        <section id="login">
            <div class="container">
                <div class="section-header">
                    <h2>Login</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a dolor orci. In hac habitasse platea dictumst. Donec in ante non felis tincidunt pellentesque. Praesent risus arcu, venenatis dapibus feugiat vitae, mollis eu ligula. 
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 form">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" placeholder="Your Password" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="Password" class="form-control" placeholder="Repeat Your Password" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember1">
                                    <label class="custom-control-label" for="remember1">Remember me</label>
                                </div>
                            </div>
                            <div><button type="submit">Sing Up</button></div>
                        </form>
                    </div>
                    
                    <div class="col-md-6 form">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember2">
                                    <label class="custom-control-label" for="remember2">Remember me</label>
                                </div>
                            </div>
                            <div><button type="submit">Sign In</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Section end -->

		<!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href=""><li class="fa fa-instagram"></li></a>
                            <a href=""><li class="fa fa-twitter"></li></a>
                            <a href=""><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>Copyright &#169; <a href="https://htmlcodex.com">HTML Codex</a> All Rights Reserved.</p>
						<p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Vendor JavaScript File -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
