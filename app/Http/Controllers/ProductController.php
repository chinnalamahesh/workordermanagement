<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Product;
use App\Workorder;
use Redirect;

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
            return redirect()->back();
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
    		
     public function postAddWorkShop(Request $request )
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
            return Redirect::to($url)->with('success', 'Announcement has been Updated successfully');
	}       
}
