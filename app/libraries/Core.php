<?php
class Core{
        protected $currentModel = "Home";
        protected $currentMethod = "viewDonations";
        protected $params = [];
        protected $connection; 

        public function __construct($mysqli){
            global $errorCode;
            $this->connection = $mysqli;
            $this->setParams();
            $this->filterRequest();
            if(!$this->requestAuthorization()){
                echo json_encode("{'code':".$errorCode['apiKeyError']."}");
                exit();
            }
            $method = new ReflectionMethod($this->currentModel, $this->currentMethod);
            $parameters = $method->getParameters();
            if (count($parameters)==0) {
                $this->params = [];
            }
            
            call_user_func_array([$this->currentModel, $this->currentMethod], array($this->params));
        }
        public function filterRequest(){
            global $errorCode;
            if(isset($_SERVER['REQUEST_URI'])){
                $url = rtrim($_SERVER['REQUEST_URI'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                $temp = explode('_', $url[count($url)-2]);
                //$count = count($temp);
                if(!class_exists($temp[0])) {
                    //echo json_encode("{'code':".$errorCode['classNotFound']."}");
                    echo json_encode("{'code':".$temp[0]."}");
                    exit();
                }
                $this->setClass($temp[0]);
                if(!$this->authorization()){
                    if(!strcmp($this->currentModel,"Home")){
                        echo json_encode("{'code':".$errorCode['userKeyError']."}");
                        
                        exit();
                    }
                }
                $this->currentModel =  new $this->currentModel($this->connection);
                if(method_exists($this->currentModel,$temp[1])){
                    $this->setMthod($temp[1]);
                }else{
                    echo json_encode("{'code':".$errorCode['methodNotFound']."}");
                    exit();
                }
            }else{
                echo json_encode("{'code':".$errorCode['unknownError']."}");
                exit();
            }
        }
        public function  setParams(){
            global $errorCode;
            $json = file_get_contents('php://input');
            //echo $json;exit();
		    $this->params = json_decode($json,true);
            if(count($this->params)<1){
                echo json_encode("{'code':".$errorCode['unknownError']."}");
                exit();    
            }
        }
        public function  setClass($class){
            $this->currentModel = $class;
        }
        public function  setMthod($method){
            $this->currentMethod = $method;
        }
        public function  authorization(){
            //echo json_encode("{'code':".$this->params['key']."}");
            if(isset($this->params['key'])){
                $key = $this->params['key'];
                
                unset($this->params['key']);
                if(isset($_SESSION['token'])){
                    if($_SESSION['token']==$key){
                        return true;
                    }
                }
            }
            return false;
        }
        public function  requestAuthorization(){
            if(isset($_SERVER['REQUEST_URI'])){
                $url = rtrim($_SERVER['REQUEST_URI'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                array_shift($url);
                $temp = $url[count($url)-1];
                if(API_KEY==$temp){
                    return true;
                }
                return false;
            }
        }
}