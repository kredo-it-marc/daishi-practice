<?php
    class Book{
        //properties
        private $title;
        private $author;
        private $price;

        //constructor
        public function __construct($title, $author, $price){
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        //setter functions
        public function setTitle($title){
            $this->title = $title;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function setValues($title, $author, $price){
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
        }

        //getter
        public function getPrice(){
            $fnal_discounted_price = $this->price - $this->discount();
            return $fnal_discounted_price;
        }

        private function discount(){
            $discount = $this->price * .1;
            return $discount;
        }
    }

    //instantiation --> this creates an object
    // new Book --> creates an object
    // --> calls the constructor to create an object
    $bookObj = new Book("Harry Potter", "J.K. Rowling", 100);
    // new Book("Harry Potter", "J.K. Rowling", 100) --> it creates an object AND it initializes the properties with the following values
    $bookObj->setTitle("Harry Potter and the Order of the Pheonix");
    // $bookObj->setAuthor("J.K. Rowling");
    // $bookObj->setPrice(100);

    // $bookObj = new Book;
    // $bookObj->setValues("Harry Potter","J.k. Rowling", 100);

    //I AM A COMMENT ADDED TO TEST GIT
    //test 123

?>