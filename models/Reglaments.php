<?php

namespace app\models;



use Yii;
use yii\db\ActiveRecord;

class Reglaments extends ActiveRecord
{
    public function rules()
    {
        return
            [
                [['message','state','state_upr',
                'state_gov',
                    'state_expert',
                    'state_prok',
                    'state_economics',

                ],'required'],
                [['comment_gov','comment_upr','comment_expert','comment_prok','comment_economics'],'fields']
            ];
    }
    public function attributeLabels()
    {
        return
            [
                'message'=>'Сам регламент',
                'state'=>'Общий статус проврки',
                'state_upr'=>'Ст. Уполномо',
                'comment_upr'=>'Комментарий Уполномоч',
                'state_gov'=>'Ст. Правительства',
                'comment_gov'=>'Комментарий Правительства',
                'state_expert'=>'Ст. Экспертов',
                'comment_expert'=>'Комментарий Экспертов',
                'state_prok'=>'Ст. Прокуратуры',
                'comment_prok'=>'Комментарий Прокуратуры',
                'state_economics'=>'Статус Экономистов',
                'comment_economics'=>'Комментарий Экономистов',
            ];
    }

    public function getStateList_for_check()
    {
        return[
          'Ожидает проверки','Возвращено на доработку','Проверено'
        ];
    }
    public function getStateList_for_reglament()
    {
        return[
            'Проверяется','Согласован'
        ];
    }
}