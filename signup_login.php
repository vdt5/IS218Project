<?php require_once('register.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" id="navbar-brand" href="index.php">MotionTech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" id="active-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup_login.php">Sign Up/Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="form">
        <ul class="tab-group">
            <li class="tab showActive active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>
        <div class="tab-content">
            <div id="signup">
                <form action="register.php" method="post" name="signupForm" id="signupForm">
                    <div class="form-group" id="fname-left">
                        <label for="firstName">First name</label>
                        <input type="fname" class="form-control" id="firstName" name="fname" placeholder="Enter first name">
                        <div class="error" id="fnameError"></div>
                    </div>
                    <div class="form-group" id="lname-right">
                        <label for="lastName">Last name</label>
                        <input type="lname" class="form-control" id="lastName" name="lname" placeholder="Enter last name">
                        <div class="error" id="lnameError"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        <div class="error" id="emailError"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        <div class="error" id="passwordError"></div>
                    </div>
                    <div class="form-group">
                        <label for="college">College</label>
                        <input type="college" class="form-control" id="college" name="college" placeholder="College name">
                        <div class="error" id="collegeError"></div>
                    </div>
                    <div class="form-group">
                        <label for="major">Major</label>
                        <input type="major" class="form-control" id="major" name="major" placeholder="Your major">
                        <div class="error" id="majorError"></div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit" id="submit" name="submit" onclick="return validateForm();">Sign Up</button>
                    <button type="submit" class="btn btn-link" onclick="resetForm();">Reset</button>
                </form>
            </div>
            <div id="login">
                <h1 class="login-greeting">Welcome Back!</h1>
                <form action="/" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary" onclick="validateForm();">Log In</button>
                    <ul>
                        <li class="tab create-account mt-4">Don't have an account? <a href="#signup">Sign up</a></li>
                    </ul>
                </form>
            </div>
        </div> <!-- tab-content -->
    </div> <!-- /form -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/formValidation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('.tab a').on('click', function(e) {
            e.preventDefault();
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            target = $(this).attr('href');
            $('.tab-content > div').not(target).hide();
            $(target).fadeIn(600);
        });
    </script>
    <script>
        $('.create-account a').on('click', function() {
            $('.tab.active').removeClass('active');
            $('.showActive').addClass('active');
        });
    </script>
</body>
</html>