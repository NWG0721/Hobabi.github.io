<?php

class ContactsRepository
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
        $query = "SELECT * FROM `contents_tbl`";
        $result = mysqli_query($this->connector(), $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function updateContents($CONTENTS_ID, $CONTENTS_FOOTER, $CONTENTS_FEEDER1, $CONTENTS_HEADPIC, $CONTENTS_FEEDER2, $CONTENTS_FEEDER3, $CONTENTS_FOOTER1, $CONTENTS_FOOTER2, $CONTENTS_FOOTER3): bool
    {
        try {
            $query = "UPDATE `contents_tbl` 
          SET 
            `CONTENTS_FOOTER` = '$CONTENTS_FOOTER',
            `CONTENTS_FEEDER1` = '$CONTENTS_FEEDER1',
            `CONTENTS_HEADPIC` = '$CONTENTS_HEADPIC',
            `CONTENTS_FEEDER2` = '$CONTENTS_FEEDER2',
            `CONTENTS_FEEDER3` = '$CONTENTS_FEEDER3',
            `CONTENTS_FOOTER1` = '$CONTENTS_FOOTER1',
            `CONTENTS_FOOTER2` = '$CONTENTS_FOOTER2',
            `CONTENTS_FOOTER3` = '$CONTENTS_FOOTER3'
          WHERE 
            `CONTENTS_ID` = $CONTENTS_ID";

            mysqli_query($this->connector(), $query);
            return true;

        } catch (mysqli_sql_exception $e) {

            return false;

        }
    }
}

?>