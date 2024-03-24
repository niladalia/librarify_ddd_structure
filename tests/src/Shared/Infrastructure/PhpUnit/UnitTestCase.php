<?php

namespace App\Tests\src\Shared\Infrastructure\PhpUnit;

use App\Tests\src\Shared\Infrastructure\Doctrine\MysqlTestDatabaseCleaner;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UnitTestCase extends KernelTestCase
{
    protected function setUp(): void
    {
        /*
         * $entityManager = self::getContainer()->get(EntityManager::class);
         * $cleaner =  new MysqlTestDatabaseCleaner();
         * $cleaner->__invoke($entityManager);
         */
	}

    protected function tearDown(): void
    {
      //  $arranger = new MoocEnvironmentArranger($this->service(EntityManager::class));

        //$arranger->close();

        //parent::tearDown();
    }

   /*
    protected function kernelClass(): string
    {
        return MoocBackendKernel::class;
    }
    */
}