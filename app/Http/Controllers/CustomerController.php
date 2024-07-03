<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;

class CustomerController extends BaseController
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
        $customer_list = DB::table('customer')->get();

        // print_r($customer_list);
        // exit;

        return View::make('customer_list', array(
            'customer_list' => $customer_list
        ));
    }

    public function add()
    {
        return View::make('customer_add');
    }

    public function do_add(Request $reqest)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer')->insert(array(
            'Birthday'      => $reqest->birthday
            ,'Percent_1'    => $reqest->percent_1
            ,'Percent_2'    => $reqest->percent_2
        ));

        return Redirect::to(url('customer'));
    }

    public function edit($id)
    {
        $customer_detail = DB::table('customer')->where('Customer_Id', '=', $id)->get();

        if(!empty($customer_detail))
        {
            $customer_detail = reset($customer_detail);
            $customer_detail = reset($customer_detail);
        }

        // print_r($customer_detail);
        // exit;

        return View::make('customer_edit', array(
            'customer_detail' => $customer_detail
        ));
    }

    public function do_edit($id, Request $reqest)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer')->where('Customer_Id', $id)->update(array(
            'Birthday'      => $reqest->birthday
            ,'Percent_1'    => $reqest->percent_1
            ,'Percent_2'    => $reqest->percent_2
        ));

        return Redirect::to(url('customer'));
    }

    public function delete($id)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer')->where('Customer_Id', $id)->delete();

        return Redirect::to(url('customer'));
    }
}
