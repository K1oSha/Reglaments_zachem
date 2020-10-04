# Reglaments_zachem

установить php 7.1, mysql 5.5, лучший вариант это что то в духе OpenServer. Apache тоже нужен.

composer global require "fxp/composer-asset-plugin:dev-master"
composer require (понадобится токен github (personal access token))

в бд нужно создать базу данных с именем u0831054_reglament
с юзером u0831054_reg и паролем turquiose_distribution
применить миграции

php yii.php migrate --migrationPath=@yii/rbac/migrations
php yii.php migrate

можно запускать! в опен сервере нужно ставить точку входа на папку /web 

для работы с выводом в пдф нужно сгенерировать ключи
для корректной работы нужно создать роли secretary, prokuratura 

