<?php
class CompensationReport{
    private $connection;

    public function __construct($con){
        $this->connection = $con;
    }
}