<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mesObjets.css">
</head>
<body>
    

    <h1>Mes Objets :</h1>
    <br/>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="">Voir tout les :</label>
                <select class="form-control">
                    <option value="type1">Chaussure</option>
                    <option value="type2">vetement</option>
                    <option value="type3">bijoux</option>
                </select>
            </div>
        </form>
    <form action="<?php echo base_url(); ?>frontoffice/echange/accepterEchange" method="post" class="form">
    <?php if(isset($post)) { ?>
        <input type="hidden" name="id_objetdemande" value="<?php echo $post['id_objetdemande']; ?>">
        <input type="hidden" name="id_userdemande" value="<?php echo $post['id_userdemande']; ?>">
        <div class="form-group">
            <h5>Objet a echanger </h5>
            <select name="id_objetechange" class="form-control">
                <option value="">Choissisez un objet</option>
                <?php for ($i=0; $i < count($mesObjets); $i++) { ?>
                    <option value="<?php echo $mesObjets[$i]->id; ?>"><?php echo $mesObjets[$i]->titre; ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>
    <?php } ?>
    </form>
    <div class="card-container">
        <?php for ($i=0; $i < count($mesObjets); $i++) { ?> 
            <div class="card">
                <img src="<?php echo base_url().$mesObjets[$i]->photoChemin; ?>" alt="item1" width="200px" height="200px">
                <figcaption style="text-align: center;"><?php echo $mesObjets[$i]->titre; ?></figcaption>
                <div class="price" style="background-color: lightgrey;">
                    <div style="text-align: center;"><?php echo $mesObjets[$i]->prix_estimatif; ?></div>
                    <div class="liens">
                        <a href="gestionobjets/formmodif" class="details">Modifier</a>
                        <a href="" class="">Supprimer</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    
    
</body>