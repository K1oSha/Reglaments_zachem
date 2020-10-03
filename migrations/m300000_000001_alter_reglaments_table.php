<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reglamentss}}`.
 */
class m300000_000001_alter_reglaments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%reglaments}}', 'f11', $this->text());
        $this->addColumn('{{%reglaments}}', 'f12', $this->text());
        $this->addColumn('{{%reglaments}}', 'f131', $this->text());
        $this->addColumn('{{%reglaments}}', 'f132', $this->text());
        $this->addColumn('{{%reglaments}}', 'f21', $this->text());
        $this->addColumn('{{%reglaments}}', 'f22', $this->text());
        $this->addColumn('{{%reglaments}}', 'f11_comment_proc', $this->text());
        $this->addColumn('{{%reglaments}}', 'f12_comment_proc', $this->text());
        $this->addColumn('{{%reglaments}}', 'f131_comment_proc', $this->text());
        $this->addColumn('{{%reglaments}}', 'f132_comment_proc', $this->text());
        $this->addColumn('{{%reglaments}}', 'f21_comment_proc', $this->text());
        $this->addColumn('{{%reglaments}}', 'f22_comment_proc', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f23', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f241', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f242', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f243', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f25', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f261', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f262', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f263', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f271', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f272', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f273', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f28', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f29', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f210', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2111', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2112', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f212', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f213', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f214', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f215', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2161', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2162', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2163', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f2164', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f217', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f31', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f32', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f33', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f34', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f351', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f352', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f353', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f354', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f355', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f35611', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f35612', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f35613', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f35614', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f3562', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f3563', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f3564', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f41', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f42', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f43', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f44', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f45', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f46', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f51', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f52', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f53', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f54', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f61', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f62', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f63', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f64', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f641', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f642', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f643', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f644', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f645', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f646', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f647', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f648', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f649', $this->text());
//        $this->addColumn('{{%reglaments}}', 'f6410', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reglamentss}}');
    }
}
