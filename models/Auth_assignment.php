<?php

namespace app\models;
use yii\db\ActiveRecord;

class Auth_assignment extends ActiveRecord
{
    public function rules()
    {
        return[
            [['item_name','user_id'],'required'],
            [['created_at'],'fields']
        ];
    }

}