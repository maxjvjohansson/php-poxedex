<?php

declare(strict_types=1);

namespace App\Database;

use PDO;
use App\Exceptions\NotFoundHttpException;

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
        $this->query = sprintf('%s WHERE %s %s %s', $this->query, $column, $operator, $value);

        return $this;
    }

    public function groupBy(string $column): static
    {
        $this->query = sprintf('%s GROUP BY %s', $this->query, $column);
        return $this;
    }

    public function orderBy(string $column, string $direction): static
    {
        $this->query = sprintf('%s ORDER BY %s %s', $this->query, $column, $direction);

        return $this;
    }

    public function limit(int $count): static
    {
        $this->query = sprintf('%s LIMIT %d', $this->query, $count);

        return $this;
    }

    public function first(): object
    {
        $result = $this->limit(1)->get();

        if (empty($result)) {
            throw new NotFoundHttpException("404 Pokémon Not Found");
        }

        return reset($result);
    }

    public function get(): array
    {
        $statement = $this->database->prepare($this->query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS) ?: [];
    }
}
