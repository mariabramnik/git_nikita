<?php
/**
 * Created by PhpStorm.
 * User: Bramnik
 * Date: 3/27/2018
 * Time: 10:16 PM
 */

namespace app\models;
use Yii;
use yii\helpers\Url;

/**
* @property integer $id
* @property string $name
  */
class Vegetable  extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'vegetable';
    }

    public function rules()
    {
        return [

            [['id'], 'number'],
            [['name'], 'string', 'max' => 40],
            [['weight'],'number'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название овоща',
            'weight'=>'Вес овоща'

        ];
    }




}