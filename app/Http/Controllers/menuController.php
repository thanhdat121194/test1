<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Automattic\WooCommerce\Client;
use App\Models\Woocomerce;
use App\Models\Menu;


class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store =  Woocomerce::all();
        // dd($store);
        return view('menu.index',compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $woocomerce =  \App\Models\Woocomerce::all();;
      
        foreach($woocomerce as $web){
            $woo = new Client(
                $web->url,
                $web->consumer_key,
                $web->consumer_secret,
                [
                    'wp_api' => true,
                    'version' => 'wc/v3',
                    'query_string_auth' => true 
                ]
            );
            $products  = $woo->get('products');
    
            foreach($products as $product){
                
                $menu =  new menu();
                
                $menu->product_id = $product->id;
                $menu->name = $product->name;
                $menu->price = $product->price;
                $menu->content = strip_tags($product->description);
                $menu->type = $product->type;
                $menu->product_parent_id = $product->parent_id;
                $menu->created_at = $product->date_created;
                $menu->updated_at = $product->date_modified;  
                // $menu->website_id = $website->id; 
                $menu->save();
              
            }
        }
        return view('menu.edit',compact('store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $woocomerce = \App\Models\Woocomerce::find($id);
        // dd($woocomerce);
        $menu = \App\Models\menu::all();
      
        return view('menu.edit',compact('menu','woocomerce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
