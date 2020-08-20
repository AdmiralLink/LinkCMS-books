<?php

namespace LinkCMS\Modules\Books;

use LinkCMS\Controller\Database;

class Controller extends Database {
    static $dbTable = 'books';
    static $fields = ['title', 'author', 'isbn', 'amazonid', 'comments', 'readDate'];

    public static function load_all($offset=false, $limit=20, $orderBy='id DESC') {
        $results = parent::load_all($offset, $limit, $orderBy);
        if ($results) {
            $books = [];
            foreach ($results as $bookData) {
                $book = new Model($bookData);
                array_push($books, $book);
            }
            return $books;
        } else {
            return false;
        }
    }
}