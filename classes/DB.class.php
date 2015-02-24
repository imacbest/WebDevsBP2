<?php
/**
 * Project: WebDevsBP2
 * User: Thomas
 * Date: 24-2-2015
 * Time: 17:57
 */

class DB {
    private $serverName;
    private $conn;
    private $connectionInfo;

    function __construct($serverName, $dbName, $UID, $pass ) {
        $this->setServerName($serverName);
        $this->setConnectionInfo($dbName, $UID, $pass);
    }

    public function openDBConnection(){
        $this->conn = sqlsrv_connect( $this->serverName, $this->connectionInfo) or die( print_r( sqlsrv_errors(), true));
    }
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