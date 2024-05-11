<?php

class UsersRepository
{
    private function connector()
    {
        $connectionString = mysqli_connect("localhost", "root", "", "hobabi_db");
        if (mysqli_connect_errno()) {
            echo "Error: Unable to connect to MySQL. " . mysqli_connect_error();
            exit;
        }
        return $connectionString;
    }

    
    public function selectAll(): array
    {
        $query = "SELECT * FROM users_tbl";
        return mysqli_query($this->connector(), $query);
    }

    public function userChecker(string $userName, string $passWord): array
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = '$userName' AND USER_PASS = '$passWord'";
        $result = mysqli_query($this->connector(), $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    }
    

    public function selectByUserName(string $userName): array
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = '$userName' LIMIT 1";
        $result = mysqli_query($this->connector(), $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    }
    public function selectByParameters(string $Parameter): array
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = '$Parameter' OR USER_ID = '$Parameter' LIMIT 1";
        $result = mysqli_query($this->connector(), $query);
        
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;
    }
    

    public function updateUser($userID, $userName, $userPass, $userRole): bool
    {
        $query = "UPDATE users_tbl SET USER_NAME = '$userName', USER_PASS = '$userPass', USER_ROLE = '$userRole' WHERE USER_ID = '$userID'";
        if (mysqli_query($this->connector(), $query)) {
            return true;
        } else {
            return false;
        }
    }

    public function insertUser($userName, $userPass, $userRole): bool
    {
        $query = "INSERT INTO users_tbl (USER_NAME, USER_PASS, USER_ROLE) VALUES ('$userName', '$userPass', '$userRole')";
        if (mysqli_query($this->connector(), $query)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser(int $userId): bool
    {
        $query = "DELETE FROM users_tbl WHERE USER_ID = '$userId'";
        if (mysqli_query($this->connector(), $query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>
