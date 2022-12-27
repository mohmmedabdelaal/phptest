<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

//$numberList = array(33,32,'hi','you are not welcomed here',false,'<h3><header>Not now</header></h3>');
//print_r($numberList);
//
// echo $numberList[5];
//echo "<br>";
//
//echo "<br>";
//echo "<br>";
//
//echo $numberList[3];

//$myNum = ['One','two','Three'];
//
//echo $myNum[2];
//$names = ['fname' => 'Mohamed', 'lName' => 'Abdelaal'];

/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out




			 */

$num1 = 20;
$num2 = 303;

$arr1 = array(1,2,3,4,'Five');
$arr2 = [$arr1,"fifth is: $arr1[4]",'8'];
$arr1_2 = array_merge($arr1,$arr2);
$arr3 = ['arr1' => $arr1,'arr2' => $arr2 , 'arr3' => $arr1_2 ];



?>

<div>
    <h1>
    <?php
        echo $num1 + $num2;
    ?>
    </h1>
</div>

<div>
    <h2>
        <?php
//       echo $arr3['arr3'][6];
       echo "<br>";
       print_r($arr3['arr3']);
        ?>
    </h2>
</div>

</body>
</html>