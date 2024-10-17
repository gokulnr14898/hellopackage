<?php

namespace develop\helloword\Http\Controllers;

use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index() {
        return "Hello from the package controller!";
    }
}