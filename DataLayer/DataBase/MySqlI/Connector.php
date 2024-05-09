<?php

//------------------| Connection Entities |------------------\\
$dataBaseAddress = 'localhost';
$dataBaseUsername = 'root';
$dataBasePassword = '';
$dataBaseName = 'hobabi_db';
//------------------| Connection Entities |------------------\\

//------------------| Connection String |------------------\\
$connectionString = mysqli_connect($dataBaseAddress, $dataBaseUsername, $dataBasePassword, $dataBaseName);
if (mysqli_connect_errno()) {

    printf('Error has been planted', mysqli_connect_error());

}
//------------------| Connection String |------------------\\

?>