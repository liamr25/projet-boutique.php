<?php
// initialisation du stock
$articles = ["Chaussettes", "T-shirts", "Chaussures", "Robes", "Casquettes"];
$quantites = [10, 5, 8, 3, 12];
$ventes = [0, 0, 0, 0, 0]; // suivi des ventes

// affichage des articles disponibles
echo "Articles disponibles :";
echo PHP_EOL;
for ($i = 0; $i < count($articles); $i++) {
    echo "$i : $articles[$i]";
    echo PHP_EOL;
}
echo PHP_EOL;
echo "Quantités en stock :";
echo PHP_EOL;
for ($i = 0; $i < count($articles); $i++) {
    echo "$articles[$i] :  $quantites[$i] en stock";
    echo PHP_EOL;
}
echo PHP_EOL;
// réalisation d'une vente
$indexVente = (int)readline("Choisissez un article à vendre (index) : ");
$quantiteVente = (int)readline("Quantité à vendre : ");

if ($indexVente >= 0 && $indexVente < count($articles)) {
    if ($quantites[$indexVente] >= $quantiteVente) {
        $quantites[$indexVente] -= $quantiteVente;
        $ventes[$indexVente] += $quantiteVente;
        echo "Vente de $quantiteVente $articles[$indexVente] confirmée";
        echo PHP_EOL;
    } else {
        echo "Stock insuffisant pour $articles[$indexVente]";
        echo PHP_EOL;
    }
} else {
    echo "Index invalide pour la vente.";
    echo PHP_EOL;
}
echo PHP_EOL;
// réapprovisionnement du stock
$indexReappro = (int)readline("Choisissez un article à réapprovisionner (index) : ");
$quantiteReappro = (int)readline("Quantité à ajouter : ");

if ($indexReappro >= 0 && $indexReappro < count($articles)) {
    $quantites[$indexReappro] += $quantiteReappro;
    echo "Nouvelle quantité de $articles[$indexReappro] : $quantites[$indexReappro]";
    echo PHP_EOL;
} else {
    echo "Index invalide pour le réapprovisionnement.";
    echo PHP_EOL;
}
echo PHP_EOL;
// synthèse et affichage du stock
echo "État actuel du stock :";
echo PHP_EOL;
foreach ($articles as $index => $article) {
    echo "$article : $quantites[$index] en stock";
    echo PHP_EOL;
    if ($quantites[$index] == 0) {
        echo "$article est en rupture de stock !";
        echo PHP_EOL;
    }
}
echo PHP_EOL;
// suivi des ventes totales par article
echo "Nombre total de ventes par article :";
echo PHP_EOL;
foreach ($articles as $index => $article) {
    echo "$article : $ventes[$index] vendus";
    echo PHP_EOL;
}
echo PHP_EOL;
// suppression d'un article
$indexSuppression = (int)readline("Choisissez un article à supprimer (index) : ");

if ($indexSuppression >= 0 && $indexSuppression < count($articles)) {
    array_splice($articles, $indexSuppression, 1);
    array_splice($quantites, $indexSuppression, 1);
    array_splice($ventes, $indexSuppression, 1);
    echo "Article supprimé.";
    echo PHP_EOL;
} else {
    echo "Index invalide pour la suppression.";
    echo PHP_EOL;
}
echo PHP_EOL;
// affichage de la liste des articles restants
echo "Articles restants :";
echo PHP_EOL;
for ($i = 0; $i < count($articles); $i++) {
    echo "$i : $articles[$i] - $quantites[$i] en stock";
    echo PHP_EOL;
}
