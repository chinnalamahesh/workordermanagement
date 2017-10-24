<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Product;
use App\Workorder;
use Redirect;
use App\Orderstatus;

class ProductController extends Controller
{

	public function getHome()
	{
		$product = Product::all();
        return View('home', compact('product'));
	}
	public function getAddProduct()
	{
		return view ('add-products');
	}
	public function postAddProduct(Request $request )
	{
			$product              = new Product;
            $product->product_id  = $request->get('product_id');
            $product->name        = $request->get('name');
            $product->weight      = $request->get('weight');
            $product->length      = $request->get('length');
            $product->price       = $request->get('price');
            $product->description = $request->get('description');
            $product->save();
            $url = url('home');
            return Redirect::to($url)->with('success', 'Product has been added successfully');
	}


	public function getWorkOrder()
	{
		$product = Product::all();
		return view ('workorder', compact('product'));
	}

	public function getWorkOrderDetails(Request $request, $id)
	{
		
		$product = Product::whereId($id)->first();
		return view ('work-order-details', compact('product'));	
	}
    		
     public function postAddWorkOrder(Request $request )
	{
			$workorder              			= new Workorder;
            $workorder->product_id  			= $request->get('product_id');
            $workorder->order_date           	= $request->get('order_date');
            $workorder->start_date          	= $request->get('start_date');
            $workorder->end_date            	= $request->get('end_date');
            $workorder->workorder_description	= $request->get('workorder_description');
            $workorder->product_name            = $request->get('name');
            $workorder->quantity                = $request->get('quantity');
            $workorder->price                   = $request->get('price');
            $workorder->total_cost             = $request->get('total_price');
            $workorder->save();
            $url = url('home');
            return Redirect::to($url)->with('success', 'Workorder has been added successfully');
	} 

	public function getAddWorkshop()
	      {
	      	return view('add-workshop');
	      } 

	public function postAddWorkshop(Request $request)
	      {
	        $add              			= new Orderstatus;
            $add->work_shop_number  			= $request->get('work_shop_number');
            $add->workorders_pending           	= $request->get('workorders_pending');
            $add->workorder_completed          	= $request->get('workorder_completed');
            $add->save();
            $url = url('home');
            return Redirect::to($url)->with('success', 'Workshop has been Updated successfully');
	       }
	public function getWorkOrderStatus()
	       {
	       	$orderStatus = Orderstatus::all();
	       	return view('work_order_status', compact('orderStatus') );
	       }       

}
