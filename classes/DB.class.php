<?php

class DB {
    private $serverName;
    private $conn;
    private $connectionInfo;

    /**
     * constructor van de database class
     * @param $serverName naam van de server
     * @param $dbName naam van de database
     * @param $UID naam van de databasegebruiker
     * @param $pass
     */
    function __construct($serverName, $dbName, $UID, $pass ) {
        $this->setServerName($serverName);
        $this->setConnectionInfo($dbName, $UID, $pass);
        $this->openDBConnection();
    }

    /**
     *  Connectie naar de database maken
     */
    public function openDBConnection(){
        $this->conn = sqlsrv_connect( $this->serverName, $this->connectionInfo) or die( print_r( sqlsrv_errors(), true));
    }

    /**
     *  connectie naar de datbase sluiten
     */
    public function closeDBConnection(){
        sqlsrv_close($this->conn);
    }

    private function setServerName($serverName){
        $this->serverName = $serverName;
    }

    private function setConnectionInfo($dbName, $UID, $pass){
        $this->connectionInfo = array( "Database"=>$dbName, "UID"=>$UID, "PWD"=>$pass);
    }

    public function getConn(){
        return $this->conn;
    }
}