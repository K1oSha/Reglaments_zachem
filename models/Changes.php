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
                [['message','id_reglament','date','f11','f12','f131','f132','f21','f22',
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