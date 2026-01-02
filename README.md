## 🧩 Objectifs pédagogiques

- Comprendre ce qu’est une **méthode statique** en PHP  
- Savoir **quand et pourquoi** utiliser une méthode statique en POO  
- Différencier :
  - méthode statique
  - méthode d’instance
- Utiliser correctement `static` et l’opérateur `::`
- Appliquer les méthodes statiques dans un **contexte réel de projet**

---

## 📌 Contexte du live coding

On se base sur le projet de **plateforme de gestion de matchs sportifs**.

Certaines fonctionnalités du système ne dépendent pas d’un objet précis, mais plutôt :

- d’une règle métier  
- d’un calcul global  
- d’une vérification  
- ou d’un outil utilitaire  

👉 Ces cas sont **idéaux pour les méthodes statiques**.

---

## 🧠 Cas concrets à traiter pendant le live coding

### 1️⃣ Limitation du nombre de billets

Dans le projet, un utilisateur peut acheter **au maximum 4 billets par match**.

➡️ Créer une méthode statique chargée de :

- définir cette règle  
- la rendre accessible partout dans l’application  

💡 **Indice :**
- Cette règle ne dépend pas d’un utilisateur précis  
- Elle doit être centralisée  

---

### 2️⃣ Calcul du prix total des billets

Le prix total dépend :

- du prix unitaire  
- du nombre de billets  
- de la catégorie choisie  

➡️ Utiliser une méthode statique pour :

- calculer le total  
- éviter la duplication du calcul dans plusieurs classes  

💡 **Indice :**
- Pas besoin d’instancier un objet pour faire ce calcul  
- La méthode reçoit des paramètres et retourne un résultat  

---

### 3️⃣ Vérification des places disponibles

Avant l’achat, le système doit vérifier :

- si le nombre de places restantes est suffisant  

➡️ Implémenter une méthode statique de validation  

💡 **Indice :**
- Cette logique peut être appelée depuis plusieurs endroits  
- Elle représente une **règle métier globale**  

---

### 4️⃣ Génération d’un identifiant de billet

Chaque billet doit avoir :

- un identifiant unique  
- généré automatiquement  

➡️ Créer une méthode statique utilitaire pour :

- générer cet identifiant  
- garantir une logique unique dans tout le projet  

---

## 🧪 Points à expliquer pendant le live coding

- Déclaration d’une méthode avec `static`  
- Appel d’une méthode statique avec `NomClasse::methode()`  
- Pourquoi on n’utilise pas `$this` dans une méthode statique  
- Différence entre :
  - logique métier statique  
  - comportement lié à un objet  
