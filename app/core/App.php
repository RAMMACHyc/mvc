<?php


class App{

    public function splitUrl()
    {
    
    $url = $_GET['url'] ?? 'home'; 
    $url = explode("/",$url);
    return $url;
    }
    
    public function loadController()
    {
        $url = $this->splitUrl();
        $filename = "../app/controllers/".ucfirst($url[0]) .".php";
        if(file_exists($filename)) {
        require $filename;
        }else
        {
            // echo "Error 404";
            $filename = "../app/controllers/_404.php";
            require $filename;
        }
    }
    
    
    }