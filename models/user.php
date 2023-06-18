<?php
require_once("db.php");

class User
{
    public static function getUsers()
    {
        $pdo = getConnection();

        $statement = $pdo->prepare("select * from users;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function createUser(string $username, string $email)
    {
        $pdo = getConnection();

        $statement = $pdo->prepare("insert into users (name, email) values (:name, :email);");
        $statement->execute([
            'name' => $username,
            'email' => $email
        ]);

        return $pdo->lastInsertId();
    }
}
