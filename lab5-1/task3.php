<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
$sum=0;
function odd_sum($a, $b)
{
    if ($a > $b)
        return 0;
    if ($a == $b)
        return $a;
            return $a + odd_sum($a + 2,$b);

}
if (isset($_POST['num1']) && isset($_POST['num2']))
{
    if($_POST['num1']%2==0){
        if($_POST['num1']==$_POST['num2']){
            echo "net";
        }
    else{echo odd_sum((int)$_POST['num1']+1,(int)$_POST['num2']);}}
    else{
    echo odd_sum((int)$_POST['num1'],(int)$_POST['num2']);}
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите первое число:<br />');";
    echo "document.write('<input type=\'number\' name=\'num1\'</p>');";
    echo "document.write('<p>Введите второе число:<br />');";
    echo "document.write('<input type=\'number\' name=\'num2\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>
