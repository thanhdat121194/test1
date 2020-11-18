<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Woocomerce;

class woocomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Woocomerce $woocomerce)
    {
        // $websites = Woocommerce::all();
        $woocomerce = Woocomerce::all();
        return view('website.index',compact('woocomerce'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $woo = new  Woocomerce;
        $woo->name=  $request->input('name');
        $woo->url= $request->input('url');
        $woo->consumer_key= $request->input('key');
        $woo->consumer_secret=  $request->input('secret');
    //    dd($request->all());
        $woo->save($request->all());
      
        return redirect("/website");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Woocomerce  $woocomerce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Woocomerce  $woocomerce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $woocomerce = \App\Models\Woocomerce::find($id);
        

        return view('website.edit',compact('woocomerce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Woocomerce  $woocomerce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $woo = new  Woocomerce;
        // $woo->name=  $request->input('name');
        // $woo->url= $request->input('url');
        // $woo->consumer_key= $request->input('key');
        // $woo->consumer_secret=  $request->input('secret');

        
        $woocomerce = \App\Models\Woocomerce::find($id);
        // $woocomerce->update([
        //     'url' => $request->url,
        //      'consumer_key' => $request->key,
        //       'consumer_secret' => $request->secret,
        //       'name' => $request->name]);
        // dd($woocomerce);
        $woocomerce->update($request->all());
        return redirect("/website");
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Woocomerce  $woocomerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Woocomerce $woocomerce)
    {
        //
    }
}
