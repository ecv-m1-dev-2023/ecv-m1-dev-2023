# Les bases de PHP et MySQL

###### Ce repo sert de support de cours d'initiation à Php et Mysql

Pour ce cours, dans le dossier `php_mysql` on trouve

- le [support de cours](./slides/index.html)
- un fichier [Dockerfile](./Dockerfile) pour démarrer rapidement un *serveur PHP* 
- un fichier [docker-compose.yml](./docker-compose.yml) avec le *serveur PHP*, un *serveur MySQL* et *Adminer*


### Mettre en route le serveur PHP

Les serveurs sont gérés via [Docker](https://docs.docker.com/).  
Pour cela, on a créé un `Dockerfile` qui ajoute des configurations supplémentaire, le débugger [xdebug](https://xdebug.org/docs/) 
ainsi que les drivers MySQL pour PHP.

#### Pour construire l'image PHP :
```shell
docker build . -t php
```

#### Pour lancer le container PHP :
```shell
docker run -d --name php -v ./html:/var/www/html -v ./php-conf.d:/usr/local/etc/php/conf.d/ -p 80:80 php
```

#### Pour stopper et détruire le container
```shell
docker rm -f php
```

### Mettre en route le serveur MySQL

Dans ce cas, on a pas eu besoin de créer une image docker car l'image de base contient tout ce dont on a besoin.

#### Pour lancer le container MySQL :
```shell
docker run -d --name mysql -v ./data:/var/lib/mysql -v ./mysql-conf.d/my.cnf:/etc/mysql/conf.d/my.cnf -p 3306:3306 mysql
```

#### Pour stopper et détruire le container
```shell
docker rm -f mysql
```

### Mettre en route les deux serveurs (Php et MySQL)

Pour lancer les deux serveurs d'un coup, on utilise [Docker Compose](https://docs.docker.com/compose/).  
Le fichier `docker-compose.yml` nous permet de gérer nos serveurs.  
L'utilitaire [Adminer](https://www.adminer.org/) a été ajouté pour facilement accéder aux bases de données.

#### Lancer les containers
```shell
docker compose up -d
```

#### Stopper et détruire les containers
```shell
docker compose down
```

### Accéder aux exercices :

Une fois le container démarré, dirigez-vous vers [http://localhost](http://localhost)

### Accéder au gestionnaire de bdd :

Pour accéder à Adminer, dirigez-vous vers [http://localhost:8080](http://localhost:8080)
