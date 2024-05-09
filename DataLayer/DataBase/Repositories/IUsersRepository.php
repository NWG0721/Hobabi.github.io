<?php
include("./../MySqlI/Users_tbl.php");
interface IUsersRepositoy
{
    public function selectAll(string $connectionString): array;

    public function selectByUserName(string $connectionString, int $UserName): User_tbl;

    public function updateUser(string $connectionString, User_tbl $user,$userID): bool;

    public function insertUser(string $connectionString, User_tbl $user): bool;

    public function deleteUser(string $connectionString, int $userId): bool;
}

?>