<?php

namespace App\FileUploader\Infrastructure;

use App\FileUploader\Domain\FileUploaderInterface;
use League\Flysystem\FilesystemOperator;

class S3FileUploader implements FileUploaderInterface
{

    private $defaultStorage;

    public function __construct(FilesystemOperator $defaultStorage)
    {
        $this->defaultStorage = $defaultStorage;
    }

    public function upload(string $extension,string $filename,string $data)
    {
        $this->defaultStorage->write("S3_".$filename, $data);
    }
}
