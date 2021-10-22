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

    public function home_contact() {
        return view("contact");
    }

    public function home_career() {
        return view("career");
    }


    public function product_blister() {
        return view("products.blister");
    }
    public function product_tray() {
        return view("products.tray");
    }
    public function product_cup() {
        return view("products.cup");
    }
    public function product_lid() {
        return view("products.lid");
    }
    public function product_bottle() {
        return view("products.bottle");
    }




}
