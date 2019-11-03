<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product_purchase_details;

class Product_purchase extends Model
{
     public function productName($id){
        $purchase = Product_purchase_details::where('product_id',$id)->get();
        
        return $purchase;
        
    }
}
