<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/proposition.css">
</head>
    <section class="bg-light">
        <h3 style="text-align: center;">Historique des echanges</h3>
        <?php for ($i=0; $i < count($echangesReussies); $i++) { ?>
            <div class="card-container">
            Date d' echange : <?php echo $echangesReussies[$i]->dateAcceptation; ?> 
            
            <div class="c">
                <div class="d">
                    <div class="price">
                        <ul>
                            <li>Objet  : <?php echo $objet1[$i]->titre; ?></li>
                            <li>prix : <?php echo $objet1[$i]->prix_estimatif; ?> Ar</li>
                            <li>Envoyé par : <?php echo $utilisateur1[$i]->nom.' '.$utilisateur1[$i]->prenom; ?></li>
                        </ul>
                    </div>
                  
                </div>
                <div><img src="<?php echo base_url().$objet1[$i]->photoChemin; ?>" alt="xxx" class="im"></div>
            </div>
                
            <div class="card cardP">
                <i class="fas fa-arrow-left fleche"></i>
                <i style="color: green;" class="fas fa-arrow-right fleche"></i>
            </div>

            <div class="c">
                <div><img src="<?php echo base_url().$objet2[$i]->photoChemin; ?>" alt="xxx" class="im"></div>
                <div class="d">
                    <div class="price">
                        
                        <ul>
                            <li>Objet  : <?php echo $objet2[$i]->titre; ?></li>
                            <li>prix : <?php echo $objet2[$i]->prix_estimatif; ?> Ar</li>
                            <li>Envoyé par : <?php echo $utilisateur2[$i]->nom.' '.$utilisateur2[$i]->prenom; ?></li>
                        </ul>
                    </div>
                  
                </div>
            </div>

        </div>
        <?php } ?>
    </section>