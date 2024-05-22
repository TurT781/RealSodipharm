# Projet Sodipharm - Système de Gestion d'Étagères pour une Société Pharmaceutique

Bienvenue dans le projet Sodipharm !

Ce projet a été développé par trois étudiants de l'école Next-U dans le cadre de leur deuxième année d'études. L'objectif principal de ce projet était de créer une application pour une société pharmaceutique nommée Sodipharm. L'application vise à fournir un système de gestion efficace pour ranger et organiser les produits pharmaceutiques sur des étagères, en utilisant un système de drag-and-drop intuitif.

## Fonctionnalités principales

- **Gestion des Produits** : Permet aux utilisateurs d'ajouter, de modifier et de supprimer des produits pharmaceutiques de la base de données.
- **Gestion des Étagères** : Offre la possibilité de créer, d'éditer et de supprimer des étagères pour stocker les produits.
- **Système de Drag-and-Drop** : Permet aux utilisateurs de déplacer facilement les produits entre les différentes étagères en utilisant un système de drag-and-drop convivial.
- **Interface Utilisateur Intuitive** : Propose une interface utilisateur moderne et intuitive pour faciliter la navigation et l'utilisation de l'application.

## Technologies Utilisées

Ce projet a été développé en utilisant les technologies suivantes :

- **Symfony** : Framework PHP moderne pour le développement d'applications web.
- **JavaScript** : Langage de programmation utilisé pour la logique front-end, y compris le système de drag-and-drop.
- **MySQL** : Système de gestion de base de données relationnelle pour stocker les données des produits et des étagères.

## Installation

Pour installer et exécuter localement ce projet sur votre machine, suivez ces étapes :

1. Clonez ce dépôt GitHub sur votre machine locale.
2. Assurez-vous d'avoir PHP, Composer et MySQL installés sur votre machine.
3. Configurez les variables d'environnement dans le fichier `.env` pour correspondre à votre configuration de base de données.
4. Exécutez `composer install` pour installer les dépendances du projet.
5. Créez la base de données en exécutant `php bin/console doctrine:database:create`.
6. Exécutez les migrations pour créer les tables de base de données avec `php bin/console doctrine:migrations:migrate`.
7. Lancez le serveur Symfony en exécutant `symfony serve`.
8. Accédez à l'URL `http://localhost:8000` dans votre navigateur pour utiliser l'application.

## Contribution

Nous sommes ouverts aux contributions de la communauté ! Si vous avez des idées d'amélioration ou des fonctionnalités que vous aimeriez voir ajoutées à l'application, n'hésitez pas à créer une nouvelle issue ou à soumettre une pull request.

## Membres de l'Équipe

- **Chef de Projet** : Pierre Paillard
- **Étudiants** :
  - Oriane Houssin
  - Valentin Vegee
  - Flavien Patriarca

## Liens

- [Trello](https://trello.com/b/DP4whvNq/user-story)
- [Figma](https://www.figma.com/file/8XGcvmsOSr2IWYDZIzFdwd/Untitled?type=design&node-id=0-1&mode=design&t=Ywn4rcwUUhcFjue8-0)
- [Excalidraw](https://excalidraw.com)
- [GitHub Repository](https://github.com/TurT781/RealSodipharm)
