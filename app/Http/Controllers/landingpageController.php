<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\customers;
use App\Models\DelevaryCharge;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\productgallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;
use Image;

class landingpageController extends Controller
{

    // landing_product
    function landing_product($slug){
        $products = Product::where('slug', $slug)->first();
        $products_gallery = productgallery::where('product_id', $products->id)->get();
        return view('landingpage.secondpage', [
            'products'=>$products,
            'products_gallery'=>$products_gallery,
        ]);
    }


    // landing_order_store
    function landing_order_store(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required',
            'color' => 'required|array|min:1',
            'color.*' => 'string',
        ]);

        $lastOrder = Order::orderBy('id', 'desc')->first();
        if ($lastOrder) {
            $lastOrderId = $lastOrder->order_id;
            $lastOrderNumber = intval(substr($lastOrderId, 4));
        } else {
            $lastOrderNumber = 0;
        }
        $newOrderNumber = $lastOrderNumber + 1;
        $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

        $district = ($request->shipping_cost == 60) ? 'Dhaka' : 'Outside Dhaka';

        Billingdetails::insert([
            'order_id' => $order_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'district' => $district,
            'note' => $request->note,
            'created_at' => Carbon::now(),
        ]);

        if($request->radio_btn == 1){
            $price = $request->price;
        }

        $subtotal = $price * $request->quantity;

        Order::insert([
            'order_id' => $order_id,
            'sub_total' => $subtotal,
            'delivery_charge' => $request->shipping_cost,
            'total' => $subtotal + $request->shipping_cost,
            'color' => implode(',', $request->color),
            'landing' => 1,
            'created_at' => Carbon::now(),
        ]);

        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'attribute_id' => $request->attribute_id,
            'inventory_id' => $request->inventory_id,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Order Confirm Successfully');
    }


     // fashion_product
     function fashion_product(){
        $products = Product::where('themepage', 2)->where('id', 61)->first();
        $products_gallery = productgallery::where('product_id', $products->id)->get();
        return view('landingpage.threepage', [
            'products'=>$products,
            'products_gallery'=>$products_gallery,
        ]);
    }

    // second theam
    function fashion_order_store(Request $request){
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required',
            'color' => 'required',
            // 'color.*' => 'string',
        ]);

        $lastOrder = Order::orderBy('id', 'desc')->first();
        if ($lastOrder) {
            $lastOrderId = $lastOrder->order_id;
            $lastOrderNumber = intval(substr($lastOrderId, 4));
        } else {
            $lastOrderNumber = 0;
        }
        $newOrderNumber = $lastOrderNumber + 1;
        $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

        $district = ($request->shipping_cost == 60) ? 'Dhaka' : 'Outside Dhaka';

        if($request->radio_btn == 1){
            $color = 'গোলাপী';
            $image =  asset('secondlanding/1.jpg');
        }
        if($request->radio_btn == 2){
            $color = 'ছাই কালার';
            $image =  asset('secondlanding/2.jpg');
        }
        if($request->radio_btn == 3){
            $color = 'বিস্কিট কালার';
            $image =  asset('secondlanding/3.jpg');
        }
        if($request->radio_btn == 4){
            $color = 'মিষ্টি কালার';
            $image =  asset('secondlanding/4.jpg');
        }
        Billingdetails::insert([
            'order_id' => $order_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'district' => $district,
            'note' => $request->note,
            'created_at' => Carbon::now(),
        ]);

        $price = $request->price;

        $subtotal = $price * $request->quantity;

        Order::insert([
            'order_id' => $order_id,
            'sub_total' => $subtotal,
            'delivery_charge' => $request->shipping_cost,
            'total' => $subtotal + $request->shipping_cost,
            'color' => $color,
            'landing' => 2,
            'image' => $image,
            'created_at' => Carbon::now(),
        ]);

        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'attribute_id' => $request->attribute_id,
            'inventory_id' => $request->inventory_id,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Order Confirm Successfully');
    }
     // fashion_product
     function foreth_product(){
        $products = Product::where('themepage', 2)->where('id', 62)->first();
        $products_gallery = productgallery::where('product_id', $products->id)->get();
        return view('landingpage.threepage', [
            'products'=>$products,
            'products_gallery'=>$products_gallery,
        ]);
    }

    // second theam
    function foreth_order_store(Request $request){
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required',
            'color' => 'required',
            // 'color.*' => 'string',
        ]);

        $lastOrder = Order::orderBy('id', 'desc')->first();
        if ($lastOrder) {
            $lastOrderId = $lastOrder->order_id;
            $lastOrderNumber = intval(substr($lastOrderId, 4));
        } else {
            $lastOrderNumber = 0;
        }
        $newOrderNumber = $lastOrderNumber + 1;
        $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

        $district = ($request->shipping_cost == 60) ? 'Dhaka' : 'Outside Dhaka';

        if($request->radio_btn == 1){
            $color = 'গোলাপী';
            $image =  asset('secondlanding/1.jpg');
        }
        if($request->radio_btn == 2){
            $color = 'ছাই কালার';
            $image =  asset('secondlanding/2.jpg');
        }
        if($request->radio_btn == 3){
            $color = 'বিস্কিট কালার';
            $image =  asset('secondlanding/3.jpg');
        }
        if($request->radio_btn == 4){
            $color = 'মিষ্টি কালার';
            $image =  asset('secondlanding/4.jpg');
        }
        Billingdetails::insert([
            'order_id' => $order_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'district' => $district,
            'note' => $request->note,
            'created_at' => Carbon::now(),
        ]);

        $price = $request->price;

        $subtotal = $price * $request->quantity;

        Order::insert([
            'order_id' => $order_id,
            'sub_total' => $subtotal,
            'delivery_charge' => $request->shipping_cost,
            'total' => $subtotal + $request->shipping_cost,
            'color' => $color,
            'landing' => 2,
            'image' => $image,
            'created_at' => Carbon::now(),
        ]);

        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'attribute_id' => $request->attribute_id,
            'inventory_id' => $request->inventory_id,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Order Confirm Successfully');
    }

}
