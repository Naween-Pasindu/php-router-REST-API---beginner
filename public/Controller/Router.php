<?php
class Router{
    protected static $defaultController = array("public"=>"index.php",
                                                "test"=>"test.php",
                                                "404"=>"404.php",
                                                "a"=>"a.php",
                                                "b"=>"b.php");
    protected static $routes = array(
                                    'Admin'=>array(),
                                    'DisasterOfficer'=>array(),
                                    'DistrictSecratarists'=>array(),
                                    'DivisionalSecratarists'=>array(),
                                    'DMC'=>array(),
                                    'GramaNiladari'=>array(),
                                    'InventoryManager'=>array('SafeHouse','Inventory','Report'),
                                    'ResponsiblePerson'=>array(),
                                );
    protected $currentController;

    public function __construct(){
        echo $_SERVER['REQUEST_URI']."<br>";
        $url = $this->getUrl();
        print_r($url);
        if(array_key_exists($url[0],Router::$defaultController) && count($url)==1){
            $this->currentController = 'public/Views/'.Router::$defaultController[$url[0]];
        }else if(array_key_exists($url[0],Router::$defaultController)){
            if(array_key_exists($url[1],Router::$defaultController)){
                $this->currentController = 'public/Views/'.Router::$defaultController[$url[0]];
            }
        }else if(array_key_exists($url[0],Router::$routes)){
            if(count($url)>2){
                if(in_array($url[1],Router::$routes[$url[0]])){
                    if(file_exists('public/Views/'.$url[0].'/'.$url[1].'/'.$url[2].'.php')){
                        $this->currentController = 'public/Views/'.$url[0].'/'.$url[1].'/'.$url[2].'.php';
                    }else{
                        $this->currentController = 'public/Views/404.php';
                    }
                }else{

                }
            }else{
                $this->currentController = 'public/Views/'.$url[0].'/index.php';
            }
        }else{
            $this->currentController = 'public/Views/404.php';
        }
        require_once($this->currentController);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
          $url = rtrim($_GET['url'], '/');
          $url = filter_var($url, FILTER_SANITIZE_URL);
          $url = explode('/', $url);
          return $url;
        }
    }
}