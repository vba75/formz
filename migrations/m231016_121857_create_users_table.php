<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m231016_121857_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(120)->notNull() ,
            'email' => $this->string(120)->notNull() ,
            'pass_hash' => $this->string()->notNull(),
            'service' => $this->integer(),
            'uuid' => $this->string(),
            'auth_key' => $this->string(),

        ]);
    
    
        $this->createIndex(
            'idx-users-id-fio-email',
            'users',
            ['id','fio','email']
        );
    
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }












}
