
# SupDePepAPI

**Note : Ce projet n'est en aucun cas financé, demandé ou approuvé par SupDeVinci, Pepal ou le Groupe Emineo Éducation. Il s'agit d'un projet indépendant créé dans le but de faciliter l'accès à l'application SupDePep pour les étudiants.**

## Description

SupDePepAPI est une API développée en utilisant le framework Laravel. Elle est conçue pour fournir un accès aux fonctionnalités de l'application SupDePep, similaire à Pronote, à travers des interfaces bureaux, mobiles et web.

## Utilité

L'API offre les fonctionnalités suivantes :

- **Accès aux Données Éducatives** : SupDePepAPI permet aux utilisateurs de récupérer des données éducatives telles que les emplois du temps, les notes, les absences, etc., directement depuis l'application SupDePep.

- **Intégration avec d'autres Applications** : Les développeurs peuvent intégrer cette API dans des applications bureaux, mobiles ou des sites web pour offrir une expérience utilisateur plus complète aux étudiants de SupDeVinci.

- **Automatisation des Tâches** : Les utilisateurs peuvent automatiser certaines tâches liées à la gestion de leur emploi du temps et de leurs données éducatives grâce à cette API.

## Prérequis

Avant de commencer à utiliser SupDePepAPI, assurez-vous d'avoir les éléments suivants installés :

- Laravel 10
- Php Goutte

## Installation

1. Clonez ce référentiel sur votre machine locale.

```bash
git clone https://github.com/votre-utilisateur/SupDePepAPI.git
```

2. Accédez au répertoire du projet.

```bash
cd SupDePepAPI
```

3. Installez les dépendances nécessaires.

```bash
composer install
```

4. Configurez les paramètres de base de données dans le fichier `.env`.

5. Exécutez les migrations de base de données.

```bash
php artisan migrate
```

6. Lancez le serveur de développement.

```bash
php artisan serve
```

L'API sera maintenant accessible à l'adresse `http://localhost:8000`.

## Utilisation



## Contribuer

Si vous souhaitez contribuer à ce projet, n'hésitez pas à ouvrir une issue ou à proposer une demande d'extraction (Pull Request). Toute contribution est la bienvenue !

## Avertissement

Ce projet est développé de manière indépendante et n'a aucune affiliation officielle avec SupDeVinci, Pepal ou le Groupe Emineo Éducation. Veuillez utiliser cette API conformément aux règles et politiques de l'institution.

## Licence

Ce projet est sous licence MIT. Vous pouvez consulter le fichier [LICENSE](LICENSE) pour plus de détails.

