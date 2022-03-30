<html>
 <head>
  <title>Результат</title>
 </head>
 <body>
 <?php
 function my_fib($x)
{
  $y=1;
  $result = [1, 1];
  $i=2;
  while ($y<$x){
    $y=$result[$i-1] + $result[$i-2];
    $result[] = $y;
    $i++;
  }
  if ($x==$y){$y="Да";}else{$y="Нет";}
  return $y;
}
$num1=my_fib($_POST['num1']);
$num2=my_fib($_POST['num2']);
$num3=my_fib($_POST['num3']);
echo "Является ли $_POST[num1] числом Фибоначи? $num1<br>";
echo "Является ли $_POST[num2] числом Фибоначи? $num2<br>";
echo "Является ли $_POST[num3] числом Фибоначи? $num3<br>";
?>
 </body>
</html>