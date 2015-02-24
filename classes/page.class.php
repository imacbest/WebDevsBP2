<?php
/**
 * @author Thomas
 * @project imacbest.nl
 * @date: 17-2-2015
 * @time: 01:04
 */


class Page {

    private $path = "pages/";
    private $fileType = ".php";
    private $errorFile = "error";
    private $home = "home";


    function __construct() {

    }

    /**
     * @return string
     */
    public function getPage(){
        $page = $_SERVER['REQUEST_URI'];
        if($page == '/WebDevsBP2/' OR $page == "/WebDevsBP2/index.php"){
            return $this->getPath() . $this->getHome() . $this->getFileType();
        }else{
            $urlExplode = explode("?", $page);
            $toPage = explode("&", $urlExplode[1]);
            $toPage = $toPage[0];
            if(file_exists($this->getPath() . $toPage . $this->getFileType())) {
                return $this->getPath() . $toPage . $this->getFileType();
            }else{
                return $this->getPath() . $this->getErrorFile() . $this->getFileType();
            }
        }
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



} 