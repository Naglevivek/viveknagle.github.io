<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading">
    </div>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.html">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.html">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.html">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.html">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>
<div class="modal fade"id="mymodal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Sign up with pg life </h4>
       </div>
<div class="modal-body">
    <form id="signup-form" class="form" role="form" action="signup.php" method="POST">
        <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text">
            <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                                    </div>
            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text">
             <i class="fas fa-phone-alt"></i>
            </span>
            </div>
            <input type="text" class="form-control" name="phone" placeholder="phone number"maxlength="10" minlength="10" required>
            </div>
            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text">
             <i class="fas fa-envelope"></i>
            </span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                                    </div>
            <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-university"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                                    </div>
            <div class="form-group">
            <span>I'm a</span>
            <input type="radio" class="m1-3"id="gender-male" name="gender" value="male" /> Male
            <label for="gender-male"></label>
             <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                                        <label for="gender-female">
                                            Female
                                        </label>
            </div>
            <div class="form-group">
            <button type="button" class="btn btn-block btn-primary">Create Account</button>
            </div>
    </form>
</div>
<div class="modal-footer">
    <span>Already have an account?</span>
<a href="#"data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
</div>
</div>
</div>
</div> 
<div class="modal fade" id="login-modal">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h5 class="modal-title">Login with pg life </h5>
    </div> 


  <div class="modal-body">
     <form id="login-form" class="form" role="form">
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
     </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Login</button>
    </div>
    </form>
</div>

<div class="modal-footer">
    <span>
        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
        to register a new account
    </span>
</div>
</div>
</div>
</div>
</body>
</html>
