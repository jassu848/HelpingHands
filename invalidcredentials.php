
<html>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="loginreg.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Log In</h3>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <input type="text" name="username"class="form-control" placeholder="Username *"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password *"/>
                        </div>
                        <div class="form-group">
                        
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="po">
                            <h5>Invalid Credentials</h5>
                        </div>
                       
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register</h3>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <input type="text" name="username"class="form-control" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email"class="form-control" placeholder="Email" />
                        </div>
                       
                        <div class="form-group">
                            <input type="password" name="password"class="form-control" placeholder="Your Password *" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password2"class="form-control" placeholder="Confirm Password *" />
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>
                    
                
                    </form>
                </div>
            </div>
        </div>
        </body>
</html>