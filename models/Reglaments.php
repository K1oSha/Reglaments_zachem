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
                [['comment_gov','comment_upr','comment_expert','comment_prok','comment_economics'],'fields'],
                [['f11','f12','f131','f132','f21','f22','f23','f241','f242','f243','f25','f261','f262','f263','f271','f272','f273','f28','f29','f210','f2111','f2112','f212','f213','f214','f215','f2161','f2162','f2163','f2164','f217','f31','f32','f33','f34','f351','f352','f353','f354','f355','f35611','f35612','f35613','f35614','f3562','f3563','f3564','f41','f42','f43','f44','f45','f46','f51','f52','f53','f54','f61','f62','f63','f64','f641','f642','f643','f644','f645','f646','f647','f648','f649','f6410'], 'fields'],
            ];
    }
    public function attributeLabels()
    {
        return
            [
                 'f11'=>'asdf',
                // 'f12'=>'',
                // 'f131'=>'',
                // 'f132'=>'',
                // 'f21'=>'',
                // 'f22'=>'',   
                // 'f23'=>'',
                // 'f241'=>'',
                // 'f242'=>'',
                // 'f243'=>'',
                // 'f25'=>'',
                // 'f261'=>'',
                // 'f262'=>'',
                // 'f263'=>'',
                // 'f271'=>'',
                // 'f272'=>'',
                // 'f273'=>'',
                // 'f28'=>'',
                // 'f29'=>'',
                // 'f210'=>'',
                // 'f2111'=>'',
                // 'f2112'=>'',
                // 'f212'=>'',
                // 'f213'=>'',
                // 'f214'=>'',
                // 'f215'=>'',
                // 'f2161'=>'',
                // 'f2162'=>'',
                // 'f2163'=>'',
                // 'f2164'=>'',
                // 'f217'=>'',
                // 'f31'=>'',
                // 'f32'=>'',
                // 'f33'=>'',
                // 'f34'=>'',
                // 'f351'=>'',
                // 'f352'=>'',
                // 'f353'=>'',
                // 'f354'=>'',
                // 'f355'=>'',
                // 'f35611'=>'',
                // 'f35612'=>'',
                // 'f35613'=>'',
                // 'f35614'=>'',
                // 'f3562'=>'',
                // 'f3563'=>'',
                // 'f3564'=>'',
                // 'f41'=>'',
                // 'f42'=>'',
                // 'f43'=>'',
                // 'f44'=>'',
                // 'f45'=>'',
                // 'f46'=>'',
                // 'f51'=>'',
                // 'f52'=>'',
                // 'f53'=>'',
                // 'f54'=>'',
                // 'f61'=>'',
                // 'f62'=>'',
                // 'f63'=>'',
                // 'f64'=>'',
                // 'f641'=>'',
                // 'f642'=>'',
                // 'f643'=>'',
                // 'f644'=>'',
                // 'f645'=>'',
                // 'f646'=>'',
                // 'f647'=>'',
                // 'f648'=>'',
                // 'f649'=>'',
                // 'f6410'=>'',
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
    public function getStateName_for_check_upr()
    {
        $list=$this->getStateList_for_check();
        return $list[$this->state_upr];
    }
    public function getStateName_for_check_gov()
    {
        $list=$this->getStateList_for_check();
        return $list[$this->state_gov];
    }
    public function getStateName_for_check_economics()
    {
        $list=$this->getStateList_for_check();
        return $list[$this->state_economics];
    }
    public function getStateName_for_check_prok()
    {
        $list=$this->getStateList_for_check();
        return $list[$this->state_prok];
    }
    public function getStateName_for_check_expert()
    {
        $list=$this->getStateList_for_check();
        return $list[$this->state_expert];
    }
    public function getStateName_for_reglament()
    {
        $list=$this->getStateList_for_reglament();
        return $list[$this->state];
    }
}
