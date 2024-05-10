<?php

class UsersRepository
{
    private function connector()
    {
        $connectionString = mysqli_connect("localhost", "root", "", "hobabi_db");
        return $connectionString;
        if (mysqli_connect_errno()) {
            echo ("sadg");
        }
    }


    public function selectAll(): array
    {
        $query = "SELECT * FROM users_tbl";
        return Mysqli_query(connector(), $query);
    }

    public function userChecker(string $userName, string $passWord): array
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = '$userName' AND USER_PASS = '$passWord'";
            $res = mysqli_fetch_array(Mysqli_query($this->connector(), $query));
            echo("-----------> ".$res);
            if ($res != null) {
                return $res;
            }
            else
            {
                return null;
            }

    }

    public function selectByUserName(string $userName): array
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = '$userName' LIMIT 1";
        return Mysqli_query($this->connectionString, $query);
    }

    public function updateUser($userID, $userName, $userPass, $userRole): bool
    {
        try {
            $query = "UPDATE users_tbl SET(USER_NAME = '$userName' ,USER_PASS = '$userPass' , USER_ROLE = '$userRole') WHERE USER_ID = '$userID'";
            mysqli_query($this->connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function insertUser($userName, $userPass, $userRole): bool
    {
        try {
            $query = "INSERT INTO users_tbl (USER_NAME ,USER_PASS, USER_ROLE) VALUES ('$userName' ,'$userPass','$userRole')";
            mysqli_query($this->connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function deleteUser(int $userId): bool
    {
        try {
            $query = "DELETE FROM users_tbl WHERE USER_ID = '$userId' ";
            mysqli_query($this->connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

}

?>