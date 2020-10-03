<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reglaments}}`.
 */
class m201003_051547_create_reglaments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reglaments}}', [
            'id' => $this->primaryKey(),
            'message'=>$this->string(),
            'state'=>$this->integer(),
            'state_upr'=>$this->integer(),
            'comment_upr'=>$this->string(),
            'state_gov'=>$this->integer(),
            'comment_gov'=>$this->string(),
            'state_expert'=>$this->integer(),
            'comment_expert'=>$this->string(),
            'state_prok'=>$this->integer(),
            'comment_prok'=>$this->string(),
            'state_economics'=>$this->integer(),
            'comment_economics'=>$this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reglaments}}');
    }
}