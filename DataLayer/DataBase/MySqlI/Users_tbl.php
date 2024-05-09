<?php
class User_tbl
{
    public static int $id;
    public static string $name;
    public static string $password;
    public static int $role;

    public static function getId(): int
    {
        return self::$id;
    }

    public static function setId(int $value): void
    {
        self::$id = $value;
    }

    public static function getName(): string
    {
        return self::$name;
    }

    public static function setName(string $value): void
    {
        self::$name = $value;
    }

    public static function getPassword(): string
    {
        return self::$password;
    }

    public static function setPassword(string $value): void
    {
        self::$password = $value;
    }

    public static function getRole(): string
    {
        return self::$role;
    }

    public static function setRole(int $value): void
    {
        self::$role = $value;
    }
}
?>