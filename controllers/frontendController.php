<?php
require_once "models/pdo.php";

function getPageAccueil()
{
    $title = "Page d'accueil";
    $description = "Description de la page d'accueil";

    require_once 'views/front/accueilViews.php';
}
