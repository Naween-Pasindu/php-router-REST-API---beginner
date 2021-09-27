<?php
class Alert{
    private $connection;

    public function __construct($con){
        $this->connection = $con;
    }
}