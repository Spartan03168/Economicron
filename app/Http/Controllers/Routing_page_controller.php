<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routing_page_controller extends Controller{
    //Routing page
    public function index(){
        return view('Page_router_view');
        }
    /**
     * Routing paths
     */
    public function routing_path_saving_calculations(){
        return redirect()->route("Savings_math.index");
        }

    public function routing_path_tax_math(){
        return redirect()->route("Tax_deduction_calculation.index");
        }

    public function routing_path_compound_interest(){
        return redirect()->route("Compound_interest.index");
        }

    public function routing_path_down_payment(){
        return redirect()->route("Down_payment_calculation.index");
        }

    }
