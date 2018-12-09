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


        return \View::make('index.index',[
            'pageTitle'       => 'test page'
        ]);
    }
}