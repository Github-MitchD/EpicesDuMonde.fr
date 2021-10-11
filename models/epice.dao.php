<?php

/**
 * Fonction qui permet de recuperer tous les épices
 * @return $epices
 */

function getAllEpices()
{
    $bdd = connexionPDO();
    $req = "SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category
                                                FROM items LEFT JOIN categories ON items.category = categories.id
                                                ORDER BY items.name ASC";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $epices = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    return $epices;
}

/**
 * Fonction qui permet de recuperer toutes les categories
 * @return $categories
 */

function getAllCategories()
{
    $bdd = connexionPDO();
    $req = "SELECT * FROM categories ORDER BY id";
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    return $categories;
}
