<?php
?>
<div class="container">
    <div class="row">
        <p class="red" style="text-align: center;font-size:xx-large">метод array_chunk  </p>
        <div class="col-md-4" style="float: left">
            <p class="red">Это начальный массив</p>
            <?php
            foreach($ModelsFruits as $key => $model){
                Echo $key. ' ';
                echo ($model->id . '  ' . $model->name . '</br>');

            }

            ?>

        </div>
        <div class="col-md-4" style="float: left">
            <div>
            <p class="red">Это втрой массив массивов $arrChunk </p>
            <?php
            foreach ($arrChunk as $key => $massiv) {
                echo'</br>';
                echo $key . ' => ';
                foreach ($massiv as  $key => $value) {
                    echo  $key . '-> '  . $value->id . ' ' . $value->name . '; ';
                }
            }
            ?>
            </div>
            <p class="red">Это отрабатывает метод array_column($arrChunk,1) </p>
            <?php
          foreach ($arrColumn as $key => $value){
              echo'</br>';
              foreach ($value as $key => $value){
                  echo $key .' -> ' . $value . ' ';
              }
          }

            ?>
        </div>
    </div>
    </div>
<div class="row">
    <div>
        <p class="red">Проверим на исходном массиве методом in_array есть ли в нем элемент 'apple'</p>
        <?php var_dump($res1);?>
    </div>
    <div>
        <p class="red">Проверим на исходном массиве. есть ли в нем элемент 'lemon'</p>
        <?php var_dump($res2);?>
    </div>

</div>
</div>