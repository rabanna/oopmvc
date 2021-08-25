<?php
namespace Core;

use Core\Config;

class View{
    private $siteTitle = '';
    private $content = []; 
    private $currentContent;
    private $buffer;
    private $layout;
    private $defaultViewPath;

    public function __construct($path = ''){
        $this->defaultViewPath = $path;
        $this->siteTitle = Config::get('default_site_title');
    }

    public function setSiteTitle($siteTitle){
        $this->siteTitle = $siteTitle;
    }

    public function getSiteTitle(){
        return $this->siteTitle;
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function render($path = ''){
        if(empty($path)){
            $path = $this->defaultViewPath;
        }
   

        $layoutPath = PROOT . DS .  'app' . DS . 'views' . DS . 'layouts' . DS . $this->layout . '.php';
        $fullPath = PROOT . DS . 'app' . DS . 'views' . DS . $path . '.php';
        
        if(!file_exists($fullPath)){
            throw new \Exception("The view \"{$path}\" does not exist");
            
        }

        if(!file_exists($layoutPath)){
            throw new \Exception("The layout \"{$this->layout}\" does not exist");
            
        }
        include($fullPath);
        include($layoutPath);
    }

    public function start($key){
        if(empty($key)){
            throw new \Exception("Your start method requires a valid key");   
        }

        $this->buffer = $key;
        ob_start();
    }

    public function end(){
        if(empty($this->buffer)){
            throw new \Exception("You must first run start method"); 
        }
        $this->content[$this->buffer] = ob_get_clean();
        $this->buffer = null;
    }

    public function content($key){
        if(array_key_exists($key, $this->content)){
            echo $this->content[$key];
        }
    }


    public function partial($path){
        $fullPath = PROOT . DS . 'app' . DS . 'views' . DS . $path . '.php';
        if(file_exists($fullPath)){
            include($fullPath);
        }
    }
}