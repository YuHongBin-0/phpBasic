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

    while($index <= 3){
        echo "$index <br>";
        $index = $index + 1;
    }

    echo "<br>";

    do{
        echo "$index2 <br>";
        $index2 = $index2 + 1;
    } while ($index2 <= 3);

?>



<!-- For loop   below this line   -->
<hr>
<br>

<?php 
    $index3 = 1;
    while($index3 <=3){
        echo "$index3 <br>";
        $index3 = $index3 + 1 ;
    } 

    echo "<br>";

    // for loop more complex, 3 condition, more compact and streamline
    for($index4 = 1; $index4 <=2; $index4 = $index4+1 ){
            echo "$index4 <br>";
    }


    $luckyNumbers = array(4, 8, 16);
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



<!-- Including HTML   below this line   -->
<hr>
<br>

<?php include "header.html" ?> 
<p>Hello world</p>
<?php include "footer.html" ?> 

<!-- Including php file   below this line   -->
<hr>
<br>


<?php 
    $title = "My first post";
    $author = "Hongbin";
    $wordCount = 400;

    include "article-header.php"
?>


<?php 

    include "useful-tools.php";
    echo "<br>";
    sayHi("Mike");
    echo "<br>";
    echo $feetInMile
?>







    </body>

</html>