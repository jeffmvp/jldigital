<?php

namespace App;

use Sober\Controller\Controller;

class Slider extends Controller
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

    public function renderFields()
    {
        $items = get_sub_field('slides');
        $processedItems = [];
        
        foreach($items as $item) {
            $processedItems[] = (object) $item;
        }

        return $processedItems;
    }

    public function getFields()
    {
        return [
            'items' => $this->renderFields()
        ];
    }
}