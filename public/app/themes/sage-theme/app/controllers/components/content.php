<?php

namespace App;

use Sober\Controller\Controller;

class Content extends Controller
{
    private $layout;

    public function __construct($layout)
    {
        return $this->layout = $layout;
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function getFields()
    {
        return [
            'content' => get_sub_field('content')
        ];
    }
}