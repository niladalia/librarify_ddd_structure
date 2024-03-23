<?php

namespace App\Books\Domain;

interface BookFileUploaderInterface
{
    /**
     * Obliguem a pasar un BookDto ja que si en el futur en comptes d'utilitzar base64, rebem un altre tipus de codificació,
     * nomes tindrem que cambiar l'implementacio en el servei i agregar el nou tipus de dades al DTO. O per exemple si l'endema volem implementar un servei
     * que puji a S3 i aquest espera un altre tipus de dades diferent a base64, simplement tindrem que modificar el DTO.
     * Pero en cap cas tocarem el cas d'us ni el controlador.
     */
    public function upload(string $extension,string $filename,string $data);
}
