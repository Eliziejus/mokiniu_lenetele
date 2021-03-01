<?php

namespace ProductsApp;

class Mokiniai{
    public $klase;
    public $kodas;
    public $data;
    public $vardas;
    public $pavarde;
    public $vertinimai;
    
    
    
//setter 
public function __construct($klase,$kodas,$data,$vardas,$pavarde,
$vertinimai){
    $this->klase=$klase;
    $this->kodas=$kodas;
    $this->data=$data;
    $this->vardas=$vardas;
    $this->pavarde=$pavarde;
    $this->vertinimai=$vertinimai;

}
//getter

public function showData(){
    return[
        $this->klase,
        $this->kodas,
        $this->data,
        $this->vardas,
        $this->pavarde,
        $this->vertinimai
    ];
}

}


