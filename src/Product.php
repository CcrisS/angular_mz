<?php

/**
 * 
 */
class Product {

    const MAX_CSS_WIDTH_CLASS = 1; // 1..4

    protected static $colors = array('#8E44AD', '#F39C12', '#D35400', '#006A3F', '#2980B9', '#C0392B', '#956DC9', '#27AE60');
    protected static $imgs = array('img/product1.jpg', 'img/product2.jpg', 'img/product3.jpg', 'img/product4.jpg', 'img/product5.jpg');

    protected $cssWidthClass;
    protected $bgColor;
    protected $name;
    protected $price;
    protected $text;
    protected $img;

    public function __construct()
    {
        return $this->getNewRandom();
    }

    /**
     * Get a new random product
     *
     * @return Product
     */
    public function getNewRandom()
    {
        $this->name = 'Product '. rand(1000, 9999);
        $this->cssWidthClass = 'item'.rand(1, self::MAX_CSS_WIDTH_CLASS);
        $this->bgColor = self::$colors[rand(0, count(self::$colors) - 1)];
        $this->img = self::$imgs[rand(0, count(self::$imgs) - 1)];
        $this->price = rand(0, 99999) / 100;
        $this->text = file_get_contents('http://loripsum.net/api/1/short/plaintext');

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

}