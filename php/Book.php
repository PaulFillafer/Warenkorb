<?php

class Book
{

    private $id;
    private $title;
    private $price;
    private $stock;

    public function __construct($id = null, $title = null, $price = null, $stock = null){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->stock = $stock;
    }

    public static function get($id){
        return $id;
    }

    public static function getAll() {
        $jsonData = file_get_contents('bookdata.json');

        $booksArray = json_decode($jsonData, true);

        $books = [];
        foreach ($booksArray as $bookData) {
            $books[] = new Book(
                $bookData['id'],
                $bookData['title'],
                $bookData['price'],
                $bookData['stock']
            );
        }
        return $books;
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }



    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }




}