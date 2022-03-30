<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if (isset($_POST['newFile']))
{
    $tmpfname = tempnam($_POST['dir'], $_POST['newFile']);
    require_once('http://localhost/lab9.php');
    //dirToArray($dir);
}
?>
</body>
</html>
