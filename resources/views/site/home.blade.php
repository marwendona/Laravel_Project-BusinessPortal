@extends("layouts.template")

@section('contenu')


<br />
<br />
<br />



  
    <!-- About Section-->
    <section class="page-section bg-success p-2 text-white bg-opacity-75" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">
                Trouve Ton Pro</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->


            <p>Ce site permet aux utilisateurs de rechercher des services et d'afficher les fournisseurs de services par catégorie et par emplacement est un marché de services local. Les utilisateurs peuvent rechercher des services en fonction de la catégorie spécifique de services dont ils ont besoin, tels que le ménage, la plomberie ou le toilettage d'animaux. Ils peuvent également filtrer leur recherche par emplacement, par exemple par ville, pour trouver des prestataires de services disponibles dans leur région.
                Sur ce site, les utilisateurs peuvent consulter les profils des fournisseurs de services, pour les aider à prendre des décisions éclairées sur le fournisseur à embaucher.</p>
        </div>
    </section>


    <br />
    <br />
    
    


    <!--  Carrousel-->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://res.cloudinary.com/jerrick/image/upload/f_jpg,fl_progressive,q_auto,w_1024/5e7c6a36f80cb9001e4f1c2b.jpg"  class="d-block w-100"  width="300" height="600"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                 
                </div>
            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RWVeRl?ver=d481&q=90&m=6&h=431&w=767&b=%23FFFFFFFF&l=f&o=t&x=622&y=366&aim=true"  class="d-block w-100"  width="300" height="600"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                   
                </div>
            </div>


            <div class="carousel-item">
                <img src="https://storage.googleapis.com/prod-phoenix-bucket/fet/study_card/2/architecture-211122025055.jpg"  class="d-block w-100"   width="300" height="600"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <br />
    <br />
    
    


    
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">exemple d'activité</h2><br />
            <br />
            
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="https://storage.googleapis.com/prod-phoenix-bucket/fet/study_card/2/architecture-211122025055.jpg"  alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>

                        <img class="img-fluid" src="https://www.energierecrute.com/public/img/fiches_metiers/soudeur.jpg"  alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>

                        <img class="img-fluid" src="https://media.istockphoto.com/id/1166203849/fr/photo/plantes-de-coupe-douvrier-de-jardin.jpg?s=612x612&w=0&k=20&c=7O2MmUK9CXRpG3DGb92tQpU5vgkg0jnvc0ORGmy2Tk0="  alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="https://www.tereo-piscines.fr/wp-content/uploads/2020/01/galeries-1445500338-_DSC70321.jpg"  alt="..." />
                    </div>
                </div>

            </div>
        </div>
        </div>


        <br />
        <br />
        
        

        




















    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Architecte</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="https://storage.googleapis.com/prod-phoenix-bucket/fet/study_card/2/architecture-211122025055.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">En quoi consiste ce métier ? Construction d'un immeuble, réaménagement d'une cafétéria, réhabilitation d'une maison, etc. Le maître d'oeuvre de tous ces chantiers, c'est l'architecte. Il suit le projet de construction, de la commande à la livraison.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Soudeur</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->


                                <img class="img-fluid rounded mb-5" src="https://www.energierecrute.com/public/img/fiches_metiers/soudeur.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Le soudeur assemble, en les fusionnant, des ensembles ou sous-ensembles métalliques. Le soudeur réalise ainsi des soudures sur des ensembles mécano-soudés préassemblés.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jardinier</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="https://media.istockphoto.com/id/1166203849/fr/photo/plantes-de-coupe-douvrier-de-jardin.jpg?s=612x612&w=0&k=20&c=7O2MmUK9CXRpG3DGb92tQpU5vgkg0jnvc0ORGmy2Tk0=" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Dans le secteur public ou privé, le jardinier crée, aménage et entretient parcs, jardins et terrains de sport. La préparation des sols, les semis, les plantations de fleurs ou d'arbustes et l'entretien des allées et des pelouses sont de son ressort.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Technicien de la piscine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="https://www.tereo-piscines.fr/wp-content/uploads/2020/01/galeries-1445500338-_DSC70321.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Le technicien piscine est spécialisé dans le commerce et la vente de piscines mais également de tous les objets, produits et mécanismes qui permettent d'entretenir un bassin. Il peut également être amené à réaliser des études et devis concernant la vente d'accessoires de piscine.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </section>








@endsection
