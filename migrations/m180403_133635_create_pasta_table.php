<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pasta`.
 */
class m180403_133635_create_pasta_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pasta', [
            'id' => $this->primaryKey(),
            'id' => $this->integer(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pasta');
    }
}
