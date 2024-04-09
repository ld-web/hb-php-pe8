<?php

abstract class Table
{
    public function __construct(
        protected PDO $pdo,
        protected string $name
    ) {
    }

    abstract public function insert(array $data);

    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM " . $this->name);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM " . $this->name . " WHERE id=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
