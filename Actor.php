<?php

namespace LinkCMS\Modules\Books;

use LinkCMS\Actor\Core;
use LinkCMS\Actor\Display;
use LinkCMS\Actor\Route as Router;

class Actor {
    public static function register() {
        Core::add_menu_item('books', 'Books', '/manage/books');
        Display::add_template_directory(__DIR__ . '/templates');
        Router::add_route(['LinkCMS\Modules\Books\Route', 'do_routes']);
    }
}