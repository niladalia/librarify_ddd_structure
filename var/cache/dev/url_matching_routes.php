<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/author' => [
            [['_route' => 'author_controller_get', '_controller' => 'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'author_controller_post', '_controller' => 'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/books' => [[['_route' => 'book_controller_get', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BooksGetController'], null, ['GET' => 0], null, false, false, null]],
        '/api/book' => [[['_route' => 'book_controller_post', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BooksPostController'], null, ['POST' => 0], null, false, false, null]],
        '/api/isbn' => [[['_route' => 'isbn_controller_get', '_controller' => 'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|author/([^/]++)(*:30)'
                    .'|book(?'
                        .'|s/([^/]++)(*:54)'
                        .'|/([^/]++)(?'
                            .'|(*:73)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'author_controller_delete', '_controller' => 'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController'], ['id'], ['DELETE' => 0], null, false, true, null]],
        54 => [[['_route' => 'book_controller_get_id', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BookGetController'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [
            [['_route' => 'book_controller_edit', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BooksPutController'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'book_controller_delete', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'book_controller_patch', '_controller' => 'App\\Books\\Infrastructure\\Controllers\\BooksPatchController'], ['id'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
