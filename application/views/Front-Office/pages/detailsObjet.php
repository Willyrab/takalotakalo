

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo base_url().$objet[0]->photoChemin; ?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img" src="<?php echo base_url().$objet[1]->photoChemin; ?>" alt="Product Image 1" width="108px" height="108px">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img" src="<?php echo base_url().$objet[2]->photoChemin; ?>" alt="Product Image 2" width="108px" height="108px">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img" src="<?php echo base_url().$objet[3]->photoChemin; ?>" alt="Product Image 3" width="108px" height="108px">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $objet[0]->titre; ?></h1>
                            <p class="h3 py-2"><?php echo $objet[0]->prix_estimatif; ?> Ar</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            

                            <h6>Description:</h6>
                            <p><?php echo $objet[0]->descriptions; ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <form action="<?php echo base_url(); ?>frontoffice/myobjects/choixproduitechanger" method="post">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                   
                                    <div class="col-auto">
                                        <input type="hidden" name="id_objetdemande" value="<?php echo $objet[0]->id; ?>">
                                        <input type="hidden" name="id_userdemande" value="<?php echo $objet[0]->id_utilisateur; ?>">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Echanger</button>
                                    </div>
                                  
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Slider Script -->
    <script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>