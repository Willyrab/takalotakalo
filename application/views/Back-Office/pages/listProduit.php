

    
<form method="POST">
    <h2 class="m-3">Ajouter un categorie : </h2>
    
    <hr class="col-3">
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nom : </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nom" name="nom"> 
        </div>
    </div>

    <div class="mt-4 mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
            <button class="btn btn-success w-50  " name="ajouter" >Ajouter</button>
        </div>
    </div>
   
 
</form>

<h2 class="m-3">Categories: </h2>
<hr class="col-2">
<table class="table table-bordered text-center">
    <thead class=table-dark>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
            <?php for ($i=0; $i < count($categories); $i++) { ?>
                <tr>
                    <td><?php echo $categories[$i]->id; ?></td>
                    <td><?php echo $categories[$i]->nom; ?></td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">Modifier <i class="fas fa-edit"></i> </a>
                        <a href="" class="btn btn-danger btn-sm">Supprimer <i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
       
    </tbody>
</table>

<h2 class="m-3">Nombre utilisateur inscrit: </h2>
<hr class="col-3">
<table class="table table-bordered text-center">
    <thead class=table-dark>
        <tr>
            <th>Utilisateur inscrit</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $nombreUtilisateurs; ?></td>
            </tr>
    </tbody>
</table>
<h2 class="m-3">Nombre d'echange effectué: </h2>
<hr class="col-3">
<table class="table table-bordered text-center t2">
    <thead class=table-dark>
        <tr>
            <th>Echange effectué</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $nombreEchanges; ?></td>
            </tr>
    </tbody>
</table>
    <!-- Start Footer -->
    <!-- End Footer -->
</body>
</html>