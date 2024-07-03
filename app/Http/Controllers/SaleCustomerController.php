<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;
use View;
use DB;

class SaleCustomerController extends BaseController
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

        return View::make('customer_sale_list', array(
            'customer_sale_list' => $customer_sale_list
        ));
    }

    public function add()
    {
        $customer_list = DB::table('customer')->get();

        return View::make('customer_sale_add', array(
            'customer_list' => $customer_list
        ));
    }

    public function do_add(Request $reqest)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer_sale')->insert(array(
            'Ref_Customer_Id'   => $reqest->ref_customer_id
            ,'Product_Id'       => $reqest->product_id
            ,'Quantity'         => $reqest->quantity
            ,'Price'            => $reqest->price
            ,'Discount_1'       => $reqest->discount_1
            ,'Discount_2'       => $reqest->discount_2
        ));

        return Redirect::to(url('sale'));
    }

    public function edit($id)
    {
        $customer_list = DB::table('customer')->get();

        $customer_sale_detail = DB::table('customer_sale')->where('Sale_Id', '=', $id)->get();

        if(!empty($customer_sale_detail))
        {
            $customer_sale_detail = reset($customer_sale_detail);
            $customer_sale_detail = reset($customer_sale_detail);
        }

        // print_r($customer_sale_detail);
        // exit;

        return View::make('customer_sale_edit', array(
            'customer_list'         => $customer_list
            ,'customer_sale_detail' => $customer_sale_detail
        ));
    }

    public function do_edit($id, Request $reqest)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer_sale')->where('Sale_Id', $id)->update(array(
            'Ref_Customer_Id'  => $reqest->ref_customer_id
            ,'Product_Id'      => $reqest->product_id
            ,'Quantity'        => $reqest->quantity
            ,'Price'           => $reqest->price
            ,'Discount_1'      => $reqest->discount_1
            ,'Discount_2'      => $reqest->discount_2
        ));

        return Redirect::to(url('sale'));
    }

    public function delete($id)
    {
       // print_r($_POST);
       // exit;

        DB::table('customer_sale')->where('Sale_Id', $id)->delete();

        return Redirect::to(url('sale'));
    }
}
