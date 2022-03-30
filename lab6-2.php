<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if (isset($_POST['mas']))
{
    $start = microtime(true);
    $arr=(array)explode(" ", $_POST['mas']);
    foreach ($arr as &$row) {
        $row = (int)$row;
    }
    //echo var_dump($arr)."<br>";
    $elem=min($arr);
    echo $elem."<br>";
    while ($min_number = current($arr)) {
        if ($min_number == $elem) {
            echo key($arr), "\n";
        }
        next($arr);
    }
    echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите числа через пробел:<br />');";
    echo "document.write('<input type=\'text\' name=\'mas\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>