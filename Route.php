<?php

namespace LinkCMS\Modules\Books;

use \Flight;

use LinkCMS\Actor\Config;
use LinkCMS\Actor\Display;
use LinkCMS\Actor\Notify;
use LinkCMS\Actor\User;
use LinkCMS\Actor\Route as Router;
use LinkCMS\Model\User as UserModel;

class Route {
    public static function do_routes() {
        Flight::route('GET /manage/books', function() {
            User::is_authorized(UserModel::USER_LEVEL_AUTHOR);
            $books = Controller::load_all();
            Display::load_page('books/manage/index.twig', ['books' => $books]);
        });
    }
}