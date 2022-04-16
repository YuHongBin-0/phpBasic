<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>

    <body>


    

<?php
    echo "<hr>";
    echo "Building a Mad Libs game <br>";
?>


<form action="site1.php" method="get">
    
    Color : <input type="text" name="color"> <br>

    Plural Noun : <input type="text" name="pluralNoun"> <br>

    Person : <input type="text" name="person"> <br>

    <input type="submit">
</form>

<br><br>

<?php 

    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $person = $_GET["person"];

    echo "Roses are $color <br>";
    echo " $pluralNoun are blue <br>";
    echo "I love $person <br>";
?>


<!------------------- Mad Lips ends here -------------------- -->


<?php
    echo "<hr>";
    echo "URL parameters <br>";
?>




<?php ?>




<?php ?>




<?php ?>




<?php ?>




<?php ?>




<?php ?>




<?php ?>



    </body>



</html>