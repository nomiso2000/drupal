<?php

namespace App;

class Database {
    private \PDO $pdo;

    public function __construct(string $host, string $user, string $pass, string $dbname)
    {
        $this->pdo = new \PDO("mysql:dbname=${dbname};host=${host}", $user, $pass);
    }

    public function query(string $query, array $params = []) {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}