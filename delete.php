<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if (isset($_POST['delFile']))
{
    unlink($_POST['delFile']);
    require_once('http://localhost/lab9.php');
    //dirToArray($dir);
}
?>
</body>
</html>
