<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;

class ItemsController extends Controller
{
    //
    public function map(){
 
		$items = Item::all();
                //$items = Item::distance(0.1,'45.05,7.6667')->get();
 
		return view('items.map')->with(['items'=>$items]);
 
	}
}
