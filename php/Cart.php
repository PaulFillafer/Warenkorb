<?php

class Cart
{

    private $book;
    private $cart_id;
    private $count;

    public function __construct($book, $cart_id, $count){
        $this->book = $book;
        $this->cart_id = $cart_id;
        $this->count = $count;
    }

    private function loadCookie()
    {

    }

    private function saveCookie(){

    }

    public function add($book, $count){
        $this->loadCookie();
        $this->book = $book;
    }

    public function remove($book){
        $this->loadCookie();
        $this->book = $book;
    }

}