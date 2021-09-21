placez vous à la racine du projet, puis lancez le serveur dans un terminal:

```php -S localhost:8000```

Accédez au projet à l'url http://localhost:8000/index.php


Notions abordées:

- Classes d'objets
- Encapsulation, attributs & méthodes
- Visibilité
- Instances d'objets
- Autoloading
- Design pattern Repository 


Base de données à créer :

```
hôte: localhost
nom de la base: php
utilisateur: php
mot de passe: php
```

(ou bien changer les identifiants dans index.php ligne 38)


Table SQL à créer:

```
CREATE TABLE `personnages` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `nom` VARCHAR(32) NOT NULL ,
    `forcePerso` INT NULL ,
    `degats` INT NULL ,
    `niveau` INT NULL ,
    `experience` INT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;
```