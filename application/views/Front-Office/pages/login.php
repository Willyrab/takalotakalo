<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleLoginInscription.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0 ">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 from">
              <div class="brand-logo">
                <h1 style="color: #59ab6e;" class="titre">Tak-Alo</h1>
                
              </div>
            
              
              <form class="pt-3" action="<?php echo base_url(); ?>frontoffice/formverif" method="post">
                <span style="color: red;"><?php if(isset($erreur)) echo $erreur; ?></span>
                <div class="form-group">
                  <input type="email" name="email"  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Adresse e-mail" value="<?php if(function_exists('set_value')) echo set_value('email'); ?>">
                  <?php if(function_exists('form_error')) echo form_error('email'); ?>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe" value="<?php if(function_exists('set_value')) echo set_value('password'); ?>">
                  <?php if(function_exists('form_error')) echo form_error('password'); ?>
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Se Connecter">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Mot de passe oublié?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connecter avec facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                    Vous n’avez pas de compte ? <a href="<?php echo base_url(); ?>frontoffice/inscription" class="text-primary">S'inscrire</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <!-- endinject -->
</body>

</html>
