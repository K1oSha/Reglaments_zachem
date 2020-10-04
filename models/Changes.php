<?php

namespace app\models;



use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Changes extends ActiveRecord
{
    public function rules()
    {
        return
            [
                [['message','id_reglament','date_was','date_became','f11_was','f12_was','f131_was','f132_was','f21_was','f22_was',
                    'f11_became','f12_became','f131_became','f132_became','f21_became','f22_became',
                    'f11_comment_proc','f12_comment_proc','f131_comment_proc','f132_comment_proc','f21_comment_proc','f22_comment_proc'],
                    'fields','message'=>'Это поле должно быть заполнено'],
            ];
    }
    public function attributeLabels()
    {
        return
            [
                'message'=>'Название',
            ];
    }

}