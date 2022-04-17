<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>

    <body>


<?php  

    echo "<hr>";
    echo "Associative array - key value pair <br>";

    $grades = array("Jim" => "A+",  "Pam" => "B-",  "Tom" => "C+");
    $grades["Tom"] = "F-";
    echo $grades["Tom"];
    echo "<br>";
    echo count($grades);

    echo "<br>";
    ?>


<form action = "site2.php" method="post">
<input type="text" name="student">
<input type="submit">
</form>

<?php  
    echo $grades[$_POST["student"]];
    echo "<br>";
?>

<!--  functions intro    below this line -->

<?php 
    function sayHi($name, $age){
        echo "Hello $name, you are $age <br>";
    }

    sayHi("Mike", 40);

    sayHi("sam", 43);

    sayHi("tom", 19);

?>

<!--  return statement    below this line -->

<?php 

    function cube($num){
        echo "Hello1";
        return $num * $num * $num ;
        echo "Hello2";
        // return will end the function, hello2 will not be printed
    }

    $cubeResult = cube(4);

    echo $cubeResult;
    echo "<br>";
    echo cube(4);
    echo "<br>";

?> 

<!--  if statement    below this line -->

<?php 

    $isMale = false;
    $isTall = false;

    if ($isMale){
        echo "you r male";
    } else {
        echo "you r not male";
    }

    echo "<br>";

// again example 2 

// && is and || for or == for equals != for not equals to > for more then < less than >= with equals option

    if ($isMale && $isTall){
        echo "you r tall male ";
    } elseif ($isMale && !$isTall){
        echo "you r short male ";
    } elseif (!$isMale && $isTall){
        echo "you r tall female ";
    } else {
        echo "you r short female";
    }

    echo "<br>";
?> 



<!--  comparisons(con't) with if statements   below this line -->

<?php 

    echo max(3, 6);
    echo "<br>";
    function getMax($num1, $num2){
        if($num1 > $num2){
            return $num1;
        } else {
            return $num2;
        }
    }

    echo getMax(300, 87);
    echo "<br>";
    function getMax2($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
           return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        } else {
            return $num3;
        }
    }

    echo getMax2(3020, 3020, 400);

?>


<!-- better calculator   below this line -->

<form action="site2.php" method="post">
    <!-- use step for decimal points -->
    first num: <input type="number" step="0.1" name="numb1"> <br>
    OP: <input type="text" name="op"> <br>
    first num: <input type="number" name="numb2"> <br>
<input type="submit">

</form>

<?php 

    $numb1 = $_POST["numb1"];
    $numb2 = $_POST["numb2"];
    $op = $_POST["op"];

    if($op == "+"){
        echo $numb1 + $numb2;
    } elseif($op == "-"){
        echo $numb1 - $numb2;
    } elseif($op == "*"){
        echo $numb1 * $numb2;
    } elseif($op == "/"){
        echo $numb1 / $numb2;
    } else {
        echo "Error : Invalid Operator";
    }

?>


<!-- switch statement-similar to if , when theres alot situation   below this line -->
<hr>
<br>

    <form action="site2.php" method="post">
        what was your grade
        <input type="text" name="grade">
        <input type="submit">
</form>

<?php 
    $grade = $_POST["grade"];
    echo $grade;
    echo "<br>";
    switch($grade){
        case "A":
            echo "You did amazing : A";
            break;

        case "B" :
            echo "You did pretty good : B";
            break;

        case "C" :
            echo "You did quite good : C";
            break;

        case "D" :
            echo "Can do better : D";
            break;

        case "E" :
            echo "You did poorly : E";
            break;

        case "F" :
            echo "You failed : F";
            break;


        default:
            echo "Invalid grade";
    }

?>






    </body>

</html>