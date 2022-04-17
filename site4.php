<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>

    <body>

<!-- Classes & Object   below this line   -->
<hr>
<br>

<?php 

    class Book{

        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1-> title = "harry potter";
    $book1-> author = "jk rowling";
    $book1-> pages = 600;

    $book2 = new Book;
    $book2-> title = "lord of the rings";
    $book2-> author = "tolkien";
    $book2-> pages = 900;

    echo $book2->author;
    

?>




    </body>

</html>