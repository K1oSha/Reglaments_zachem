<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%changes}}`.
 */
class m201003_133853_create_changes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%changes}}', [
            'id' => $this->primaryKey(),
            'id_reglament'=>$this->integer(),
            'message'=>$this->string(),
            'date'=>$this->date(),
            'f11'=> $this->text(),
        'f12'=>$this->text(),
        'f131'=> $this->text(),
        'f132'=> $this->text(),
        'f21'=> $this->text(),
        'f22'=> $this->text(),
        'f11_comment_proc'=> $this->text(),
         'f12_comment_proc'=> $this->text(),
        'f131_comment_proc'=> $this->text(),
        'f132_comment_proc'=>$this->text(),
         'f21_comment_proc'=> $this->text(),
        'f22_comment_proc'=> $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%changes}}');
    }
}
