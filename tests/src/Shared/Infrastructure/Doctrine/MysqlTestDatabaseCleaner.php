<?php

namespace App\Tests\src\Shared\Infrastructure\Doctrine;

use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;

use function Lambdish\Phunctional\first;

class MysqlTestDatabaseCleaner
{
    public function __invoke(EntityManagerInterface $entityManager): void
    {
        $connection = $entityManager->getConnection();

        $tables = $this->tables($connection);

        $truncateTablesSql = $this->truncateTables($tables);

        $connection->executeQuery("SET FOREIGN_KEY_CHECKS = 0; %s SET FOREIGN_KEY_CHECKS = 1;" . implode('',$truncateTablesSql));
    }

    private function truncateTables(array $tables): array
    {

        return array_map(fn($table) => sprintf("TRUNCATE TABLE `%s`;",  first($table)),$tables );

/*        $sql_statement = '';
        foreach ($tables as $table){
            $sql_statement .= sprintf("TRUNCATE TABLE `%s`;",  first($table));
        }
        return $sql_statement;*/
    }

    private function tables(Connection $connection): array
    {
        return $connection->executeQuery('SHOW TABLES')->fetchAllAssociative();
    }
}