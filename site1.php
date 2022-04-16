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

<form action="site1.php" method="get">

Name : <input type="text" name="name"> <br>
    <input type="submit">
</form>
<br>

<?php
echo $_GET["name"];
// added &age=40 at the end of the url
echo $_GET["age"];
?>

<!------------------- URL parameter ends here -------------------- -->


<?php
echo "<hr>";
echo "GET & POST <br>";
?>

<form action="site1.php" method="get">

Password : <input type="password" name="password"> <br>
    <input type="submit">
</form>
<br>

<!-- Post to let it not show in url and more secure, but have confirm form submission when reloading -->
<?php 
    echo $_GET["password"];
?>

<!------------------- GET AND POST ends here -------------------- -->


<?php
    echo "<hr>";
    echo "ARRAY <br>";

    $friends = array("hongliang", "chinyan", "fitri", "naufal");
    $friends[1] = "yechen";
    echo "<br>";
    echo $friends[0];
    echo $friends[1];
    $friends[4] = "angela";
    echo "<br>";
    echo $friends[4];
    echo count($friends);
?>


<!------------------- Array ends here -------------------- -->


<?php
echo "<hr>";
echo "Checkbox info <br>";
?>


<form action="site1.php" method="post">

    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Bananas: <input type="checkbox" name="fruits[]" value="banana"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="orange"> <br>
    
    <input type="submit">
</form>
<br>

<?php 
    $fruits = $_POST["fruits"];
    echo $fruits[1];
?>

<!------------------- Checkbox ends here -------------------- -->




    </body>



</html>