<?php ?>
<div class = "container">
    <p class="green">может работать и с обьектами </p>
<div class="row">
<div col-md-4 style="float: left">
    <p class="red">метод pad отработал и расширил массив </p>
    <p class="red">вправо до 20 за счет нового овоща horseradish  : </p>
<?php

foreach($ModelsVegetablesPadNew as $model){
echo($model->name .' </br>');
}

?>
</div>
<div class="col-md-4" style="float: left">
<p class="red">метод pad отработал и расширил массив   : </p>
    <p class="red"> влево до 20 за счет нового овоща radish  : </p>
    <?php

        foreach($ModelsVegetablesPadNewLeft as $model){
            echo($model->name .' </br>');
        }

    ?>
</div>
</div>
</div>