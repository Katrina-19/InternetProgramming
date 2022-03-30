<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
if(isset($_POST['en'])){
    echo "$_POST[name] $_POST[surname] первое занятие по курсу английского языка пройдёт 04.04.2022 в 15:00<br>";
}
if(isset($_POST['fr'])){
    echo "$_POST[name] $_POST[surname] первое занятие по курсу французского языка пройдёт 05.04.2022 в 15:00<br>";
}
if(isset($_POST['ch'])){
    echo "$_POST[name] $_POST[surname] первое занятие по курсу китайского языка пройдёт 06.04.2022 в 15:00<br>";
}
if(isset($_POST['it'])){
    echo "$_POST[name] $_POST[surname] первое занятие по курсу итальянского языка пройдёт 07.04.2022 в 15:00<br>";
}
if(isset($_POST['dch'])){
    echo "$_POST[name] $_POST[surname] первое занятие по курсу немецкого языка пройдёт 08.04.2022 в 15:00<br>";
}
?>
</body>
</html>