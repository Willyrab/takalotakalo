<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleLoginInscription.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 from">
              <div class="brand-logo">
                <h1 class="titre">Tak-Alo</h1>
                
              </div>
            
              
              <form class="pt-3" action="traitementinscription/inscrire" method="post">
                <div class="form-group">
                  <input type="text" name="nom" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Nom">
                </div>
                <div class="form-group">
                  <input type="text" name="prenom" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Prenom">
                </div>
                <div class="form-group">
                  <input type="date" name="dtn" class="form-control form-control-lg" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <input type="text" name="localisation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Localisation">
                </div>
                <div class="form-group">
                  <input type="tel" name="telephone" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Telephone">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Adresse e-mail">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe">
                  </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="S' inscrire">
                </div>
               
           
                <div class="text-center mt-4 font-weight-light">
                  Vous avez déjà un compte ? <a href="formlogin" class="text-primary">Se Connecter</a>
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
