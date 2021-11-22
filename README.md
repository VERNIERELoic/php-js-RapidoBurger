# Rapido project
CPE Lyon - Projet web 4ICS 

Le theme que nous avons choisi est une platform de commande pour un fast foot spécialisé dans le burger. Le site web mettra a disposition des utilisateurs et gerants un espace membre ainsi qu'une interface de configuration du burger

## Project Information 
- This project's based on MVC
- Usage of router
- Class autoloader
- Some part of the porject work with an REST API
### Models --> Repo --> Controller --> View

## Run project 

```bash
git clone https://github.com/VERNIERELoic/Rapido.git
php -S 127.0.0.1:8080
```
## 127.0.0.1:8080/public/  in your browser

# Connexion 

Nous utilision la methode PDO pour se connecter a notre base de donnée mariadb.

 Attributs :

     - dbhost #Ip serveur
     - dbname #Nom bdd
     - dbuser #User bdd
     - dbpass #Pass bdd
     - bdd # Variable qui sera transmises lors des besoins de connexion a la bdd



# Models 

## User

Cette class est le model pour la creation des utilisateurs

Attributs: 

     - id;
     - username;
     - password;
     - email;

## Burger

Cette class est le model pour les la creation des burger

Attributs:

     - pain;
     - legumes;
     - steakveg;
     - saucemaison;
     - orderid;

## Order

Cette class est le model pour les la creation des commandes

Attributs:

    - date;
    - userid;


# Repo 

Permet la manipulation en lien avec les models

## BaseRepo
Class abstraite permetant de partager la connexion aux autres classes via un parent construct
## UserRepo
Repo avec toutes les methodes necessaires à l'interaction avec les utilisateur :

```php
public function setUser($username, $password, $email);
#Cette methode permet la l'instantiation d'un objet user
```

```php
public function getUsers();
#Cette methode permet de recuperer tous les users de la bdd
```
```php
public function getUser($id);
#Cette methode permet de recuperer un user speciphique de la bdd via son id
```

## AuthRepo
## OrderRepo
## BurgerRepo
## TicketRepo

