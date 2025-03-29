<?php

namespace App\Http\Controllers;

class IndexController extends Controller {
    public static function index() {
        return view("pages.index");
    }

    public static function courses() {
        return view("pages.courses");
    }

    public static function departments() {
        return view("pages.departments");
    }

    public static function contact() {
        return view("pages.contact");
    }
}
