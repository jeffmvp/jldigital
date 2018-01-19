<?php

namespace App;

use Sober\Controller\Controller;

class Faq extends Controller
{

    public function fields()
    {
        while(have_posts()) : the_post();
           $content = get_the_content();
           $ID = get_the_ID();
           $image = get_the_post_thumbnail_url();
        endwhile;
        return [
            'content' => $content,
            'title' => get_the_title(),
            'ID' => $ID,
            'image' => $image
        ];
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