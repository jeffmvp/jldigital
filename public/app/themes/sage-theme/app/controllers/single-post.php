<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{

    public function fields()
    {
        while(have_posts()) : the_post();
           $content = get_the_content();
           $date = get_the_date( 'M j');
           $ID = get_the_ID();
           $cats = get_the_terms($ID, array( 'category'));
           $catsNames = [];
           $image = get_the_post_thumbnail_url();
           foreach($cats as $cat) {
            $catsNames[] = $cat->name; 
           };
           $implode = implode(", ", $catsNames);
        endwhile;
        return [
            'content' => $content,
            'title' => get_the_title(),
            'date' => $date,
            'cats' => $cats,
            'ID' => $ID,
            'catsNames' => $catsNames,
            'implode' => $implode,
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