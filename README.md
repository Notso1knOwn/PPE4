## Description:
 Ce site e-commerce est réalisé avec le framework symfony. Ce dernier utilise Easyadmin, webPackEncore, chart.js, vanilla-tilt.js. 

## Elements requis:
 ide (netbeans de préférence pour les ressources swings)  
 mySQL (ou autre)   
 phpMyAdmin (ou autre) 

## Installation:
Dans le cas ou vous voudriez cloner ce repositorie sur votre machine exécuter la commande :

Si vous n'avez pas git sur votre machine :
```bash
apt-get install git
```

Auquel cas :

```bash
git clone https://github.com/Notso1knOwn/PPE4.git
```

Aussi non téléchargez le zip du projet et dézipper dans le répertoire que vous lui avez affecté.

## Utilisation:
 Après avoir récupérer le contenu du repository et avoir installer les elements necessaire à symphony (doctrine, composer, yarn ...) effectuer la commande:
```bash
composer install
```
ou
```bash
composer update
```

N'oubliez pas de changer les info de la BDD dans le .env
```bash
DATABASE_URL="mysql://BBD_USER:BDD_PASSWORD@IP:PORT/BDD_DBNAME?serverVersion=5&charset=utf8"
```
