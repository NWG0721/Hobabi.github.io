<?php

class MassageRepository
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
        $query = "SELECT * FROM massage_tbl";
        $result = mysqli_query($this->connector(), $query);
        if (!$result) {
            return [];
        }
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    public function selectByParameter(string $parameter): array
    {   
        $query = "SELECT * FROM massage_tbl WHERE MASSAGER_NAME = '$parameter' OR MASSAGER_EMAIL = '$parameter' OR MASSAGER_TEXT = '$parameter' OR MASSAGE_DATE = '$parameter' LIMIT 1";
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

    public function insertText( $MASSAGER_NAME, $MASSAGER_EMAIL, $MASSAGER_TEXT, $MASSAGE_DATE): bool
    {
        try {
            $query = "INSERT INTO `massage_tbl` (`MASSAGER_NAME`, `MASSAGER_EMAIL`, `MASSAGER_TEXT`, `MASSAGE_DATE`) VALUES ('$MASSAGER_NAME', '$MASSAGER_EMAIL', '$MASSAGER_TEXT', '$MASSAGE_DATE');";
            // echo("massagerName -> $MASSAGER_NAME | massagerEmail -> $MASSAGER_EMAIL | massagerMassage -> $MASSAGER_TEXT |  massageDate -> $MASSAGE_DATE");
            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

    public function deleteUser(int $MASSAGE_ID): bool
    {
        try {
            $query = "DELETE FROM massage_tbl WHERE MASSAGE_ID = '$MASSAGE_ID' ";
            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }

}

?>