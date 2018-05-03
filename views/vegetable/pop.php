<?php
/**
 * Created by PhpStorm.
 * User: Bramnik
 * Date: 3/30/2018
 * Time: 11:19 PM
 */
?>
<div class="col-md-2">
    <div class = "borderRed">
        <p class="red">Метод 'array_рор' исключил  из массива последний элемент  : </p>
        <?php
        print_r($vegetable->name); echo('</br>');
        ?>
    </div>
    <div class = "borderRed">
        <p class="red">Метод 'array_shift' исключил  из массива первый элемент : </p>
        <?php
        print_r($vegetableShift->name); echo('</br>');
        ?>
    </div>
<div>
    <p class="red">оставил всех, кроме последнего и первого : </p>
<?php

    foreach ($ModelsVegetablesPop as $model) {
        echo($model->name . ' </br>');
    }


?>
</div>

</div>