<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>

    <body>

<!-- while loop   below this line  ----   do while loop is do first then check, so it runs once -->
<hr>
<br>

<?php 

    $index = 1;
    $index2 = 1;

    while($index <= 8){
        echo "$index <br>";
        $index = $index + 1;
    }

    echo "<br>";

    do{
        echo "$index2 <br>";
        $index2 = $index2 + 1;
    } while ($index2 <= 10);

?>



<!-- For loop   below this line   -->
<hr>
<br>

<?php 
    $index3 = 1;
    while($index3 <=5){
        echo "$index3 <br>";
        $index3 = $index3 + 1 ;
    } 

    echo "<br>";

    // for loop more complex, 3 condition, more compact and streamline
    for($index4 = 1; $index4 <=5; $index4 = $index4+1 ){
            echo "$index4 <br>";
    }


    $luckyNumbers = array(4, 8, 16, 14, 32, 42);
    // for loop more complex, 3 condition, more compact and streamline
    for($i = 0; $i < count($luckyNumbers); $i = $i+1 ){
        echo "$luckyNumbers[$i] <br>";
}

?>


<!-- Comments   below this line   -->
<hr>
<br>

<?php 

// comments 

?>


    </body>

</html>