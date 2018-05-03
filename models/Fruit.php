<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fruit".
 *
 * @property int $id
 * @property string $name
 */
class Fruit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fruit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

//    public function getWeight()
//    {
//        return 300;
//    }

//    public function setWeight($value)
//    {
//        $this->ves = $value;
 //   }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
