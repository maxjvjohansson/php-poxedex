<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class QueryBuilder
{
    private string $query;

    public function __construct(
        private PDO $database
    ) {}

    public function select(array $columns = ['*']): static
    {
        $this->query = sprintf('SELECT %s', implode(', ', $columns));

        return $this;
    }

    public function from(string $table): static
    {
        $this->query = sprintf('%s FROM %s', $this->query, $table);

        return $this;
    }

    public function where(string $column, string $operator, mixed $value): static
    {
        $this->query .= sprintf(' WHERE %s %s %s', $column, $operator, $value);

        return $this;
    }

    public function groupBy(string $column): static
    {
        $this->query .= sprintf(' GROUP BY %s', $column);
        return $this;
    }

    public function orderBy(string $column, string $direction): static
    {
        $this->query .= sprintf(' ORDER BY %s %s', $column, $direction);

        return $this;
    }

    public function limit(int $count): static
    {
        $this->query .= sprintf(' LIMIT %d', $count);

        return $this;
    }

    public function first(): object
    {
        $result = $this->limit(1)->get();
        return reset($result);
    }

    public function get(): array
    {
        $statement = $this->database->prepare($this->query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS) ?: [];
    }
}
