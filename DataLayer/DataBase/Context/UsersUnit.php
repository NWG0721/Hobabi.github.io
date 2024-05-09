<?php

include ("./../MySqlI/Connector.php");

$connector = new Connector();

$connetionString = $connector->getConnectionString();

class UsersUnit
{
    private IUsersRepositoy $_usersRepositoryl;

    public function UsersRepositoy()
    {

        if (!$this->_usersRepositoryl) {
            $this->_usersRepositoryl = new UsersRepository($this->connetionString);
        }
        return $this->_usersRepositoryl;
    }

}
?>