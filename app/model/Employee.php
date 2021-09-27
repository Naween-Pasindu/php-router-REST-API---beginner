<?php
abstract class Employee{
    protected $connection;

    public function __construct($con){
        $this->connection = $con;
    }
}