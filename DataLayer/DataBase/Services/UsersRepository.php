<?php
include ("./../Repositories/IUsersRepository.php");
include ("./../MySqlI/Connector.php");
include ("./../MySqlI/Users_tbl.php");

class UsersRepository implements IUsersRepositoy
{

    private mysqli $connectionString;

    public function __construct(mysqli $connection)
    {
        $connectionString = $connection;
    }

    public function selectAll(string $connectionString): array
    {
        $query = "SELECT * FROM users_tbl";
        return Mysqli_query($connectionString, $query);
    }

    public function selectByUserName(string $connectionString, int $UserName): User_tbl
    {
        $query = "SELECT * FROM users_tbl WHERE USER_NAME = $UserName LIMIT 1";
        return Mysqli_query($connectionString, $query);
    }

    public function updateUser(string $connectionString, User_tbl $user, $userID): bool
    {
        try {
            $query = "UPDATE users_tbl SET(USER_NAME = $user.getName ,USER_PASS = $user.getPassword , USER_ROLE = $user.getRole) WHERE USER_ID = $userID.getId ";
            mysqli_query($connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function insertUser(string $connectionString, User_tbl $user): bool
    {
        try {
            $query = "INSERT INTO users_tbl (USER_NAME ,USER_PASS, USER_ROLE) VALUES ($user.getName ,$user.getPassword,$user.getRole)";
            mysqli_query($connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function deleteUser(string $connectionString, int $userId): bool
    {
        try {
            $query = "DELETE FROM users_tbl WHERE USER_ID = $userId ";
            mysqli_query($connectionString, $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

}

?>