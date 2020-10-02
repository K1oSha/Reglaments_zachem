<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord{

    public static function tableName()
    {
        return "user";
    }


    public static function existsEmail($email)
    {
        $count = static::find()->where(['email'=>$email])->count();
        return $count > 0;
    }
    public function setUserJoinForm($userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email = $userJoinForm->email;
        $this->setPassword($userJoinForm->password);
    }
    public static function findUserByEmail($email)
    {
        return static::findOne(['email'=>$email]);
    }
    public function setPassword($password)
    {
        $this->passhash = Yii::$app->security->generatePasswordHash($password);
        $this->authokey = Yii::$app->security->generateRandomString(100);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password,$this->passhash);
    }

}