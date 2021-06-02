<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home_about() {
        return view("about");
    }

    public function home_product() {
        return view("product");
    }



}
