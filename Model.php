<?php

namespace LinkCMS\Modules\Books;

class Model {
    var $author;
    var $amazonid;
    var $comments;
    var $isbn;
    var $readDate;
    var $status;
    var $title;

    public function __construct($data) {
        if ($data) {
            if (is_array($data)) {
                foreach($data as $param=>$value) {
                    $this->{$param} = $value;
                }
            }
        }
    }
}