<?php

namespace App\Observers;

use App\Product;

class ProductObserver
{
    /**
     * Listen to the Product created event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
      $lang=\Lang::getLocale();

      switch ($lang) {
    case "en":
               $product->name_ar = ($product->type) ?  $product->brand->name_ar .' '.$product->type->name_ar : $product->brand->name_ar ;
               $product->name_tr =  ($product->type) ? $product->brand->name_tr.' '.$product->type->name_tr :$product->brand->name_tr ;

               $product->description_ar = ($product->type) ?  $product->brand->name_ar .' '.$product->type->name_ar.' '. $product->status_ar: $product->brand->name_ar.' '. $product->status_ar;
               $product->description_tr =  ($product->type) ? $product->brand->name_tr.' '.$product->type->name_tr .' '. $product->status_tr :$product->brand->name_tr.' '. $product->status_tr;
        break;
    case "ar":
              $product->name_en =  ($product->type()) ? $product->brand->name_en.' '.$product->type->name_en : $product->brand->name_en ;
              $product->name_tr =  ($product->type()) ? $product->brand->name_tr.' '.$product->type->name_tr : $product->brand->name_tr ;

              $product->description_en =  ($product->type()) ? $product->brand->name_en.' '.$product->type->name_en.' '. $product->status_en : $product->brand->name_en.' '. $product->status_en;
              $product->description_tr =  ($product->type()) ? $product->brand->name_tr.' '.$product->type->name_tr.' '. $product->status_tr : $product->brand->name_tr.' '. $product->status_tr;

        break;
    case "tr":
              $product->name_en =  ($product->type()) ? $product->brand->name_en.' '.$product->type->name_en : $product->brand->name_en ;
              $product->name_ar =  ($product->type()) ? $product->brand->name_ar.' '.$product->type->name_ar : $product->brand->name_ar;

              $product->description_en =  ($product->type()) ? $product->brand->name_en.' '.$product->type->name_en.' '. $product->status_en : $product->brand->name_en.' '. $product->status_en;
              $product->description_ar =  ($product->type()) ? $product->brand->name_ar.' '.$product->type->name_ar.' '. $product->status_ar : $product->brand->name_ar.' '. $product->status_ar;

        break;


        }

          $product->save();
    }

    /**
     * Listen to the Product deleting event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleting(Product $product)
    {
        //
    }
}
