<?php
/**
 * Created by PhpStorm.
 * User: andybleach
 * Date: 09/12/2018
 * Time: 17:55
 */

namespace App\Http\Controllers;


class IndexController
{
    public function index()
    {
        $page = file_get_contents('https://members.musical-u.com/training/planning/roadmaps/');



        return \View::make('index.index',[
            'pageTitle'       => 'test page',
            'pageContent'       => $page
        ]);
    }
}