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
     * @return string
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

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

       /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

     /**
     * @return string
     */
    public function getErrorFile()
    {
        return $this->errorFile;
    }

    /**
     * @param string $errorFile
     */
    public function setErrorFile($errorFile)
    {
        $this->errorFile = $errorFile;
    }

    /**
     * @return string
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param string $home
     */
    public function setHome($home)
    {
        $this->home = $home;
    }

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }



} 