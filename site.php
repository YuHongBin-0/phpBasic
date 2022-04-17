<!-- follow tutorials @ https://www.youtube.com/watch?v=OK_JCtrrv-c&t=1682s -->
<!-- PHP Programming Language Tutorial - Full Course -->
<!-- 4 hour 37min -->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>

    <body>


    <?php

$characterName = "Johnathon";
$characterAge = 35;

echo ("Hello World <br>");
echo "Hello World ";
echo "<h1> My Website </h1>";
echo "<p> this is my website </p>";

$characterName = "Johnathon";
$characterAge = 35;
echo "Named : $characterName <br>";
echo "Age was $characterAge <br>";

$characterName = "Mike";
echo "He really like his name $characterName <br>";
echo "But he didnt like being $characterAge <br>";

?>

    <?php
echo "<hr>";
echo "Data Types <br>";

// string
$phrase = "This is a string Example <br>";

// whole number (int)
$age = 30;
$age2 = -20;

// number with decimal (float)
$gpa = 3.7;

// Boolean , True or False
$isMale = true;

// null value
null;

echo $phrase;

?>


    <?php
echo "<hr>";
echo "String Manipulations <br>";

echo "any plain text <br>";

$phrase1 = "Example TexT <br>";

echo $phrase1;

echo strtolower($phrase1);
echo strtolower("DoggD <br>");
echo strtoupper($phrase1);

// strlen include spaces and html tags
echo strlen($phrase1);

echo "<br>";
// find the letter at which number . start from 0
echo $phrase1[0];

// replace specific letter
echo "<br>";
$phrase1[0] = "B";
echo $phrase1;

// replace whole letter or part of letter (one instance?)

echo str_replace("Bxample", "Panda", $phrase1);
echo "<br>";
echo $phrase1;

// grab substring

echo substr($phrase1, 3, 8);

?>

    
    
<?php
    echo "<hr>";
    echo "Numbers Manipulations <br>";

    echo 40;
    echo "<br>";
    echo -40.55;
    echo "<br>";
    echo 5 + 10;
    echo "<br>";
    echo 5 - 10;
    echo "<br>";
    echo 5.32 * 10;
    echo "<br>";
    echo 5 / 10;
    echo "<br>";
    // moduler operation , 10 divide by 3 remainder 1 
    echo 10 % 3;

    echo "<br>";
    // follow normal math steps
    echo 4 + 5 * 10;
    echo "<br>";
    echo ( 4 + 5 ) * 10 ;
    echo "<br>";
    $num = 10;
    // ++ adds 1 to the number, same as --
    $num++;
    $num = $num + 25;
    echo $num;
    echo "<br>";

    // abs = absolute number
    echo abs(-100);
    echo "<br>";

    // pow = power exp: 2^4 , sqrt for square root
    echo pow(2, 4);
    echo "<br>";

    // compare number, print out the biggest number, min for mininum
    echo max(2, 10, 30);
    echo "<br>";

    // round off to nearest whole number, ceil to always round up the number , floor to round down the number
    echo round(33.23);
    echo "<br>";

    // alot more math function, logarithm, log cos tan etc



?>




<?php

    echo "<hr>";
    echo "Getting User Input <br>";

?>

<form action="site.php" method="get">
    Name: <input type="text" name="nameID" > <br>
    Age: <input type="number" name="ageID" >
    <input type="submit">
</form>

<br>

Your name is : <?php echo $_GET["nameID"] ?>
<br>
Your age is : <?php echo $_GET["ageID"] ?>

<!------------------------------------ USER INPUT ENDS HERE ---------------------------------->




<?php
    echo "<hr>";
    echo "Building a basic calculator <br>";
?>

<form action="site.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit">
</form>

    Answer / Result : <?php echo $_GET["num1"] + $_GET["num2"] ?>

<!------------------------------------ Calculator ENDS HERE ---------------------------------->


<?php
    echo "<hr>";
    echo "Building a Mad Libs game <br>";
?>

<form action="site.php" method="get">
    
    <input type="submit">
</form>



    </body>



</html>