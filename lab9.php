<html>
<head>
    <title>Результат</title>
    <style>
        .main{

            margin:0 auto;
            overflow: auto;
            justify-content: space-between;
        }
        .col-1-3 {
            width: 33.3333333333%;
            float: left;
            font-weight:bold
        }
        .col-2-3 {
            width: 66.6666666667%;
            float: right;
        }
        .col-1-2-1 {
            width: 50%;
            float: left;
        }
        .col-1-2-2 {
            width: 50%;
            float: right;
        }
        p{
            font-size:20px;
            line-height:22px;
            color: rgb(255, 0, 0);
            text-align: center;
        }
    </style>
</head>
<body>
<?php
function dirToArray($dir){
    $result=array();
    $cdir=scandir($dir);
    foreach($cdir as $key =>$value){
        if(!in_array($value,array(".",".."))){
                echo $result[]=$value."<br>";
        }
    }
    echo "<br><br><br><br><br>";
    return $result;
}
function read($file){
    $fText = file_get_contents($file);
    echo "<div class='col-1-2-1'>'";
    echo $fText."<br><br>";
    echo "</div>";
    echo "<div class='col-1-2-2'>'";
    echo $result = preg_replace('/([!();:,.?])\\1+/', '$1', $fText)."<br>";
    echo "</div>";
}
if (isset($_POST['put']))
{
    echo "<div class='main'>";
    $dir = $_POST['put'];
    echo "<div class='col-1-3'>'";
    dirToArray($dir);
    echo "</div>";
    echo "<div class='col-2-3'>'";
    foreach (glob($dir . '\*.txt') as $file) {
        $fname = basename($file);
        echo "<p>";
        echo $fname;
        echo "</p>";
        read($file);
        echo "<br><br><br><br>";
    }
    echo "</div>";
    echo "</div>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "document.write('<form method=\'post\'>');";
    echo "document.write('<p>Введите путь:<br />');";
    echo "document.write('<input type=\'text\' name=\'put\'</p>');";;
    echo "document.write('<input type=\'submit\' />');";
    echo "document.write('</form>');";
    echo "</script>";
    exit();
}
?>
<form method="post">
    <input type="button" value="create" onClick='location.href="http://localhost/create.html"' />
    <input type="button" value="delete" onClick='location.href="http://localhost/delete.html"' />
</form>


</body>
</html>