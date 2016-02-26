<?php

use yii\db\Schema;
use yii\db\Migration;

class m160206_140937_create_blog_tables extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
//        $this->createTable('{{%user}}', [
//            'id' => Schema::TYPE_PK,
//            'username' => Schema::TYPE_STRING . ' NOT NULL',
//            'password' => Schema::TYPE_STRING . ' NOT NULL',
//            'auth_key' => Schema::TYPE_STRING . ' NOT NULL',
//            'token' => Schema::TYPE_STRING . ' NOT NULL',
//            'email' => Schema::TYPE_STRING . ' NOT NULL'
//        ], $tableOptions);
 //       $this->createIndex('username', '{{%user}}', 'username', true);
        $this->createTable('{{%category}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING
        ], $tableOptions);
        $this->createIndex('name', '{{%category}}', 'name', true);
        $this->createTable('{{%post}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'category_id' => Schema::TYPE_SMALLINT . ' unsigned NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL'
        ], $tableOptions);
        $this->createIndex('status', '{{%post}}', 'status');
//        $this->createTable('{{%comment}}', [
//            'id' => Schema::TYPE_PK,
//            'author' => Schema::TYPE_STRING . ' NOT NULL',
//            'email' => Schema::TYPE_STRING . ' NOT NULL',
//            'url' => Schema::TYPE_STRING . ' NOT NULL',
//            'content' => Schema::TYPE_TEXT . ' NOT NULL',
//            'status' => Schema::TYPE_SMALLINT . ' NOT NULL'
//        ], $tableOptions);
//        $this->createIndex('status', '{{%comment}}', 'status');
//        $this->execute($this->addUserSql());

    }

    public function down()
    {
        echo "m160206_140937_create_blog_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
