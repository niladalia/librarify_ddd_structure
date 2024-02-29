<?php

namespace App\FileUploader\Application;

use App\Books\Application\Dto\BookDto;
use App\FileUploader\Domain\FileUploaderInterface;
use League\Flysystem\FilesystemOperator;

class FileUploaderS3 implements FileUploaderInterface
{
    /*
    Aquest es un servei que s'encarrega de guardar els fitxers en local pero amb el prefix S3. Serveix per a practicar
    la injecció de dependencies.
    */
    private $defaultStorage;

    public function __construct(FilesystemOperator $defaultStorage)
    {
        $this->defaultStorage = $defaultStorage;
    }

    public function uploadFile(BookDto $bookDto): string
    {
        $base64File = $bookDto->base64Image;
        $extension = explode('/', mime_content_type($base64File))[1];
        $data = explode(',', $base64File);
        $filename = sprintf('%s.%s', uniqid('S3_book_', true), $extension);
        $this->defaultStorage->write($filename, base64_decode($data[1]));
        return $filename;
    }
}
