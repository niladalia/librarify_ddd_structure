<?php

namespace App\Books\Infrastructure\Uploader;

use App\Books\Domain\BookFileUploaderInterface;
use League\Flysystem\FilesystemOperator;

class LocalBookFileUploader implements BookFileUploaderInterface
{

    private $defaultStorage;

    public function __construct(FilesystemOperator $defaultStorage)
    {
        $this->defaultStorage = $defaultStorage;
    }

    public function upload(string $extension,string $filename,string $data)
    {
        $this->defaultStorage->write("local_".$filename, $data);
    }
}
