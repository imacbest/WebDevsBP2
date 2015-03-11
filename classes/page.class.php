<?php

class Page {

    private $path = "pages/";
    private $fileType = ".php";
    private $errorFile = "error";
    private $home = "nieuws";
    private $currentPage;


    function __construct() {

    }

    /**
     * Functie haalt de pagina op vanuit de link en geeft de goede pagina terug die wordt geïncludeerd
     * @return pagina die opgehaald moet worden
     */
    public function getPage(){
        $page = $_SERVER['REQUEST_URI'];
        $toPage = "";
        if($page == '/WebDevsBP2/' OR $page == "/WebDevsBP2/index.php"){
            $toPage = $this->getHome();
        }else{
            $urlExplode = explode("?", $page);
            $page = explode("&", $urlExplode[1])[0];
            if(file_exists($this->getPath() .$page . $this->getFileType())) {
                $toPage = $page;
            }else{
                $toPage = $this->getErrorFile();
            }
        }
        $this->currentPage = $toPage;
        return $this->getPath().$toPage . $this->getFileType();
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    public function getErrorFile()
    {
        return $this->errorFile;
    }

    public function setErrorFile($errorFile)
    {
        $this->errorFile = $errorFile;
    }

    public function getHome()
    {
        return $this->home;
    }

    public function setHome($home)
    {
        $this->home = $home;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }



} 