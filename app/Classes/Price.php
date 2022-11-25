<?php

namespace App\Classes;

use App\Models\Price as ModelsPrice;
use Illuminate\Database\Eloquent\Model;

class Price
{
    protected $category;
    protected $amount;

    public function __construct($category,$amount)
    {
        $this->category = $category;
        $this->amount = $amount;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function savePrice(){
        $price = new ModelsPrice;
        
        $price->category = $this->name;
        $price->amount = $this->location;
        
        $price->save();
    }
}