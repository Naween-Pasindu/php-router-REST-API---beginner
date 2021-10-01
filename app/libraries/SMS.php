<?php

class SMS{
    private $sender;
    private $contact = [];
    private $messege ="";
    private $connection;

    public function __construct($con){
        $this->sender = sender;
        $this->connection = $con;
    }

    public function addContact($areaId,$messege){
        $this->messege = $messege;
        $this->send();
    }

    public function send(){
        $url = 
    }
}