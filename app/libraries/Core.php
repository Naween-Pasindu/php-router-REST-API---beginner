<?php
class Core{
        protected $currentModel = "Home";
        protected $currentMethod = "page";
        protected $nonSecure = ['Home','Employee']; // releasing no login required classes
        protected $params = [];
        protected $connection; 
        protected $permission = array(
                                    'Admin' => 1,
                                    'User' => 2
                                );
        private $userType=0;
        private $userId=0;

        public function __construct($mysqli){
            global $errorCode;
            $this->connection = $mysqli;
            $this->authorization();
            $this->setParams(); // adding json data to array
            $this->urlParams(); // adding url data to array
            $this->setClass();
            $method = new ReflectionMethod($this->currentModel, $this->currentMethod);
            $parameters = $method->getParameters();
            if (count($parameters)==0) {
                $this->params = [];
            }
            call_user_func_array([$this->currentModel, $this->currentMethod], array($this->params));
        }        
        public function  setParams(){
            $json = file_get_contents('php://input');
		    $this->params = json_decode($json,true);
            if(is_null($this->params)){
                $this->params = [];
            }
        }
        public function urlParams(){
            if(isset($_GET['request'])){
                if($_GET['request']=="index.php"){
                    exit();
                }
                $url = rtrim($_GET['request'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                $this->params['receivedParams'] = $url;
            }
        } 
        public function  setClass(){
            global $errorCode;
            global $route;
            $url = trim($this->params['receivedParams'][0]);

            $array = $route->checkAvailibility($url);
            foreach($array as $item) {
                $temp = explode("@", $item);
                if(in_array($temp[0],$this->nonSecure)){
                        $this->currentModel = $temp[0];
                        $this->currentModel =  new $this->currentModel($this->connection);
                        $this->setMthod($temp[1]);
                        array_shift($this->params['receivedParams']);
                        return;
                }else if(in_array($temp[0],array_keys($this->permission))){
                    if($this->userType == $this->permission[$temp[0]]){
                        $this->currentModel = $temp[0];
                        $this->currentModel =  new $this->currentModel($this->connection);
                        $this->setMthod($temp[1]);
                        array_shift($this->params['receivedParams']);
                        $this->params['userId'] = $this->userId;
                        return;
                    }
                }
            }
            http_response_code(403);
            echo json_encode(array("code"=>$errorCode['permissionError']));
            exit();
        }
        public function  setMthod($method){
            global $errorCode;
            if(method_exists($this->currentModel,$method)){
                $this->currentMethod = $method;
            }else{
                http_response_code(404);
                echo json_encode(array("code"=>$errorCode['methodNotFound']));
                exit();
            }
        }       
        public function  authorization(){
            global $errorCode;
            $headers = apache_request_headers();
            if(isset($headers['HTTP_APIKEY'])){
                $lifetime = 60*60;
                $key = base64_decode($headers['HTTP_APIKEY']);
                $secure = new Openssl_EncryptDecrypt();
                $decrypted = $secure->decrypt($key,ENCRYPTION_KEY);
                if($decrypted){
                    $data = json_decode($decrypted,true);
                    if(isset($data['auth'])){
                        if($data['auth']){
                            if(time() - $data['issue'] < $lifetime){
                                $id = $data['userId'];
                                $role = $data['userRole'];
                                $sql = "SELECT l.keyAuth FROM login l WHERE l.empId = $id AND l.roleId = $role";
                                $excute = $this->connection->query($sql);
                                $data2 = $excute-> fetch_assoc();
                                if(!strcmp($data['tokenKey'],$data2['keyAuth'])){
                                    $this->userType=$role;
                                    $this->userId = $data['userId'];
                                }else{
                                    http_response_code(401);
                                    echo json_encode(array("code"=>$errorCode['tokenRewoked']));
                                    exit();
                                }
                            }else{
                                http_response_code(401);
                                echo json_encode(array("code"=>$errorCode['tokenExpired']));
                                exit();
                            }
                        }
                    }
                }else{
                    http_response_code(401);
                    echo json_encode(array("code"=>$errorCode['apiKeyError']));
                    exit();
                }                            
            }else{
                $this->userType=0;
            }
        }
}