<?php
declare (strict_types = 1);
namespace app;

class QueryBuilder
{
    private string $query;
    protected $pdo;
    public function __construct($pdo)
    {   
        $this->pdo=$pdo;
    }

    public function getAll() : array
    {
        $statement = $this->pdo->prepare("SELECT * FROM movies");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}