<?php

use yii\db\Migration;

/**
 * Class m190627_094611_order_detail
 */
class m190627_094611_order_detail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order_detail}}', [
            'order_id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'quantity' => $this->integer()->notNull()->defaultValue(10),
            'price' => $this->integer()->notNull(),
            
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%order_detail}}');
    }
}
