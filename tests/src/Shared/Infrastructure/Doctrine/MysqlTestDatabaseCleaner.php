<?php

namespace App\Tests\src\Shared\Infrastructure\Doctrine;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;

class MysqlTestDatabaseCleaner
{
    public function __invoke(EntityManagerInterface $entityManager): void
    {
        $connection = $entityManager->getConnection();

        $tables = $this->tables($connection);

        $truncateTablesSql = $this->truncateTables($tables);

        $connection->executeQuery($truncateTablesSql);
    }

    private function truncateTables(array $tables): string
    {
        $sql_statement = '';
        foreach ($tables as $table){
            $sql_statement =+ sprintf("TRUNCATE TABLE `%s`",$table);
        }

        return $sql_statement;
    }
    private function tables(Connection $connection): array
    {
        return $connection->executeQuery('SHOW TABLES')->fetchAllAssociative();
    }
}