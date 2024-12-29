## Contexte du Projet
Une société de location de voitures souhaite moderniser la gestion de ses données liées aux **clients**, **voitures**, et **contrats de location** via une **application web interactive**. Ce projet vise à fournir une solution complète et centralisée permettant une gestion efficace et intuitive des informations.

## Objectifs
- Concevoir une base de données relationnelle pour organiser les informations des clients, voitures, et contrats de location.
- Développer des fonctionnalités backend robustes en PHP en utilisant la programmation orientée objet (POO).
- Créer une interface utilisateur réactive et ergonomique avec **HTML**, **CSS**, et **Tailwind CSS**.

## Fonctionnalités Prévues
1. **Gestion des clients** :
   - Ajouter, modifier et supprimer des informations sur les clients.
2. **Gestion des voitures** :
   - Ajouter, modifier et supprimer des informations sur les voitures.
   - Visualiser la disponibilité des voitures.
3. **Gestion des contrats de location** :
   - Créer des contrats avec des informations telles que la durée, les tarifs, et les clients associés.

## Technologies Utilisées
- **Backend** : PHP avec programmation orientée objet (POO).
- **Frontend** : HTML, CSS, et Tailwind CSS.
- **Base de données** : MySQL.

## Organisation du Projet
### Phase 1 : Conception
- Modélisation Conceptuelle de Données (MCD) pour identifier les entités et relations.
- Traduction du MCD en Modèle Relationnel (MR).
- Création des tables en SQL.

### Phase 2 : Développement Backend
- Implémentation des classes pour les entités principales (ex. `Client`, `Voiture`, `Contrat`).
- Développement des méthodes pour ajouter, modifier et supprimer des données.
- Connexion à la base de données avec Mysqli.

### Phase 3 : Interface Graphique
- Conception des pages web responsives (tableau de bord, gestion des entités, etc.).
- Intégration des formulaires interactifs et des tableaux dynamiques.

### Phase 4 : Tests et Optimisations
- Validation des fonctionnalités backend.
- Amélioration de l’expérience utilisateur (UX).

## Répartition des Fichiers
- **`index.php`** : Point d’entrée de l’application.
- **`classes/`** : Définition des classes principales (POO).
- **`views/`** : Contient les fichiers HTML pour l’interface utilisateur.
- **`css/`** : Fichiers de style (incluant Tailwind CSS).
- **`scripts/`** : Scripts PHP pour les interactions avec la base de données.

## Conclusion
Ce projet permettra de simplifier la gestion quotidienne de la société en fournissant une solution intuitive et moderne, facilitant ainsi la prise de décisions basée sur des données précises et accessibles.
