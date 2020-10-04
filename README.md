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



для корректной работы нужно создать юзера, роли secretary, prokuratura и присовить ему одну из них
на домене www.reglaments.it-demo.ru развернут этот проект в работоспособном состоянии.
можно залогиниться за секретаря по данным rmkcyy@creatnew.pw : secretary
https://www.1day.email/mailbox/rmkcyy@creatnew.pw ссылка для проверки почты 

