<?php
class Book {
    private $title;
    protected $author;
    protected $available = true;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }
    public function setAvailable($available) {
        $this->available = $available;
    }
    public function getAvailable() {
        return $this->available;
    }

    public function issuance(){
        if($this->available == true) {
            $this->available = false;
            echo "book issued ";
            return true;
        }
        else{
        echo "\n".$this->title . " by " . $this->author . " is currently unavailable\n";
        return false;
        }
    }
}

$book1 = new Book("The Book theif", "Markus Zusak");
$book2 = new Book("A Thousand splendid suns","Khaled Hussaini");

$book1->issuance();
$book1->issuance();

echo $book2->getAuthor() . "\n" ;
echo $book2->setAuthor("Agatha Cristie") . "\n";

