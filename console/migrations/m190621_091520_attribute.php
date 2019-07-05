<?php

use yii\db\Migration;

/**
 * Class m190621_091520_attribute
 */
class m190621_091520_attribute extends Migration
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

        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'product_id'=>$this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%attribute}}');
    }
}
