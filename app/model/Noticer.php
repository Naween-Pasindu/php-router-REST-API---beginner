<?php
abstract class Noticer extends Employee{
    protected $connection;
    public function __construct($con){
        parent::__construct($con);
    }  
}