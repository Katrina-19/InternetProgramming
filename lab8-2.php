<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
$otvet='';
if (isset($_POST['fam'])&&isset($_POST['name'])&&isset($_POST['pseudo'])&&isset($_POST['birth'])&&isset($_POST['zhanr'])
    &&isset($_POST['otrivok']))
{
    $stroka=mb_strtolower($_POST['otrivok']);
    $substring = 'оро';
    $count=mb_substr_count($stroka, $substring);
    if($count%2==0){
        $otvet="Согласны";
    }
    else{
        $otvet="Не согласны";
    }
    require_once('lab8-2.html');
}
else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>фамилия:<br />');";
    echo "document.write('<input type=\'text\' name=\'fam\'</p>');";
    echo "document.write('<p>имя:<br />');";
    echo "document.write('<input type=\'text\' name=\'name\'</p>');";
    echo "document.write('<p>псевдоним:<br />');";
    echo "document.write('<input type=\'text\' name=\'pseudo\'</p>');";
    echo "document.write('<p>дата рождения:<br />');";
    echo "document.write('<input type=\'date\' name=\'birth\'</p>');";
    echo "document.write('<p>жанр:<br />');";
    echo "document.write('<input type=\'text\' name=\'zhanr\'</p>');";
    echo "document.write('<p>отрывок из произведения:<br />');";
    echo "document.write('<input type=\'text\' name=\'otrivok\'</p>');";
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
</body>
</html>