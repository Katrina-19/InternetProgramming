<html>
<head>
    <title>Task1</title>
</head>
<body>
<?php
function spisok($arr,$count) {
    echo var_dump($arr);
    if($arr[0]=="") echo "Pusto";
    else{
    echo '<ul>';
    for ($i = 0; $i < $count; $i++) {
        if (gettype($arr[$i]) == 'string') {
            echo '<li>'.$arr[$i].'</li>';
        }
    }
 echo '</ul>';}
}
if (isset($_POST['str']))
{
    $arr=explode(",", $_POST['str']);
    $count=count($arr);
    spisok($arr,$count);
}

else
{
echo "<script type='text/javascript'>";
echo "document.write('<form method=\'post\'>');";
echo "document.write('<p>Введите строки через запятую:<br />');";
echo "document.write('<input type=\'text\' name=\'str\'</p>');";
echo "document.write('<input type=\'submit\' />');";
echo "document.write('</form>');";
echo "</script>";
    exit();
}
?>
</body>
</html>