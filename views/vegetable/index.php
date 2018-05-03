<?php
use yii\helpers\Html;
 use yii\helpers\Url;
/* @var $vegetableModel app\models\Vegetable */
$connection = Yii::$app->db;
if ($connection)
    echo "Есть подключение к БД и ку";
else
    echo "Нет подключения к БД";
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div>
<div>
    <span class="red"> печатаем с помощью json_encode </span>
    <p>
        <?php echo json_encode($arrayVeg)?>
    </p>
    <p>
        <?php echo json_encode($array1)?>
    </p>
    <p>
        <?php echo json_encode($array2)?>
    </p>
    <p>
        <?php echo json_encode($array3)?>
    </p>
</div>
<div>
    <span class="red"> печатаем с помощью var_dump </span>
    <p>
        <?php var_dump($arrayVeg)?>
    </p>
    <p>
        <?php var_dump($array1)?>
    </p>
    <p>
        <?php var_dump($array2)?>
    </p>
    <p>
        <?php var_dump($array3)?>
    </p>
</div>
<div>
    <span class="red"> печатаем с помощью print_r </span>
    <p>
        <?php print_r($arrayVeg)?>
    </p>
    <p>
        <?php print_r($array1)?>
    </p>
    <p>
        <?php print_r($array2)?>
    </p>
    <p>
        <?php print_r($array3)?>
    </p>
</div>
<div>
    <span class="red"> печатаем с помощью foreach </span>
<?php

    foreach ($array1 as $key => $value) {
    echo "$key => $value, ";
    echo"</br>";
    }

    foreach ($array2 as $key => $value) {
        echo "$key => $value, ";
        echo"</br>";
    }

    foreach ($array3 as $key => $value) {
        echo "$key => $value, ";
        echo"</br>";
    }

foreach ($arrVeg as $key => $value) {
    echo "$key => $value, ";
    echo"</br>";
}
echo('------------------два foreach-------------------------</br>');
foreach ($arrayVeg as $key => $massiv) {
foreach ($massiv as  $key => $value) {
    echo "$key => $value, ";
}
 }

?>

</div>
</div>
<?php

/*
                foreach ($vegetablesModels as $i => $vegetable): ?>

                    <span > <?= $vegetable->name?></span>
                <?php endforeach; ?>
*/
?>
<div>
    <ul class="list-group">

        <li class="list-group-item list-group-item-warning"><a href="index.php?r=vegetable/key"><?php echo'Доступ к элементам по ключу'?></a></li>
        <li class="list-group-item list-group-item-success"> <a data-url="<?= Url::to(['/vegetable/pop'])?>" href="index.php?r=vegetable/pop"><?php echo'Вызов методов array_pop и array_shift для массива овощей'?></a></li>
        <li class="list-group-item list-group-item-info"><a data-url="<?= Url::to(['/vegetable/pad'])?>" href="index.php?r=vegetable/pad" ><?php echo'Вызов метода array_pad для массива овощей'?></a></li>
        <li class="list-group-item list-group-item-danger"> <a data-url="<?= Url::to(['/vegetable/map'])?>" href="index.php?r=vegetable/map" ><?php echo'Вызов метода array_map для массива овощей'?></a></li>
        <li class="list-group-item list-group-item-warning"> <a data-url="<?= Url::to(['/vegetable/sum'])?>" href="index.php?r=vegetable/sum" ><?php echo'Вызов метода array_sum'?></a></li>
        <li class="list-group-item list-group-item-danger"><a data-url="<?= Url::to(['/vegetable/push'])?>" href="index.php?r=vegetable/push" ><?php echo'Работа методов array_push и array_diff для массива овощей'?></a></li>
        <li class="list-group-item list-group-item-warning "><a data-url="<?= Url::to(['/vegetable/flip'])?>" href="index.php?r=vegetable/flip" ><?php echo'Работа методов array_flip и array_rand'?></a></li>
        <li class="list-group-item list-group-item-success"><a data-url="<?= Url::to(['/vegetable/walk'])?>" href="index.php?r=vegetable/walk" ><?php echo'Работа метода array_walk'?></a></li>
        <li class="list-group-item list-group-item-info"> <a data-url="<?= Url::to(['/vegetable/fill'])?>" href="index.php?r=vegetable/fill"><?php echo'Работа методов array_fill , array_keys и array_values'?></a></li>
        <li class="list-group-item list-group-item-warning"> <a data-url="<?= Url::to(['/vegetable/merge'])?>" href="index.php?r=vegetable/merge"><?php echo'Работа метода array_merge'?></a></li>
        <li class="list-group-item list-group-item-success"><a data-url="<?= Url::to(['/vegetable/udiff'])?> "href="index.php?r=vegetable/udiff"><?php echo'Вызов метода array_udiff'?></a></li>
    </ul>

</div>
