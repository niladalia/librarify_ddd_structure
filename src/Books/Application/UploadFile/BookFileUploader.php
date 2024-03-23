<?php

namespace App\Books\Application\UploadFile;

use App\Books\Application\Dto\BookDto;
use App\Books\Domain\BookFileUploaderInterface;

class BookFileUploader
{
    public function __construct(private BookFileUploaderInterface $fileUploaderInterface) {}

    public function __invoke(BookDto $bookDto): string
    {
        $base64File = $bookDto->base64Image;
        $extension = explode('/', mime_content_type($base64File))[1];
        $data = explode(',', $base64File);
        $filename = sprintf('%s.%s', 'book_'. preg_replace('/\s+/', '_', $bookDto->title), $extension);

        $this->fileUploaderInterface->upload($extension,$filename, base64_decode($data[1]));
        return $filename;
    }
}
