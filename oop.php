<?php

class Book{
    private $title;
    private $availableCopies;

    public function __construct($title,$availableCopies)
    {
        $this->title =$title;
        $this->availableCopies= $availableCopies;
    }

    //Getter method for title

    public function getTitle(){
        return $this->title;
    }

    //Getter method for availableCopies
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
//method to borrow a book

    public function borrowBook(){
        if($this->availableCopies>0){
            $this->availableCopies--;
            return true;
        }else{
            return false;
        }
    }

    //method to return a book

    public function returnBook(){
        $this->availableCopies ++;
    }
}

class member{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    //Getter method for name

    public function getName(){
        return $this->name;
    }

    //Method for member to borrow book

    public function borrowBook($book){
        if($book->borrowBook()){
            echo $this->name." has borrowed".$book->getTitle()."<br>";
        }else{
            echo "Sorry,'".$book->getTitle()."' is out of stock.<br>";
        }
    }

    //Method for member to return a book

    public function returnBook($book){
        $book->returnBook();

        echo $this->name. " has returned'".$book->getTitle()."'<br>";
    }
}

$book1 = new Book(" The Great Gatsby ",5);
$book2 = new Book(" To Kill a Mockingbird ",3);

//creating a 2 member

$member1 = new member("John Doe");
$member2 = new member("Jane Smith");

//member1 borrowing book 1

$member1->borrowBook($book1);

//member2 borrow book 2

$member2->borrowBook($book2);

//Display the available copies after borrowing

echo "Available Copies '".$book1->getTitle()."':".$book1->getAvailableCopies()."<br>";
echo "Available Copies '".$book2->getTitle()."':".$book2->getAvailableCopies();