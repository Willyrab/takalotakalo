<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <h1>Admin</h1>
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url(); ?>assets/img/inconnu.jfif" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo base_url(); ?>backoffice/formverif" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" value="ADMIN@yahoo.com" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" value="s3cr3t" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
   
</body>
</html>

 
  