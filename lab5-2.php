<!DOCTYPE HTML>
<html>
<head>
    <title>Таблица умножения</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>
        table {
            background: #E5C2F7FF;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #000;
            padding: 20px;
        }
    </style>
</head>
<body>
<?php
function mult_table($a, $b) {
	if (is_integer($a) && is_integer($b)) {
		echo '<table>';
for ($j = 1; $j <= $b; $j++) {
echo "<tr>";
    for ($i = 1; $i <= $a; $i++) {
    echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo '</table>';
} else {
echo "ошибка, введите 2 целых числа!";
}
}
if (isset($_POST['num1']) && isset($_POST['num2']))
{
    mult_table((int)$_POST['num1'],(int)$_POST['num2']);
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