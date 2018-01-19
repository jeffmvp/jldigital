<?php

namespace App;

use Sober\Controller\Controller;

class error404 extends Controller
{

    public function header() {
        $header = new Header();
        return $header->getFields();
    }

    public function footer() {
        $footer = new Footer();
        return $footer->getFields();
    }
    
}