<?php

namespace App;

use Sober\Controller\Controller;

class Page extends Controller
{
    public function sections()
    {
        $sections = [];

        if (have_rows('flexible'))
        {
            while (have_rows('flexible'))
            {
                the_row();

                $layout = get_row_layout();
                $newSection = new $layout($layout);

                $sections[] = (object) [
                    'row_layout' => $newSection->getLayout(),
                    'fields'     => $newSection->getFields()
                ];
            }
        }

        return $sections;
    }
    public function header() {
        $header = new Header();
        return $header->getFields();
    }

    public function footer() {
        $footer = new Footer();
        return $footer->getFields();
    }
    
}