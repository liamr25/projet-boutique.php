# 🛒 Projet : Gestion de Stock d'une Boutique

## 📜 Contexte

Votre mission est de concevoir un script PHP permettant de simuler la gestion du stock d'une petite boutique. Cette boutique vend des articles 🛍️ divers, et vous devez concevoir un programme qui permet de suivre l'état du stock au fil des ventes 🛒 et des réapprovisionnements 📦. Le projet consiste à utiliser des tableaux indexés 📊 à une dimension pour modéliser le stock de la boutique. Vous devrez écrire plusieurs parties du programme en suivant les étapes ci-dessous.

### **🎯 Objectifs :**

- Manipuler des tableaux indexés 📊 en PHP 8.
- Comprendre comment ajouter ➕, modifier ✏️ et supprimer ❌ des éléments dans un tableau.
- Écrire un programme organisé avec des étapes logiques 📝.

### **📋 Déroulé du projet :**

#### 1. 🏗️ Initialisation du stock
   
   Créez un tableau indexé 📊 pour modéliser les articles de la boutique. Ce tableau doit contenir les noms des articles vendus par la boutique. Par exemple : "🧦 Chaussettes", "👕 T-shirts", "👟 Chaussures", etc.
   
   - Créez un tableau indexé 📊 à une dimension contenant au moins 5 articles.
   - Affichez la liste des articles disponibles 📃 en utilisant une boucle `for`.
   - Affichez la liste des articles disponibles 📃 en utilisant une boucle `foreach`.

#### 2. 📦 Gestion des Stocks 

   Associez maintenant un stock à chaque article de la boutique. Pour cela, créez un deuxième tableau indexé 📊 contenant les quantités en stock de chaque article.
   
   - Le tableau des quantités doit avoir le même nombre d'éléments que celui des articles. Par exemple : 10, 5, 8, 3, 12 (qui représentent les quantités en stock des articles correspondants).
   - Affichez la liste des articles avec leur quantité en stock en utilisant une boucle `for`.

#### 3. 🛍️ Réalisation d'une Vente

   Simulez une vente dans la boutique :
   
   - Demandez à l'utilisateur de choisir un article (par son index dans le tableau) et de spécifier la quantité vendue.
   - Modifiez la quantité en stock en conséquence (vérifiez que le stock est suffisant avant d'effectuer la vente).
   - Affichez un message confirmant la vente ✅ ou indiquant que le stock est insuffisant ❌.

#### 4. 🔄 Réapprovisionnement du Stock 

   Simulez le réapprovisionnement d'un article :
   
   - Demandez à l'utilisateur de choisir un article à réapprovisionner (par son index) et de spécifier la quantité à ajouter ➕.
   - Modifiez la quantité en stock en ajoutant la quantité spécifiée.
   - Affichez la nouvelle quantité en stock de l'article.

#### 5. 📊 Synthèse et Affichage du Stock 

   Affichez une synthèse de l'état actuel du stock de la boutique :
   
   - Affichez chaque article avec la quantité restante en stock 📉.
   - Indiquez les articles qui sont en rupture de stock (quantité égale à 0) 🚫.

#### 6. 📈 Suivi des Ventes Totales par Article 

   Implémentez une fonctionnalité permettant de suivre le nombre de ventes pour chaque article :
   
   - Créez un tableau indexé 📊 pour stocker le nombre total de ventes pour chaque article.
   - À chaque vente, mettez à jour ce tableau en ajoutant la quantité vendue.
   - Affichez la liste des articles avec le nombre total de ventes 📈.

#### 7. ❌ Suppression d'un Article 

   Ajoutez une fonctionnalité permettant de retirer un article de la boutique :
   
   - Demandez à l'utilisateur de choisir un article (par son index) à supprimer 🗑️.
   - Supprimez l'article et sa quantité correspondante des tableaux.
   - Affichez la liste des articles restants 📃 et leurs quantités.
