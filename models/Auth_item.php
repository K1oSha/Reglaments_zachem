<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Auth_item extends ActiveRecord
{

    public static function tableName()
    {
        return 'auth_item';
    }

    public function rules()
    {
        return[
            [['name','type','description'],'required'],
            [['rule_name','data','created_at','updated_at'],'fields'],
        ];
    }

    public static function getList()
    {
        return ArrayHelper::map(self::find()->all(), 'name', 'description');
    }
}