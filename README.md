###### Reglaments_zachem

установить php 7.1, mysql 5.5, лучший вариант это что то в духе OpenServer. Apache тоже нужен.  

```
composer global require "fxp/composer-asset-plugin:dev-master"  

composer require (понадобится токен github (personal access token))
```
в бд нужно создать базу данных с именем u0831054_reglament  

с юзером u0831054_reg и паролем turquiose_distribution  

применить миграции  

```
php yii.php migrate --migrationPath=@yii/rbac/migrations  

php yii.php migrate  

```
можно запускать! в опен сервере нужно ставить точку входа на папку /web  



Для создания ролей нужно перейти в /roles/view там создать двух пользотвателей   
Name:secretary Описание:Секретарь  
Name:prokuratura Описание:Прокуратура 
И присвоить данные роли пользователям: нажать на посмотреть присвоение ролей и присвоить данные роли

на домене `www.reglaments.it-demo.ru` развернут этот проект в работоспособном состоянии.  

можно залогиниться за секретаря по данным `rmkcyy@creatnew.pw` : `secretary`  

можно залогиниться за сотрудника прокуратуры по данным `prokuratura@mailper.work` : `prokuratura`  



`https://www.1day.email/mailbox/rmkcyy@creatnew.pw` ссылка для проверки почты секретаря
`https://www.1day.email/mailbox/prokuratura@mailper.work` ссылка для проверки почты прокуратуры

