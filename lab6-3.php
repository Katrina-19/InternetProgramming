<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
function min_elem($myArray) {
    $min_el=$myArray[0];
    for ($i = 0; $i < count($myArray); $i++) {
        if($myArray[$i]<$min_el)
            $min_el=$myArray[$i];}
    return $min_el;
}
function min_elem_pos($myArray,$elem) {
    while ($min_number1 = current($myArray)) {
        if ($min_number1 == $elem) {
            echo 'Его позиция:', key($myArray)."<br>", "\n";
        }
        next($myArray);
    }
}
if (isset($_POST['len']))
{

    //$arr=(array)explode(" ", $_POST['mas']);
    //foreach ($arr as &$row) {
        //$row = (int)$row;
    //}
    $arr = array();
    for($i = 0; $i < (int)$_POST['len']; $i ++){
        $arr[$i] = rand((int)$_POST['min'], (int)$_POST['max']);
    }
    ///echo var_dump($arr)."<br><br><br>";
    //echo $_POST['mas']."<br><br><br>";
    $start = microtime(true);
    $elem=min_elem($arr);
    min_elem_pos($arr,$elem);
    echo 'Время выполнения своей функции: '.round(microtime(true) - $start, 10).' сек. <br>';
    echo 'Элемент:', $elem."<br>";

    /*while ($min_number = current($arr)) {
        if ($min_number == $elem) {
            echo 'Его позиция:', key($arr)."<br><br><br>", "\n";
        }
        next($arr);
    }*/
    $start = microtime(true);
    $elem1=min($arr);
    //echo "pougbj";
    $el_pos=array_search($elem1, $arr);
    //min_elem_pos($arr,$elem1);
    echo 'Время выполнения встроенной функции: '.round(microtime(true) - $start, 10).' сек. <br>';
    echo 'Элемент:', $elem1."<br>";
    echo 'Pos:', $el_pos."<br>";
    //min_elem_pos($arr,$elem1);
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите количество чисел:<br />');";
    echo "document.write('<input type=\'number\' name=\'len\'</p>');";
    echo "document.write('<p>Введите min:<br />');";
    echo "document.write('<input type=\'number\' name=\'min\'</p>');";
    echo "document.write('<p>Введите max:<br />');";
    echo "document.write('<input type=\'number\' name=\'max\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>