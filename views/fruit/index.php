<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FruitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fruits';
$this->params['breadcrumbs'][] = $this->title;
$re = array(1,2,3,4);
foreach ($re as &$value){
    $value = $value *2;
}
unset($value);
var_dump($re);
?>
<div>
    <ul class="list-group">

        <li class="list-group-item list-group-item-warning"><a data-url="<?= Url::to(['/fruit/slice'])?>" href="index.php?r=fruit/slice"><?php echo'Вызов методов array_slice и array_splice для массива фруктов'?></a></li>
        <li class="list-group-item list-group-item-success"> <a data-url="<?= Url::to(['/fruit/chunk'])?>" href="index.php?r=fruit/chunk"><?php echo'Вызов методов array_chunk, in_array и array_column для массива фруктов'?></a></li>
        <li class="list-group-item list-group-item-info"><a data-url="<?= Url::to(['/fruit/unique'])?>" href="index.php?r=fruit/unique" ><?php echo'Вызов метода array_unique для массива фруктов'?></a></li>
        <li class="list-group-item list-group-item-danger"> <a data-url="<?= Url::to(['/fruit/search'])?>" href="index.php?r=fruit/search" ><?php echo'Вызов метода array_search для массива фруктов'?></a></li>
        <li class="list-group-item list-group-item-warning"> <a data-url="<?= Url::to(['/fruit/reduce'])?>" href="index.php?r=fruit/reduce" ><?php echo'Вызов методов array_reduce и array_filter для массива фруктов'?></a></li>
        <li class="list-group-item list-group-item-danger"><a data-url="<?= Url::to(['/fruit/conbine'])?>" href="index.php?r=fruit/combine" ><?php echo'Работа методов array_combine и array_reverse для массивов фруктов и овощей'?></a></li>
        <li class="list-group-item list-group-item-warning "><a data-url="<?= Url::to(['/fruit/unshift'])?>" href="index.php?r=fruit/unshift" ><?php echo'Работа метода array_unshift'?></a></li>
        <li class="list-group-item list-group-item-success"><a data-url="<?= Url::to(['/fruit/replace'])?>" href="index.php?r=fruit/replace" ><?php echo'Работа метода array_replace'?></a></li>
        <li class="list-group-item list-group-item-info"> <a data-url="<?= Url::to(['/fruit/dom'])?>" href="index.php?r=fruit/dom"><?php echo'Домашнее задание'?></a></li>
        <li class="list-group-item list-group-item-info"> <a data-url="<?= Url::to(['/fruit/queries'])?>" href="index.php?r=fruit/queries"><?php echo'отработка sqlзапросов'?></a></li>
    </ul>

</div>