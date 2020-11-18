<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Automattic\WooCommerce\Client;

class Woocomerce extends Model
{
    use HasFactory;
    // protected $fillable = ['url','consumer_key','consumer_secret', 'name'];
    protected $guarded = [];
    
    public function getkeystore(){
        
        $woocommerce = new Client(
            $this->url,
            $this->consumer_key,
            $this->consumer_secret,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true 
            ]
        );
    }
    // public static function getDetail($id){
    //     $woo = Woocommerce::where('id',$id)->get();
    //     return $woo;
    // }

 



}
