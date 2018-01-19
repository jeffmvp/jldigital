<?php

namespace App;

use Sober\Controller\Controller;

class Footer extends Controller
{
    public function getFields() {
        return [
            'logo' => get_field('logo', 'options'),
            'params' => array(
                'menu' => 'Main'
            ),
            'paramsSub' => array(
                'menu' => 'Sub'
            )
        ];
    }
  
}