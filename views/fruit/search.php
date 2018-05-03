<?php
?>

<div class="container">
    <div class="row">
        <p class="red" style="font-size: xx-large">метод array_search </p>
            <div class="col-md-4" style="float: left">
                <div>
                <p class="red">Это массив фруктов </p>
                <?php
                foreach($arrFruit as $key => $model){
                    echo$key.' ';

                    echo ('["id"]=>' . $model->id . '  ' . '["name"]=>'. $model->name . '</br>');

                }

                ?>
                </div>
                <div>
                    <p class="red">Это обьект который будем искать </p>
                    <?php



                        echo ($fruit3 . '</br>');
                        echo ($fruit4 . '</br>');
                        echo ('["id"]=>' . $fruit1->id . '  ' . '["name"]=>'. $fruit1->name . '</br>');



                    ?>
                </div>
                <div>
                    <p class="red">Результат: </p>
                    <?php
                    echo $res. '</br>';
                    echo $res1. '</br>';
                    echo $res2. '</br>';




                    ?>
                </div>
        </div>
    </div>
</div>
