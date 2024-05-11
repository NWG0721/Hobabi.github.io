<?php

class TextsRepository
{

    private function connector()
    {
        $connectionString = mysqli_connect("localhost", "root", "", "hobabi_db");
        return $connectionString;
        if (mysqli_connect_errno()) {
            echo ("<h1>sadg!</h1>");
        }
    }

    public function selectAll(): array
    {
        $query = "SELECT * FROM write_tbl";
        $result = mysqli_query($this->connector(), $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }


    public function selectPublished(): array
    {
        $query = "SELECT * FROM write_tbl WHERE WRITE_STATUS = '69'";
        $result = mysqli_query($this->connector(), $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    public function selectById($id): array
    {
        $query = "SELECT * FROM write_tbl WHERE WRITE_ID = '$id' LIMIT 1";
        $result = mysqli_query($this->connector(), $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            return [];
        }
    }

    public function updateText($writeID,$writeTitle, $writePicture, $writeText, $writeAuthor, $writeStatus, $writeType, $WRITE_DATE): bool
    {
        try {
            $query = "UPDATE `write_tbl` SET `WRITE_TITLE`='$writeTitle', `WRITE_PIC`='$writePicture', `WRITE_TEXT`='$writeText', `WRITE_AUTHOR`='$writeAuthor', `WRITE_STATUS`='$writeStatus', `WRITE_TYPE`='$writeType', `WRITE_DATE`='$WRITE_DATE' WHERE `WRITE_ID` = '$writeID'";
            mysqli_query($this->connector(), $query);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function insertText($writeTitle, $writePicture, $writeText, $writeAuthor, $writeStatus, $writeType, $WRITE_DATE): bool
    {
        try {
            $query = "INSERT INTO `write_tbl` (`WRITE_TITLE`, `WRITE_PIC`, `WRITE_TEXT`, `WRITE_AUTHOR`, `WRITE_STATUS`, `WRITE_TYPE`,`WRITE_DATE`) VALUES ('$writeTitle', '$writePicture', '$writeText', '$writeAuthor', '$writeStatus', '$writeType','$WRITE_DATE');";

            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function deleteText(int $userId): bool
    {
        try {
            $query = "DELETE FROM write_tbl WHERE WRITE_ID = '$userId' ";

            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

}

?>