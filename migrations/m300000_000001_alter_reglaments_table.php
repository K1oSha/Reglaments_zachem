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
        $this->addColumn('{{%reglaments}}', '11', $this->text());
        $this->addColumn('{{%reglaments}}', '12', $this->text());
        $this->addColumn('{{%reglaments}}', '131', $this->text());
        $this->addColumn('{{%reglaments}}', '132', $this->text());
        $this->addColumn('{{%reglaments}}', '21', $this->text());
        $this->addColumn('{{%reglaments}}', '22', $this->text());
        $this->addColumn('{{%reglaments}}', '23', $this->text());
        $this->addColumn('{{%reglaments}}', '241', $this->text());
        $this->addColumn('{{%reglaments}}', '242', $this->text());
        $this->addColumn('{{%reglaments}}', '243', $this->text());
        $this->addColumn('{{%reglaments}}', '25', $this->text());
        $this->addColumn('{{%reglaments}}', '261', $this->text());
        $this->addColumn('{{%reglaments}}', '262', $this->text());
        $this->addColumn('{{%reglaments}}', '263', $this->text());
        $this->addColumn('{{%reglaments}}', '271', $this->text());
        $this->addColumn('{{%reglaments}}', '272', $this->text());
        $this->addColumn('{{%reglaments}}', '273', $this->text());
        $this->addColumn('{{%reglaments}}', '28', $this->text());
        $this->addColumn('{{%reglaments}}', '29', $this->text());
        $this->addColumn('{{%reglaments}}', '210', $this->text());
        $this->addColumn('{{%reglaments}}', '2111', $this->text());
        $this->addColumn('{{%reglaments}}', '2112', $this->text());
        $this->addColumn('{{%reglaments}}', '212', $this->text());
        $this->addColumn('{{%reglaments}}', '213', $this->text());
        $this->addColumn('{{%reglaments}}', '214', $this->text());
        $this->addColumn('{{%reglaments}}', '215', $this->text());
        $this->addColumn('{{%reglaments}}', '2161', $this->text());
        $this->addColumn('{{%reglaments}}', '2162', $this->text());
        $this->addColumn('{{%reglaments}}', '2163', $this->text());
        $this->addColumn('{{%reglaments}}', '2164', $this->text());
        $this->addColumn('{{%reglaments}}', '217', $this->text());
        $this->addColumn('{{%reglaments}}', '31', $this->text());
        $this->addColumn('{{%reglaments}}', '32', $this->text());
        $this->addColumn('{{%reglaments}}', '33', $this->text());
        $this->addColumn('{{%reglaments}}', '34', $this->text());
        $this->addColumn('{{%reglaments}}', '351', $this->text());
        $this->addColumn('{{%reglaments}}', '352', $this->text());
        $this->addColumn('{{%reglaments}}', '353', $this->text());
        $this->addColumn('{{%reglaments}}', '354', $this->text());
        $this->addColumn('{{%reglaments}}', '355', $this->text());
        $this->addColumn('{{%reglaments}}', '35611', $this->text());
        $this->addColumn('{{%reglaments}}', '35612', $this->text());
        $this->addColumn('{{%reglaments}}', '35613', $this->text());
        $this->addColumn('{{%reglaments}}', '35614', $this->text());
        $this->addColumn('{{%reglaments}}', '3562', $this->text());
        $this->addColumn('{{%reglaments}}', '3563', $this->text());
        $this->addColumn('{{%reglaments}}', '3564', $this->text());
        $this->addColumn('{{%reglaments}}', '41', $this->text());
        $this->addColumn('{{%reglaments}}', '42', $this->text());
        $this->addColumn('{{%reglaments}}', '43', $this->text());
        $this->addColumn('{{%reglaments}}', '44', $this->text());
        $this->addColumn('{{%reglaments}}', '45', $this->text());
        $this->addColumn('{{%reglaments}}', '46', $this->text());
        $this->addColumn('{{%reglaments}}', '51', $this->text());
        $this->addColumn('{{%reglaments}}', '52', $this->text());
        $this->addColumn('{{%reglaments}}', '53', $this->text());
        $this->addColumn('{{%reglaments}}', '54', $this->text());
        $this->addColumn('{{%reglaments}}', '61', $this->text());
        $this->addColumn('{{%reglaments}}', '62', $this->text());
        $this->addColumn('{{%reglaments}}', '63', $this->text());
        $this->addColumn('{{%reglaments}}', '64', $this->text());
        $this->addColumn('{{%reglaments}}', '641', $this->text());
        $this->addColumn('{{%reglaments}}', '642', $this->text());
        $this->addColumn('{{%reglaments}}', '643', $this->text());
        $this->addColumn('{{%reglaments}}', '644', $this->text());
        $this->addColumn('{{%reglaments}}', '645', $this->text());
        $this->addColumn('{{%reglaments}}', '646', $this->text());
        $this->addColumn('{{%reglaments}}', '647', $this->text());
        $this->addColumn('{{%reglaments}}', '648', $this->text());
        $this->addColumn('{{%reglaments}}', '649', $this->text());
        $this->addColumn('{{%reglaments}}', '6410', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reglamentss}}');
    }
}
