<?php

class Products {
    
    //"00000001","F1000","Fudge","Invenire percipitur eum ea, in saepe persequeris has, meis dicta albucius an vix. Utinam nonumes necessitatibus vel ne. Ad mea tacimates temporibus. Duo dicam timeam integre in. Ius an libris latine, ludus inimicus quo te, ridens scripta placerat in pri. Nec ex feugiat abhorreant.","0.10","1","95_2542284"
    public $products = array();
    function __construct() {
    $labels = array('id', 'sku', 'title', 'description', 'price', 'special', 'link');
        $fh = fopen('./models/product.csv', 'r');
        
        if ($fh) {
            while (!feof($fh)) {
                $row = fgetcsv($fh);
                $tempRow = array();
                if (isset($row) && is_array($row) && count($row) > 0) {
                    foreach($row as $key => $value) {
                        $tempRow[$labels[$key]] = $value;
                    }
                    $this->products[] = $tempRow;
                }
            }
        }
    }
    
    function getProducts() {
        return $this ->products;
    }
    
    function getTitles() {
        $titles = array();
        foreach ($this->products as $row){
            $titles[] = $row['title'];
        }
        return $titles;
    }
}