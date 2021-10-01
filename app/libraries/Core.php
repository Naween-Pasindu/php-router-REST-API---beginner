<?php
class Core{
        protected $currentModel = 'Home';
        protected $currentMethod = 'viewDonations';
        protected $params = [];
        protected $connection;

        public function __construct($mysqli){
            $this->connection = $mysqli;
            $this->currentModel = $this->getClass();
            $this->currentModel =  new $this->currentModel($this->connection);
            $method = $this->getMethod();
            if(method_exists($this->currentModel,$method)){
                $this->currentMethod = $method;
            }

            if(count(array_slice(array_values($_REQUEST),4))> 0){
                $this->params = array_slice(array_values($_REQUEST),4);
            }else{
                $this->params =  []; 
            }
            
            call_user_func_array([$this->currentModel, $this->currentMethod], $this->params);
        }

        public function  getClass(){
            $class =$_REQUEST['class'];
            return $class;
        }

        public function  getMethod(){
            $method =$_REQUEST['method'];
            return $method;
        }
}