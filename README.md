# 📦 Mini Bid API

Mini back-end d’enchères en HTTP réalisé en PHP/Symfony.

---

## 🚀 Fonctionnalités

### 🔐 Login (création de session)
- **URL** : `GET /<userId>/login`
- **Retour** : une clé de session (`sessionKey`) valide pendant 10 minutes.

---

### 💰 Poster une enchère
- **URL** : `POST /<itemId>/bid?sessionKey=<sessionKey>`
- **Body** : un nombre `double` représentant la valeur de l'enchère.
- **Conditions** :
  - Un utilisateur peut faire plusieurs offres.
  - Seule sa meilleure offre peut être retournée.

---

### 🏆 Obtenir les meilleures enchères
- **URL** : `GET /<itemId>/topBidList`
- **Retour** : JSON avec les 15 meilleures offres (une seule par utilisateur), triées par ordre décroissant.

---

## ⚙️ Installation

### Prérequis
- PHP >= 8.1
- Composer
- Symfony CLI (optionnel)

### Étapes

### Cloner le projet
    git clone https://github.com/ton-utilisateur/mini-bid-api.git
    cd mini-bid-api
    composer install

### ✅ Lancer le serveur
    symfony server:start
### ou
    php -S localhost:8000 -t public

### ✅ Lancer les tests
    php bin/phpunit

### Le projet contient des tests qui couvrent :
- La création et la validité des sessions
- L’enregistrement et la récupération des offres
- Les appels API (endpoints)

### 📁 Structure du projet
- src/Service/SessionManager.php : gestion des sessions utilisateurs
- src/Service/BidManager.php : gestion des offres
- src/Controller/SessionController.php : endpoint /login
- src/Controller/BidController.php : endpoints /bid et /topBidList
- tests/ : tests unitaires

### 📌 Remarques
- Les données sont stockées dans des fichiers JSON temporaires (/tmp/BidApi/).
- Aucun système de base de données n’est requis.
- Pas de persistance longue durée, les fichiers sont supprimés à l'arrêt du serveur.

