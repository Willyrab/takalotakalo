<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/proposition.css">
</head>
    <section class="bg-light">
        <?php for ($i=0; $i < count($propositions); $i++) { ?>
            <div class="card-container">
           
    
            <div class="c">
                <div class="d">
                    <div class="price">
                        
                        <ul>
                            <li>Objet  : <?php echo $objet1[$i]->titre; ?></li>
                            <li>prix : <?php echo $objet1[$i]->prix_estimatif; ?> Ar</li>
                            <li>Envoyé par : <?php echo $objet1[$i]->nom.' '.$objet1[$i]->prenom; ?></li>
                        </ul>
                    </div>
                  
                </div>
                <div><img src="<?php echo base_url().$objet1[$i]->photoChemin; ?>" alt="xxx" class="im"></div>
            </div>
                
            <div class="card cardP">
                <i class="fas fa-arrow-left fleche"></i>
                <button class="btnE"><a href="<?php echo base_url(); ?>frontoffice/echange/accepterechange/<?php echo $propositions[$i]->id; ?>/<?php echo $objet1[$i]->id_utilisateur; ?>/<?php echo $objet1[$i]->id; ?>/<?php echo $objet2[$i]->id_utilisateur; ?>/<?php echo $objet2[$i]->id; ?>" style="text-decoration: none;color: green;">Echanger</a></button>
                <button class="btnE"><a href="<?php echo base_url(); ?>frontoffice/echange/refuserechange/<?php echo $propositions[$i]->id; ?>/<?php echo $objet1[$i]->id_utilisateur; ?>/<?php echo $objet1[$i]->id; ?>/<?php echo $objet2[$i]->id_utilisateur; ?>/<?php echo $objet2[$i]->id; ?>" style="text-decoration: none;color: green;">Refuser</a></button>
                <i style="color: green;" class="fas fa-arrow-right fleche"></i>
            </div>

            <div class="c">
                <div><img src="<?php echo base_url().$objet2[$i]->photoChemin; ?>" alt="xxx" class="im"></div>
                <div class="d">
                    <div class="price">
                        
                        <ul>
                            <li>Objet  : <?php echo $objet2[$i]->titre; ?></li>
                            <li>prix : <?php echo $objet2[$i]->prix_estimatif; ?> Ar</li>
                            <li>Envoyé par : <?php echo $objet2[$i]->nom.' '.$objet2[$i]->prenom; ?></li>
                        </ul>
                    </div>
                  
                </div>
            </div>

        </div>
        <?php } ?>
    </section>