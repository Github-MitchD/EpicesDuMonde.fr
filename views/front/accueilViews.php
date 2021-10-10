<?php
ob_start();
?>

<!-- CONTENT -->

<section id="page">
    <div class="container hauteur">
        <div class="header-page px-3 pb-md-4 mx-auto text-center">
            <h1 class="page-title">Notre selection d'épices</h1>
        </div>

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
                            <img src="<?= URL ?>public/img/anis-etoile-badiane.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/baies-de-goji.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/baies-de-la-passion.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/baies-de-selim.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/baton-de-cannelle-de-ceylan.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/cinq-baies.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/clou-de-girofle.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/ecorce-de-combava-entiere.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/encre-de-seiche-en-poudre.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/filaments-de-safran.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/galanga-en-racines-sechees.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/guarana-en-graines.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/hachoir-en-inox-et-socle-en-bois.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/jeu-5-cuilleres-a-mesurer-plastique-couleurs.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/lot-de-4-sacs-a-epices.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/mortier-en-olivier-et-son-pilon.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/mortier-plat-granit-copie.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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
                            <img src="<?= URL ?>public/img/pots-a-epices-en-inox.jpeg" class="card-img-top" width="100%" height="auto" alt="...">

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

<?php

$content = ob_get_clean();
$title = "EpicesDuMonde.fr";
require "views/commons/template.php";
