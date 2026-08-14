# KMS Portfolio - Site Personnel & Administration 🚀

Bienvenue sur le dépôt du code source de mon portfolio professionnel, accessible en ligne sur **[kmscraft.com](https://kmscraft.com)**. 

Ce projet est un site web dynamique développé avec **Laravel**, **Tailwind CSS** et **MySQL**. Il me permet de présenter mes compétences, mes projets récents et offre une interface d'administration privée pour gérer mon contenu en temps réel.

---

## 🛠️ Stack Technique

* **Framework Backend** : Laravel (PHP)
* **Design & UI** : Tailwind CSS (Responsive, animations fluides, glassmorphism)
* **Base de données** : MySQL (Gestion des projets et des compétences)
* **Icônes** : FontAwesome 6
* **Déploiement** : Hébergement web avec serveur mail configuré

---

## ✨ Fonctionnalités Majeures

1. **Page d'Accueil Dynamique** :
   - Présentation professionnelle (Héro, À propos, CV téléchargeable).
   - Affichage dynamique des compétences avec calcul automatique de la progression (cercle SVG) et de la couleur associée au survol (Laravel 🔴, Spring Boot 🟢, PHP 🟣, etc.).
   - Section de projets récents avec détection automatique du type de lien (affiche "Code source" pour les liens GitHub et "Lien du site" pour les sites web déployés).
2. **Formulaire de Contact Sécurisé** :
   - Validation stricte des données côté serveur (Laravel Validation).
   - Système d'alerte de succès après envoi.
   - Envoi immédiat des messages par email via la façade `Mail` de Laravel.
3. **Espace d'Administration Privé** :
   - **Gestion des Projets** : Formulaire complet pour ajouter ou supprimer des projets avec sélection d'icônes et de catégories (Web, Mobile, etc.).
   - **Gestion des Compétences** : Formulaire pour ajuster les pourcentages de maîtrise et les icônes associées.

---

## 💻 Installation en Local

Pour faire tourner le projet sur ta machine de développement :

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/koffimokpokposodehoundji-boop/portfolio.git
   cd portfolio
   ```

2. **Installer les dépendances PHP** :
   ```bash
   composer install
   ```

3. **Configurer le fichier d'environnement** :
   Copie le fichier d'exemple et génère la clé d'application :
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurer la Base de Données** :
   Ouvre le fichier `.env` et renseigne tes informations de connexion de base de données (MySQL) :
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio
   DB_USERNAME=votre_utilisateur
   DB_PASSWORD=votre_mot_de_passe
   ```

5. **Lancer les migrations** :
   ```bash
   php artisan migrate
   ```

6. **Lancer le serveur de développement** :
   ```bash
   php artisan serve
   ```
   Le site sera accessible sur `http://127.0.0.1:8000`.

---

## 📬 Contact

* **Email** : koffimokpokposodehoundji@gmail.com
* **LinkedIn** : [Koffi Mokpokpo SODEHOUNDJI](https://www.linkedin.com/in/koffi-mokpokpo-sodehoundji-6b496b243)
