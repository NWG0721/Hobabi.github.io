<?php
class Connector
{

    //------------------| Connection Entities |------------------\\
    private $dataBaseAddress = 'localhost';
    private $dataBaseUsername = 'root';
    private $dataBasePassword = '';
    private $dataBaseName = 'hobabi_db';
    //------------------| Connection Entities |------------------\\
    private $connectionString;

    private function connectionMaker()
    {
        $this->connectionString = mysqli_connect($this->dataBaseAddress, $this->dataBaseUsername, $this->dataBasePassword, $this->dataBaseName);
    }
    public function getConnectionString()
    {
        return $this->connectionString;
    }

}
?>