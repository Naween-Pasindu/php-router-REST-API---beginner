<?php
class CompensationRequest{
    private $connection;

    public function __construct($con){
        $this->connection = $con;
    }
}