<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage_controller extends Controller{
    public function index(){
        // Page rendering
        return view("Home_page_view");
        }
    }
