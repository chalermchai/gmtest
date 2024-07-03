<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;

class ReportController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        
    }

    public function index()
    {
        return $this->lists();
    }

    public function lists()
    {
        $customer_sale_list = DB::table('customer_sale')->get();

        // print_r($customer_sale_list);
        // exit;

        return View::make('report', array(
            'customer_sale_list' => $customer_sale_list
        ));
    }
}
