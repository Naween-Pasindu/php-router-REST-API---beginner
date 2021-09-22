<?php
class Router{
    protected static $defaultController = array("public"=>"index.php","test"=>"test.php");
    //protected static $mainViews = array("Admin","DisasterOffi");
    protected $currentController;

    public function __construct(){
        echo $_SERVER['REQUEST_URI']."<br>";
        $url = $this->getUrl();
        print_r($url);
        if(count($url)==1){
            echo "this 1<br>";
            if(array_key_exists($url[0],Router::$defaultController)){
                $this->currentController = 'public/Views/'.Router::$defaultController[$url[0]];
            }else if(is_dir('public/Views/'.$url[0])) {
                $this->currentController = 'public/Views/'.$url[0].'/index.php';
            }else{
                $this->currentController = 'public/Views/404.php';
            }
        }else{
            echo "this 2<br>";
            if(file_exists('public/Views/'.$url[0].'/'.$url[1].'.php')){
                $this->currentController = 'public/Views/'.$url[0].'/'.$url[1].'.php';
            }           
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