<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if (isset($_POST['str']))
{
    if (ctype_alnum($_POST['str'])){
        echo "Строка ". $_POST['str'] ." состоит только из букв и цифр.\n";
    } else {
        echo "Строка ". $_POST['str'] ." не состоит только из букв и цифр.\n";
    }
}

else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите stroku:<br />');";
    echo "document.write('<input type=\'text\' name=\'str\'</p>');";;
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>