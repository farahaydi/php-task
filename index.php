<?php

// ex01:
// echo("enter year :");
// $leapYear = readline("Enter year :");

// if ($leapYear % 4 == 0)
//     echo "this is leap year";
// else
//     echo "this is not leap year";

// echo "\n";

// // ex02:

// $temperature = readline("enter temperature :");

// if ($temperature < 20)
//     echo "we are in winter";
// else
//     echo "we are in summer";

//  ex03:
$num1= readline("enter number 1 : ");
$num2= readline("enter number 2 :");
$num3= readline("enter number 3 :");
$num4= readline("enter number 4 :");
$num5= readline("enter number 5 :");
// $sum =0;
// if($num1 != $num2)
//     {
//         $sum=$num1+$num2;
//         echo($sum);
//     }
//     else
//         {
//             $sum=$num1+$num2;
//             echo ($sum*3);
//         }



// ex 04:
// $sum2=0;
// $sum2 = $num1+$num2;

// if($sum2 == 30 )
//    {echo $sum2;} 
// else
//    echo "false";

// ex 05 :
// if($num1>=0 && $num1%3==0)
//     {
//        echo $num1;
//     }
//     else
//         echo "false";

//ex06:
// if($num1>20 && $num1<50)
//     {
//         echo "true";
//     }
//     else
//         echo "false";

//ex07:
// if ($num1 > $num2 && $num1 > $num3) {
//     echo "number one largee";
// } elseif ($num2 > $num1 && $num2 > $num3) {
//     echo "number two large";
// }
// else
//     {echo "number three large";}

// //ex 08:
// $unit = readline("enter pill unit :");
// $bill =0;
// if ($unit <= 50) {
//     $bill = $unit*2.5;
// }
// elseif ($unit <= 150) 
//     {
//         $firstTair = 50*2.5;
//     $bill = ($unit - 50) * 5;
//     $bill+= $firstTair;
//     }
//     elseif( $unit <= 250)
//         {
//     $firstTair = 50 * 2.5;
//     $scoundTair = 100 * 5;
//     $bill = ($unit-150) * 6.20;
//     $bill+= $firstTair + $scoundTair;
//         }
//         else
//             {
//     $firstTair = 50 * 2.5;
//     $scoundTair = 100 * 5;
//     $thirdTair = 100 * 6.2;
//     $bill = ($unit - 250) * 7.50;
//     $bill += $firstTair + $scoundTair+$thirdTair;
//             }
// echo "Your electricity bill is: " . $bill . " JOD";

//ex9:
//summation 
// $userInput = readline("Enter your value : ");
// $operands;
// $num1;
// $num2;

// for ($i = 0; $i < strlen($userInput); $i++) {
//     if ($userInput[$i] == '+') {

//         $operands = '+';

//         $num1 = substr($userInput, 0, $i);
//         $num2 = substr($userInput, $i + 1);

//         echo $num1 + $num2;
//     } else if ($userInput[$i] == '-') {

//         $operands = '-';

//         $num1 = substr($userInput, 0, $i);
//         $num2 = substr($userInput, $i + 1);

//         echo $num1 - $num2;
//     } elseif ($userInput[$i] == '*') {

//         $operands = '*';

//         $num1 = substr($userInput, 0, $i);
//         $num2 = substr($userInput, $i + 1);

//         echo $num1 * $num2;
//     } else if ($userInput[$i] == '/') {

//         $operands = '/';

//         $num1 = substr($userInput, 0, $i);
//         $num2 = substr($userInput, $i + 1);

//         echo $num1 / $num2;
//     }
// }
// ex 10 :
// if ($num1 >=18)
//     {
//         echo "you eligible to vote";
//     }
//     else 
//         {
//             echo "not eligible to vot";
//         }

// ex11:
// if ($num1 > 0) {
//     echo "positive number";
// } elseif ($num1 < 0) {
//     echo "negative number";
// } else {
//     echo "zero number";
// }

//ex12 :
// $sum = 0;

// for ($i = 0; $i < 9; $i++)
//     {
//         $grad = readline("enter your grade : ");
//         $sum += $grad;
//     }
// $avg = $sum / 9;
// if ($avg < 60) {
//     echo "F";
// } elseif ($avg < 70) {
//     echo "D";
// } elseif ($avg < 80) {
//     echo "C";
// } elseif ($avg < 90) {
//     echo "B";
// } else {
//     echo "A";
// }

//-------------------------------------------------



?>