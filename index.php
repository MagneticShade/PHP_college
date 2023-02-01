<?php
$age=51;
 if ($age<10||$age>90){
     echo ("Некоректный возрвст");
 }
 else{
     $sum=(string) $age;
     $sum=str_split($sum);
     $sum=array_reduce($sum,function ($acc,$value){
    return $acc+(int)$value;
     });
     echo ($sum .'<br/>');
     if ($sum<10)
         echo ("сумма цифр однозначна".'<br/>');
     else
         echo("Сумма цифр двузначна".'<br/>');
 }
 ///////////////////////////////////////////////////////////
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
 $sum=0;
 foreach($arr as $num){
     $sum+=$num;
 }
echo($sum/count($arr));
 //////////////////////////////////////////////////////////

$sum_bruh=0;
$count=0;
for ($i=1,$sum_bruh=0;$sum_bruh<100;$i++){
    $sum_bruh+=$i;
    $count++;
    echo("<br>".$sum_bruh);
}
echo ('<br>'.$count);

$i=1;
while(true){
    $sum_bruh+=$i;
    $i++;
    $count++;
    echo("<br>".$sum_bruh);
    if ($sum_bruh>100){
        echo $i;
        break;
    }


}
echo ('<br>'.$count);


$arr2 = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sum_key=0;
$sum_value=0;
foreach ($arr2 as $key=>$value){
    $sum_key+=$key;
    $sum_value+=$value;
}
echo ('<br>'.$sum_key/$sum_value.'<br>');

for ($i=1;$i<10;$i++){
    $str="";
    for ($e=0;$e<10-$i;$e++){
        $str=$str.' ';
    }
    for ($j=0;$j<$i;$j++){
        $str=$str.'x ';
    }
    echo ($str."<br>");
}




