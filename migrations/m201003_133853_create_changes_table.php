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
            'date_was'=>$this->date(),
            'date_became'=>$this->date(),
            'f11_was'=> $this->text(),
        'f12_was'=>$this->text(),
        'f131_was'=> $this->text(),
        'f132_was'=> $this->text(),
        'f21_was'=> $this->text(),
        'f22_was'=> $this->text(),
            'f11_became'=> $this->text(),
            'f12_became'=>$this->text(),
            'f131_became'=> $this->text(),
            'f132_became'=> $this->text(),
            'f21_became'=> $this->text(),
            'f22_became'=> $this->text(),
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
