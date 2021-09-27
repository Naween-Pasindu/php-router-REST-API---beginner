<?php
class InventoryManager extends Noticer{
    public function __construct($con){
        parent::__construct($con);
    }

    public function addCompany($companyName,$email){
        $sql = "INSERT INTO `company` (`consumerId`, `caompanyName`, `email`, `web`, `pass`, `companyState`, `authcode`, `username`) VALUES (NULL, '$companyName', '$email', NULL, NULL, NULL, NULL, NULL);";
        $this->connection->query($sql);
        echo json_encode("{'code':200}");
    }
    public function updateCompany($newValue,$id){
        $sql = "UPDATE company set caompanyName='$newValue' WHERE  consumerId = $id";
        $this->connection->query($sql);
        echo json_encode("{'code':$sql}");
    }
}