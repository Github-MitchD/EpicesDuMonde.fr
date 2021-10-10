<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>EpicesDuMonde.fr</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">EpicesDuMonde.fr</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#link">Les épices</a></li>
                    <li class="nav-item "><a class="nav-link" href="#link">Les thés</a></li>
                    <li class="nav-item "><a class="nav-link" href="#link">Les condiments</a></li>
                    <li class="nav-item "><a class="nav-link" href="#link">Les accessoires</a></li>
                    <li class="nav-item "><a class="nav-link" href="#link">Nos recettes</a></li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-custom my-2 my-sm-0" type="submit" href="#admin"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z" />
                            <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                        </svg> Admin</a>
                </form>
            </div>
        </div>
    </nav>
    <section id="page">
        <div class="container hauteur">
            <div class="header-page px-3 pb-md-4 mx-auto text-center">
                <h1 class="page-title">Notre selection d'épices</h1>
            </div>
            <!-- modif -->

            <nav>
                <ul class="nav nav-pills justify-content-center mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#pills-1" role="tab" aria-selected="true">Epices d'Europe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pills-2" role="tab" aria-selected="false">Epices d'Océanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pills-3" role="tab" aria-selected="false">Epices d'Asie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pills-4" role="tab" aria-selected="false">Epices d'Amérique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pills-5" role="tab" aria-selected="false">Epices d'Afrique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#pills-6" role="tab" aria-selected="false">Les accessoires</a>
                    </li>
                </ul>
            </nav>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-1" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/anis-etoile-badiane.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">9.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">Anis Etoile Badiane</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/baies-de-goji.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">5.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">Baies de Goji</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/baies-de-la-passion.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">8.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">baies-de-la-passion</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="pills-2" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/baies-de-selim.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">10.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">baies-de-selim</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/baton-de-cannelle-de-ceylan.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">baton-de-cannelle-de-ceylan</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-3" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/cinq-baies.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">10.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">cinq-baies</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/clou-de-girofle.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">clou-de-girofle</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-4" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/ecorce-de-combava-entiere.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">10.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">ecorce-de-combava-entiere</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/encre-de-seiche-en-poudre.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">encre-de-seiche-en-poudre</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-5" role="tabpanel">
                    <div class="row">

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/filaments-de-safran.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">10.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">filaments-de-safran</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/galanga-en-racines-sechees.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">galanga-en-racines-sechees</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/guarana-en-graines.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">guarana-en-graines</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="pills-6" role="tabpanel">
                    <div class="row">

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/hachoir-en-inox-et-socle-en-bois.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">10.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">hachoir-en-inox-et-socle-en-bois</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/jeu-5-cuilleres-a-mesurer-plastique-couleurs.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € les 100g</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">jeu-5-cuilleres-a-mesurer-plastique-couleurs</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/lot-de-4-sacs-a-epices.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € le lot</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">lot-de-4-sacs-a-epices</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/mortier-en-olivier-et-son-pilon.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € le lot</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">mortier-en-olivier-et-son-pilon</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/mortier-plat-granit-copie.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € le lot</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">mortier-plat-granit-copie</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="img/pots-a-epices-en-inox.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

                                <div class="card-price">6.50 € le lot</div>

                                <div class="card-body">
                                    <h2 class="card-title text-center">pots-a-epices-en-inox</h2>
                                    <p class="card-text text-center">item description</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                        </svg> Commander</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <footer class="footer-page">
        <p>&copy; 2020 EpicesDuMonde.fr | Developed by Michel Dufour</p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>