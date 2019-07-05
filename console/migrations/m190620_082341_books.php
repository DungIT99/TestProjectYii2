<?php

use yii\db\Migration;

/**
 * Class m190620_082341_books
 */
class m190620_082341_books extends Migration
{


    /**
     * 
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

        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'image' => $this->string(),
            'cate'=>$this->integer(),
            'author'=>$this->string(),
            'page'=>$this->smallInteger()->notNull()->defaultValue(2),
             'slug'=>$this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'publish_at'=>$this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%books}}');
    }
}
