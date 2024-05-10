<?php

class TextsRepository
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
        $query = "SELECT * FROM write_tbl";
        return Mysqli_query($this->connector(), $query);
    }

    public function selectPublished(): array
    {
        $query = "SELECT * FROM write_tbl WHERE USER_NAME = '$userName' AND USER_PASS = '$passWord'";
        return mysqli_fetch_array(Mysqli_query($this->connector(), $query));

    }

    public function selectByTitle(string $userName): array
    {
        $query = "SELECT * FROM write_tbl WHERE USER_NAME = '$userName' LIMIT 1";
        return Mysqli_query($this->connector(), $query);
    }

    public function updateText( $writeTitle, $writePicture, $writeText, $writeAuthor, $writeStatus, $writeType): bool
    {
        try {
            $query = "UPDATE `write_tbl` SET (`WRITE_TITLE`, `WRITE_PIC`, `WRITE_TEXT`, `WRITE_AUTHOR`, `WRITE_STATUS`, `WRITE_TYPE`) VALUES ('$writeTitle', '$writePicture', '$writeText', '$writeAuthor', '$writeStatus', '$writeType') WHERE `write_tbl`.`WRITE_ID` = 1;";
            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function insertText( $writeTitle, $writePicture, $writeText, $writeAuthor, $writeStatus, $writeType): bool
    {
        try {
            $query = "INSERT INTO `write_tbl` (`WRITE_TITLE`, `WRITE_PIC`, `WRITE_TEXT`, `WRITE_AUTHOR`, `WRITE_STATUS`, `WRITE_TYPE`) VALUES ('$writeTitle', '$writePicture', '$writeText', '$writeAuthor', '$writeStatus', '$writeType');";
            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function deleteUser(int $userId): bool
    {
        try {
            $query = "DELETE FROM write_tbl WHERE USER_ID = '$userId' ";
            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

}

?>