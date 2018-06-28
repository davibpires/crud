<?php
/**
 * Created by PhpStorm.
 * User: Davi
 * Date: 25/06/2018
 * Time: 22:13
 */

namespace crud\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

}