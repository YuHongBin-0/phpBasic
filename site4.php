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

        function __construct($aTitle, $aAuthor, $aPages){
            $this -> title = $aTitle;
            $this -> author = $aAuthor;
            $this -> pages = $aPages;

        }


    }

    // $book1 = new Book("Mike");
    // $book1-> title = "harry potter";
    // $book1-> author = "jk rowling";
    // $book1-> pages = 600;

    // $book2 = new Book;
    // $book2-> title = "lord of the rings";
    // $book2-> author = "tolkien";
    // $book2-> pages = 900;

    $book3 = new Book("TestTitle", "testAuthor", 323);

    echo $book3->author;
    

?>

<!-- Constructors - a special function to put in a class   -->

<br>
<!-- Objects and function below  -->
<?php 

    class Student{

        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
            $this -> name = $name;
            $this -> major = $major;
            $this -> gpa = $gpa;

        }

        function hasHonors(){
            if($this -> gpa >=3.5){
                return "true";
            }
            return "false";
        }

    }

    $student1 = new Student("Tom", "Information Technology", 2.9);
    $student2 = new Student("Sam", "Art", 3.6);

    echo $student2 -> hasHonors();

?>

<!-- Getters and Setters below  - so that only certain things can be controlled -->
<hr>
<br>
<?php 
    class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating){
            $this -> title = $title;
            $this -> setRating($rating);
        }


        function getRating(){
            return $this -> rating;
        }

        function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13"|| $rating == "R"|| $rating == "NR"){
                $this -> rating = $rating;
            } else {
                $this -> rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "PG");
//  G, PG, PG-13, R, NR
        // $avengers -> setRating("R");
    echo $avengers -> getRating();


?>

<!-- Inheritance below -->
<hr>
<br>
<?php 

class Chef {
    function makeChicken(){
        echo "The chef makes chicken <br>";
    }

    function makeSalad(){
        echo "The chef makes salad <br>";
    }

    function makeSpecialDish(){
        echo "The chef makes bbq ribs <br>";
    }

}

class ItalianChef extends Chef{
    function makePasta(){
        echo "the chef makes pasta";
    }

    function makeSpecialDish(){
        echo "the chef make chicken parm";
    }
}

$chef = new Chef();
$chef -> makeChicken();

$italianChef = new ItalianChef();
$italianChef -> makeSpecialDish();
    
?>




    </body>

</html>