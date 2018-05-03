<?php

        use yii\helpers\Url;
?>
<p class="red">here is our array of vegetables</p>
<?php
$VegArray = array();

$VegarrayOther[0]= 'cucumber';
$VegarrayOther[1]= 'patato';
$VegarrayOther[2]= 'carrot';
$VegarrayOther[3]= 'beet';
$VegarrayOther[4]= 'tomatoes';
$VegarrayOther[5]= 'punpkin';
$VegarrayOther[6]= 'turnip';
$i = 0;
echo('------------------из таблицы берет модели по одной-------------------------</br>');
  foreach($vegetablesModels as $model){
      $VegArray[$i] = $model->name;
      $i++;
    echo $model->name;
    echo"</br>";

}
echo('-----------------один foreach--------------------------</br>');
foreach ($VegArray as $key => $value) {
    echo "$key => $value, ";
    echo"</br>";
}
echo('------------------один foreach-------------------------</br>');
foreach ($VegarrayOther as $key => $value) {
    echo "$key => $value, ";
    echo"</br>";
}


/*echo('------------------два foreach-------------------------</br>');
foreach ($VegarrayOther as $key => $massiv) {
    foreach ($key as $k => $value){
        echo "$key => $value, ";
        echo"</br>";
    }
*/
//}

?>
<p class="red">find the array element by key</p>

        <input type="text" class="inp" a>
            </input>
            <a class="btn btn-success sub" href="">
            </a>


        <div class="row">

</div>
<?php


$this->registerJs("

$(document).ready(function() {

    $('.sub').on('click', function(e)
    {
        e.preventDefault();
        alert('пока работает');
        var x = $('.inp').val();
        alert(x);
        
        $.ajax({
            type: 'POST',
            url: '/index.php?r=vegetable/work',
            data: {id : 8},
            success: function(response) {
                $('body').html(response);
            }
        });
        
    });
});

");
?>

<?php
/*
$(function(){
alert('oo');
$('.sub').on('click', function(e){
var nu = $('.inp').val();
alert(nu);
Sendarg();
e.preventDefault();
*/
?>