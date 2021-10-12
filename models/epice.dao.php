<?php

/**
 * Fonction qui permet de recuperer tous les articles
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

/**
 * Fonction qui permet de recuperer un article en fonction de son id
 * 
 * @param int $id
 * @return $epice
 */
function getEpiceById($id)
{
    $bdd = connexionPDO();
    $req = "SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category, categories.id AS catId
    FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id = :id";
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $epice = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    return $epice;
}

/**
 * Fonction qui permet l'ajout d'un article dans la base de données
 *
 * @param string $name
 * @param int $category
 * @param [type] $price
 * @param string $description
 * @param string $media
 * @return booleen
 */
function insertArticleIntoBdd($name, $category, $price, $description, $media)
{
    $bdd = connexionPDO();

    $req = "INSERT INTO items (name, category, price, description, image)
    values (:name, :category, :price, :description, :image)";

    $stmt = $bdd->prepare($req);

    $stmt->bindValue(":name", $name, PDO::PARAM_STR);
    $stmt->bindValue(":category", $category, PDO::PARAM_INT);
    $stmt->bindValue(":price", $price, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->bindValue(":image", $media, PDO::PARAM_STR);

    $result = $stmt->execute();
    $stmt->closeCursor();
    //si la requete s'est bien deroulée
    if ($result > 0) return true;
    else return false;
}