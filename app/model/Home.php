<?php
class Home{
    private $connection;

    public function __construct($con){
        $this->connection = $con;
    }

    public function viewDonations(){
        $sql = "SELECT * FROM `company`";
        $excute = $this->connection->query($sql);
        $results = array();
        while($r = $excute-> fetch_assoc()) {
            $results[] = $r;
        }
        $json = json_encode($results);
        echo $json;
    }
    public function viewFundraises(){
        $sql = "SELECT * FROM `staff`";
        $excute = $this->connection->query($sql);
        $results = array();
        while($r = $excute-> fetch_assoc()) {
            $results[] = $r;
        }
        $json = json_encode($results);
        echo $json;    
    }
}