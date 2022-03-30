<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
function min_elem($arr,$rows,$i) {
        $min_el=$arr[0][$i];
        for($j = 0; $j < $rows; $j++){
            if($arr[$j][$i]<$min_el)
                $min_el=$arr[$j][$i];}
        //echo 'Элемент:', $min_el."<br>";

}
function columns($arr,$rows,$i)
{
        $column = array();
        for ($j = 0; $j < $rows; $j++) {
            $column[$j] = $arr[$j][$i];
        }
        return $column;
}
function printmatr($arr) {

}
if (isset($_POST['n'])&&isset($_POST['m']))
{
    $arr = array();
    for($i = 0; $i < (int)$_POST['n']; $i ++){
        for($j = 0; $j < (int)$_POST['m']; $j ++){
        $arr[$i][$j] = rand((int)$_POST['min'], (int)$_POST['max']);
        }
    }
   // printmatr($arr);
    //echo var_dump($arr);
    /*for ($i = 0; $i < (int)$_POST['n']; $i++) {
        for ($j = 0; $j < (int)$_POST['m']; $j++) {
           echo $arr[$i][$j] . "    ";
      }
        echo "<br>";
   }*/
    echo "<br><br><br>" ;


    $rows = count($arr);
    $cols = count($arr[0]);
    $start = microtime(true);
    for($i = 0; $i < $cols; $i++){
        min_elem($arr,$rows,$i);
        $i+1;
    }
    echo 'Время выполнения своей функции: '.round(microtime(true) - $start, 10).' сек. <br><br><br>';

    $start = microtime(true);
    for ($i = 0; $i < $cols; $i++) {
        $col=columns($arr,$rows,$i);
       // echo 'Элемент:', min($col)."<br>";
        $i+1;
    }
    echo 'Время выполнения встроенной функции: '.round(microtime(true) - $start, 10).' сек. <br>';
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите m:<br />');";
    echo "document.write('<input type=\'number\' name=\'m\'</p>');";
    echo "document.write('<p>Введите n:<br />');";
    echo "document.write('<input type=\'number\' name=\'n\'</p>');";
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