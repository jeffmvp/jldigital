<?php

namespace App;

use Sober\Controller\Controller;

class Hero extends Controller
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
            'background_image' => get_sub_field('background_image'),
            'heading'          => get_sub_field('heading'),
            'subheading'       => get_sub_field('subheading'),
            'hero_type'        => get_sub_field('hero_type')
        ];
    }
}