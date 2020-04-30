# [](#installation-du-projet)Installation du projet (Linux)

  

Les technos :


- Docker (conteneur)

- Nginx (serveur web)

- Postgresql (base de donnée)

- Symfony 5
  

Nginx tourne sur le port 80 de la machine physique et postgresql sur le port 5432 (celui par défaut), merci de laisser ces ports disponibles pour pour pouvoir travailler sur le projet

  

### [](#pr%C3%A9requis-)Prérequis :

  

Docker :
  

[https://docs.docker.com/install/linux/docker-ce/ubuntu/](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
  

Il vous faudra aussi docker compose pour gérer les différents containers :
  

[https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/)

  

# Set up de docker



```bash
# A exécuter à la racine du projet
sudo docker-compose up -d
```


```bash
# Installation des dépendances pour symfonyt
sudo docker-compose exec php composer install -d /php
```



# Accès depuis un VHost



```bash
sudo gedit /etc/hosts
```


Dans le fichier Hosts ajouter cette ligne:

127.0.0.1 app.symfony.fr

Enregistrer (Ctrl+s), maintenant vous aurez accès, à l'app symfony via l'adresse app.symfony.fr



# Lancement de commande Symfony



Pour lancer des commandes symfony il faut utiliser la commande suivante avant:

```bash
sudo docker-compose exec
```

(Pour faire appel a une commande symfony il faut bien préciser le volume sur lequel vous voulez executer la commande !!)

```bash
# exemple
# le nom du volume est '/php' donc il faut préciser /php avant le /bin/console
# ce qui donne :
sudo docker-compose exec php /php/bin/console make:entity
```


# Accès à la Database



La database est une data base **Postgresql** !!!

Pour y accéder rentrer la commande suivante dans le dossier racine du projet

```bash
sudo docker-compose exec postgres psql -U postgres
```