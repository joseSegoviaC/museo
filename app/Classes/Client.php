<?php

namespace App\Classes;

use App\Models\Client as ModelsClient;
use Illuminate\Database\Eloquent\Model;

class Client
{
    protected $fullName;
    protected $email;

    public function __construct($fullName,$email)
    {
        $this->fullName = $fullName;
        $this->email = $email;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function saveClient(){
        $client = new ModelsClient;

        $client->full_name = $this->fullName;
        $client->email = $this->email;
    
        $client->save();
    }
}
