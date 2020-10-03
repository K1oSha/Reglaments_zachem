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
                'message'=>'Название регламента',
                 'f11'=>'1.1 предмет регулирования регламента',
                 'f12'=>'1.2 круг заявителей',
                 'f131'=>'1.3.1 порядок получения информации заявителями по вопросам предоставления',
                 'f132'=>'1.3.2 порядок, форма, место размещения и способы получения справочной информации',
                 'f21'=>'2.1 наименование государственной услуги',
                 'f22'=>'2.2 наименование органа, предоставляющего государственную услугу',
                 'f23'=>'2.3 описание результата предоставления государственной услуги',
                 'f241'=>'2.4.1 предоставления государственной услуги, в том числе с учетом необходимости обращения в организации',
                 'f242'=>'2.4.2 приостановления предоставления государственной услуги',
                 'f243'=>'2.4.3 выдачи (направления) документов',
                 'f25'=>'2.5 нормативные правовые акты',
                 'f261'=>'2.6.1 исчерпывающий перечень',
                 'f262'=>'2.6.2 способы их получения заявителем',
                 'f263'=>'2.6.3 порядок их представления (бланки, формы обращений, заявления и иных документов, приложение)',
                 'f271'=>'2.7.1 список',
                 'f272'=>'2.7.2 способы их получения заявителями',
                 'f273'=>'2.7.3 порядок их представления',
                 'f28'=>'2.8 перечень оснований для отказа в приеме документов',
                 'f29'=>'2.9 перечень оснований для приостановления или отказа в предоставлении государственной услуги',
                 'f210'=>'2.10 перечень услуг, которые являются необходимыми и обязательными для предоставления государственной услуги, в том числе сведения о документе (документах)',
                 'f2111'=>'2.11.1 Размер',
                 'f2112'=>'2.11.2 Ссылка на положение акта',
                 'f212'=>'2.12 порядок, размер и основания взимания платы за предоставление услуг',
                 'f213'=>'2.13 максимальный срок ожидания в очереди при подаче запроса о предоставлении услуги',
                 'f214'=>'2.14 срок и порядок регистрации запроса заявителя о предоставлении государственной услуги',
                 'f215'=>'2.15 требования к помещениям, в которых предоставляется услуга',
                 'f2161'=>'2.16.1 количество взаимодействий заявителя с должностными лицами при предоставлении государственной услуги',
                 'f2162'=>'2.16.2 продолжительность',
                 'f2163'=>'2.16.2 возможность получения информации о ходе предоставления услуги',
                 'f2164'=>'2.16.4 возможность либо невозможность получения государственной услуги в многофункциональном центре',
                 'f217'=>'2.17 иные требования',
                 'f31'=>'3.1 Состав',
                 'f32'=>'3.2 последовательность',
                 'f33'=>'3.3 сроков выполнения',
                 'f34'=>'3.4 требований к порядку',
                 'f351'=>'3.5.1 порядок осуществления в электронной форме',
                 'f352'=>'3.5.2 порядок исправления допущенных опечаток и ошибок в выданных в результате предоставления государственной услуги документах.Про многофункциональные центры:',
                 'f353'=>'3.5.3 описание административных процедур',
                 'f354'=>'3.5.4 также порядок досудебного (внесудебного) обжалования решений и действий (бездействия)',
                 'f355'=>'3.5.5 Описание административных процедур (действий)',
                 'f35611'=>'3.5.6.1.1 о порядке предоставления государственной услуги',
                 'f35612'=>'3.5.6.1.2 о ходе выполнения запроса предоставлении государственной услуги',
                 'f35613'=>'3.5.6.1.3 по иным вопросам',
                 'f35614'=>'3.5.6.1.4 консультирование заявителей о порядке предоставления государственной услуги',
                 'f3562'=>'3.5.6.2 прием запросов заявителей о предоставлении государственной услуги и иных документов, необходимых для предоставления государственной услуги;',
                 'f3563'=>'3.5.6.3 выдача заявителю результата предоставления государственной услуги',
                 'f3564'=>'3.5.6.4 иные действия',
                 'f41'=>'4.1 основания для начала административной процедуры',
                 'f42'=>'4.2 содержание каждого административного действия',
                 'f43'=>'4.3 сведения о должностном лице, ответственном за выполнение каждого административного действия',
                 'f44'=>'4.4 критерии принятия решений',
                 'f45'=>'4.5 результат административной процедуры и порядок передачи результата',
                 'f46'=>'4.6 способ фиксации результата',
                 'f51'=>'5.1 порядок осуществления текущего контрол',
                 'f52'=>'5.2 порядок и периодичность осуществления плановых и внеплановых проверок',
                 'f53'=>'5.3 ответственность должностных лиц органа',
                 'f54'=>'5.4 положения, характеризующие требования к порядку и формам контроля за предоставлением государственной услуг',
                 'f61'=>'6.1 информация для заинтересованных лиц об их праве на досудебное (внесудебное) обжалование действий (бездействия',
                 'f62'=>'6.2 органы государственной власти, организации и уполномоченные на рассмотрение жалобы лица',
                 'f63'=>'6.3 способы информирования заявителей о порядке подачи и рассмотрения жалобы',
                 'f64'=>'6.4 перечень нормативных правовых актов, регулирующих порядок досудебного (внесудебного) обжалования решений и действий (бездействия) органа',
                 'f641'=>'6.4.1 информация для заявителя о его праве подать жалобу',
                 'f642'=>'6.4.2 предмет жалобы',
                 'f643'=>'6.4.3 органы государственной власти, организации, должностные лица, которым может быть направлена жалоба',
                 'f644'=>'6.4.4 порядок подачи и рассмотрения жалобы',
                 'f645'=>'6.4.5 сроки рассмотрения жалобы',
                 'f646'=>'6.4.6 результат рассмотрения жалобы',
                 'f647'=>'6.4.7 порядок информирования заявителя о результатах рассмотрения жалобы',
                 'f648'=>'6.4.8 порядок обжалования решения по жалобе',
                 'f649'=>'6.4.9 право заявителя на получение информации и документов, необходимых для обоснования и рассмотрения жалобы',
                 'f6410'=>'6.4.10 способы информирования заявителей о порядке подачи и рассмотрения жалобы',
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


    public static function getStateList_for_check()
    {
        return[
          'Ожидает проверки','Возвращено на доработку','Проверено'
        ];
    }
    public static function getStateList_for_reglament()
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
