<?php

class TypeRepository
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
        $query = "SELECT * FROM type_tbl";
        $result = mysqli_query($this->connector(), $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function selectByTypeName(string $typeName): array
    {
        $query = "SELECT * FROM type_tbl WHERE TYP_ID = '$typeName' LIMIT 1";
        $result = mysqli_query($this->connector(), $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row;
    }
    public function insertType($typeName): bool
    {
        $query = "INSERT INTO type_tbl (TYP_NAME) VALUES ('$typeName')";
        if (mysqli_query($this->connector(), $query)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteType(int $userId): bool
    {
        $query = "DELETE FROM type_tbl WHERE TYP_ID = '$userId'";
        if (mysqli_query($this->connector(), $query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>
