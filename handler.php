<?php
//$age=51;
// if ($age<10||$age>90){
//     echo ("Некоректный возрвст");
// }
// else{
//     $sum=(string) $age;
//     $sum=str_split($sum);
//     $sum=array_reduce($sum,function ($acc,$value){
//    return $acc+(int)$value;
//     });
//     echo ($sum .'<br/>');
//     if ($sum<10)
//         echo ("сумма цифр однозначна".'<br/>');
//     else
//         echo("Сумма цифр двузначна".'<br/>');
// }
 ///////////////////////////////////////////////////////////
//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $sum=0;
// foreach($arr as $num){
//     $sum+=$num;
// }
//echo($sum/count($arr));
// //////////////////////////////////////////////////////////
//
//$sum_bruh=0;
//$count=0;
//for ($i=1,$sum_bruh=0;$sum_bruh<100;$i++){
//    $sum_bruh+=$i;
//    $count++;
//    echo("<br>".$sum_bruh);
//}
//echo ('<br>'.$count);
//
//$i=1;
//while(true){
//    $sum_bruh+=$i;
//    $i++;
//    $count++;
//    echo("<br>".$sum_bruh);
//    if ($sum_bruh>100){
//        echo $i;
//        break;
//    }
//
//
//}
//echo ('<br>'.$count);
//
//
//$arr2 = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
//$sum_key=0;
//$sum_value=0;
//foreach ($arr2 as $key=>$value){
//    $sum_key+=$key;
//    $sum_value+=$value;
//}
//echo ('<br>'.$sum_key/$sum_value.'<br>');
//
//for ($i=1;$i<10;$i++){
//    $str="";
//    for ($e=0;$e<10-$i;$e++){
//        $str=$str.' ';
//    }
//    for ($j=0;$j<$i;$j++){
//        $str=$str.'x ';
//    }
//    echo ($str."<br>");
//}
///////////////////////////////////////////////////

// $arr = [4, 2, 5, 19, 13, 0, 10];
// $sum_arr=0;
// foreach ($arr as $elem){
//     $sum_arr+=pow($elem,2);
// }
// echo (sqrt($sum_arr)."<br>");
// echo (round(sqrt(379),2)."<br>");
// echo (round(sqrt(379),1)."<br>");
// echo (round(sqrt(379))."<br>");


// $asc_mas=[
//     "floor"=>floor(sqrt(579)),
//     "ceil"=>ceil(sqrt(579))
// ];
// print_r($asc_mas);


// $arr2 = [4, -2, 5, 19, -130, 0, 10];

// echo (min($arr2)."<br>");
// echo (max($arr2));
// /////////////////////////////////////////////////
// echo (strtoupper('php'."<br>"));
// echo (strtolower('PHP'."<br>"));
// echo (ucfirst("london"."<br>"));
// echo (lcfirst('London'."<br>"));
// //mb_strtolower();
// echo(mb_strlen('html css php')."<br>");
// $password='флешки зло';
// if (mb_strlen($password)>5&&mb_strlen($password)<10){
//     echo ($password."<br>");
// }
// else{
//     echo("bruh"."<br>");
// }

// echo(substr('html css php',0,4)."<br>");
// echo(substr('html css php',5,3)."<br>");
// echo(substr('html css php',9,3)."<br>");
// echo(mb_substr('Дана строка. Вырежьте и выведите на экран последние 3 символа этой строки.',-3,3)."<br>");

// if (mb_substr('https://quizizz.com/admin/quiz/608ee4a0a2dc99001d3a680e/n-j',0,7)=='http://'||mb_substr('https://quizizz.com/admin/quiz/608ee4a0a2dc99001d3a680e/n-j',0,8)=='https://'){
//     var_dump(true);
//     echo ('<br>');
// }
// else{
//     var_dump(false);
//     echo ('<br>');
// }

// if (mb_substr('fail.jpg',-4,4)=='.jpg'||mb_substr('fail.jpg',-4,4)=='.png'){

//     var_dump(true);
//     echo ('<br>');
// }
// else{
//     var_dump(false);
//     echo ('<br>');
// }
// $string='Дана строка. Если в этой строке';
// if (mb_strlen($string)>5){
//     echo(mb_substr($string,0,5).'...');
//     echo ('<br>');
// }
// else{
//     echo($string);
//     echo ('<br>');
// }

// echo str_replace('.','-','31.12.2013');
// echo ('<br>');

// echo (str_replace(['а','б','в'],[1,2,3],"Дана строка. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3."));
// echo ('<br>');
// echo (str_replace(range(0,9,1),'',"1a2b3c4b5d6e7f8g9h0"));
// echo ('<br>');
// echo (strtr("Дана строка. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.",["а"=>1,"б"=>2,"в"=>3]));
// echo ('<br>');
// echo (strtr("Дана строка. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.",'абв','123'));
// echo ('<br>');
// $str="Дана строка. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.";
// echo (substr_replace($str,'!!!',3,5));
// echo ('<br>');
// echo (strpos('abc abc abc','a'));
// echo ('<br>');
// echo (strrpos('abc abc abc','b'));
// echo ('<br>');
// echo (strpos('abc abc abc','b',3));
// echo ('<br>');
// echo (strpos('aaa aaa aaa aaa aaa',' ',4));
// echo ('<br>');

// if (strpos('aaa ..aaa aaa aaa aaa','..')){
//     echo('DOTS');
//     echo ('<br>');
// }

// if (str_contains('http://quizizz.com/admin/quiz/608ee4a0a2dc99001d3a680e/n-j','http://')){
//     echo('htpp://');
//     echo ('<br>');
// }
// //////////////////////////////////////////////////////
// echo ('задание 1');
// echo ('<br>');
// $arr_str=['12', '13', '14', '15', '16', '17', '18', '19'];
// $new_arr=[];
// foreach($arr_str as $item){
//     array_push($new_arr,round(sqrt($item),2));

// }
// print_r($new_arr);
// echo ('<br>');

// echo ('задание 2');
// echo ('<br>');

// var_dump(array_combine(range('a','z'),range(1,26)));
// echo ('<br>');

// echo ('задание 3');
// echo ('<br>');

// $num_str="1213141516171819";
// $num_arr=str_split($num_str,2);

// var_dump(array_reduce($num_arr,function ($carry,$item){
// $carry+=$item;
// return $carry;
// },0));
////////////////////////////////////////////////////
// function translate($num){

//     $number_string="";
//     $hundreads=floor($num/100);
//     $dozens=floor(($num-$hundreads*100)/10);
//     $units=floor(($num-$hundreads*100-$dozens*10));
//     switch($hundreads){
//         case 0:
//             echo('aaaa');
//             break;
//         case 1:
//             $number_string.="сто ";
           
//             break;
//          case 2:
//             $number_string.='двести ';
//             break;
//         case 3:
//             $number_string.='триста ';
//             break;
//         case 4:
//             $number_string.='четыресто ';
//             break;
//          case 5:
//             $number_string.='пятьсот ';
//             break;
//          case 6:
//             $number_string.='шестьсот ';
//             break;
//         case 7:
//             $number_string.='семьсот ';
//             break;
//         case 8:
//             $number_string.='восемьсот ';
//             break;
//         case 9:
//             $number_string.='девятсот ';
//             break;                                           
//     }
//     if($dozens==1&&$units>0){
//         switch($units){
//             case 1:
//                 $number_string.='одиннадцать ';
//                 break;
//              case 2:
//                 $number_string.='двенадцать ';
//                 break;
//             case 3:
//                 $number_string.='тринадцать ';
//                 break;
//             case 4:
//                 $number_string.='четырнадцать ';
//                 break;
//              case 5:
//                 $number_string.='пятнадцать ';
//                 break;
//              case 6:
//                 $number_string.='шестнадцать ';
//                 break;
//             case 7:
//                 $number_string.='семнадцать ';
//                 break;
//             case 8:
//                 $number_string.='восемьнадцать ';
//                 break;
//             case 9:
//                 $number_string.='девятнадцать ';
//                 break;                                           
//         }
//     }

//     else{
//         switch($dozens){
//             case 0:
//                 break;
//             case 1:
//                 $number_string.='десять ';
//                 break;
//              case 2:
//                 $number_string.='двадцать ';
//                 break;
//             case 3:
//                 $number_string.='тридцать ';
//                 break;
//             case 4:
//                 $number_string.='сорок ';
//                 break;
//              case 5:
//                 $number_string.='пятьдесят ';
//                 break;
//              case 6:
//                 $number_string.='шестьдесят ';
//                 break;
//             case 7:
//                 $number_string.='семьдесят ';
//                 break;
//             case 8:
//                 $number_string.='восемьдесят ';
//                 break;
//             case 9:
//                 $number_string.='девяносто ';
//                 break;                                           
//         }
//         switch($dozens){
//             case 0:
//                 break;
//             case 1:
//                 $number_string.='один ';
//                 break;
//              case 2:
//                 $number_string.='два ';
//                 break;
//             case 3:
//                 $number_string.='три ';
//                 break;
//             case 4:
//                 $number_string.='четыре';
//                 break;
//              case 5:
//                 $number_string.='пять ';
//                 break;
//              case 6:
//                 $number_string.='шесть ';
//                 break;
//             case 7:
//                 $number_string.='семь ';
//                 break;
//             case 8:
//                 $number_string.='восемь';
//                 break;
//             case 9:
//                 $number_string.='девять ';
//                 break;
//         }                      
//     }
//     return $number_string;
// }
// echo('<br>'.translate(612).'<br>');


// function through_arr(&$arr){
// foreach($arr as &$elem){
    
//     if(is_array($elem)){
//         through_arr($elem);
//     }
//     else{
//         $elem=pow($elem,2);
//     }
// }

// }
// $array=[1, [2, 7, 8], [3, 4], [5, [6, 7]]];
// through_arr($array);
// print_r($array);

// $products = [
//     [
//         'name'   => 'product1',
//         'price'  => 100,
//         'amount' => 5,
//     ],
//     [
//         'name'   => 'product2',
//         'price'  => 200,
//         'amount' => 6,
//     ],
//     [
//         'name'   => 'product3',
//         'price'  => 300,
//         'amount' => 7,
//     ],
// ];
// 	echo '<table>';
// foreach($products as $row){
//     echo ('<tr>');
//     foreach($row as $cell){
//         echo('<td>'.$cell.'</td>');
//     }
//     echo '</tr>';
// }
// 	echo '</table>';

var_dump($_REQUEST);
$tmp=$_REQUEST;
echo('<br>'.$tmp['first']+$tmp['second']+$tmp['third']);