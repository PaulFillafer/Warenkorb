<?php
require_once 'Cart.php';
class CartItem extends Cart
{

    private $book;
    private $books;

    public function __construct($id, $titel, $price, $stock)
    {
        $this->book = new Book($id, $titel, $price, $stock);
        $this->books = [];
    }

    private function loadCookie()
    {
        return setcookie("cart", $this->books, time() - 3600);
    }

    private function saveCookie(){
        setcookie("cart", $this->books, time() + 3600);
    }

    public function add($book, $count){
        $this->loadCookie();
        for ($i=0; $i<$count; $i++){
            $this->books.add($book);
        }
        $this->saveCookie();
    }

    public function remove($book){
    $this->loadCookie();
    $this->books.add($book);

}


}