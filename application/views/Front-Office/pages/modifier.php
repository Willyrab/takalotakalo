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
                <h1 class="titre">Modifier un Objet</h1>
                
              </div>
            
              
              <form class="pt-3" action="<?php echo base_url(); ?>frontoffice/traitementmodifier" method="post" enctype="multipart/form-data">
                <?php if(isset($error)) echo $error; ?>
                <div class="form-group">
                  <input type="text" name="titre" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Titre">
                </div>
                <div class="form-group">
                  <textarea name="description" class="form-control form-control-lg" id="exampleInputEmail1">Description</textarea>
                </div>
                <div class="form-group">
                  <input type="number" name="prixEstimatif" step="0.01" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Prix">
                </div>
                <div class="form-group">
                  <input type="text" name="localisation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Localisation">
                </div>
                <div class="form-group">
                    <input type="file" name="userfile[]" size="20" class="form-control"/>
                    <input type="file" name="userfile[]" size="20" class="form-control"/>
                    <input type="file" name="userfile[]" size="20" class="form-control"/>
                    <input type="file" name="userfile[]" size="20" class="form-control"/>
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Modifier">
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
