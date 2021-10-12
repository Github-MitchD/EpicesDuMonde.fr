<?php
require_once "models/pdo.php";
require_once "models/epice.dao.php";
require_once "config/Securite.php";

function getPageAdmin()
{
    $title = "Page d'admin";
    $description = "Description de la page d'admin";

    $categories = getAllCategories();
    $epices = getAllEpices();

    require_once 'views/back/adminViews.php';
}

function getPageViewEpice()
{
    $title = "Admin - Voir une fiche épice";
    $description = "Description de la page d'admin";

    // $categories = getAllCategories();
    // $epices = getAllEpices();

    require_once 'views/back/epiceViews.php';
}


