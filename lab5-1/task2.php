<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
function arifmetica($myArray, $action) {
    switch ($action) {
        case 'sin':
            for ($i = 0; $i < count($myArray); $i++) {
                    echo sin($myArray[$i])."<br>";
            }
            //echo "sin числовых элементов массива  " . $res;
            break;
        case 'cos':
            for ($i = 0; $i < count($myArray); $i++) {
                    echo cos($myArray[$i])."<br>";
            }
            //echo "cos числовых элементов массива  " . $res;
            break;
        case 'tg':
            for ($i = 0; $i < count($myArray); $i++) {
                    echo tan($myArray[$i])."<br>";
            }
            //echo "tg числовых элементов массива  " . $res;
            break;
        case 'ctg':
            for ($i = 0; $i < count($myArray); $i++) {
                if($myArray[$i]==0){
                    echo "devision by zero";
                break;}
                    echo 1/tan($myArray[$i])."<br>";
            }
            //echo "ctg числовых элементов массива  " . $res;
            break;
    }
}
if (isset($_POST['mas'])&&isset($_POST['func']))
{
    $arr=explode(",", $_POST['mas']);
    arifmetica($arr,$_POST['func']);
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите числа через запятую:<br />');";
    echo "document.write('<input type=\'text\' name=\'mas\'</p>');";
    echo "document.write('<p>Введите функцию:<br />');";
    echo "document.write('<input type=\'text\' name=\'func\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>