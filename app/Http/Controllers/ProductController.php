<?php

namespace App\Http\Controllers;

use App\Product;
use App\Image;
use App\Country;
use App\Deal;
use Illuminate\Http\Request;
// use App\Http\Resources\Product as ProductResource;
use App\Http\Requests\StoreProducts;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use DB;
use File;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with(['Owner','Category','Brand','Type','Country'])->orderBy('created_at','desc')->paginate(20);

        return view('admin.products',compact('products'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function waitApprove()
    {
        $products=Product::where('approved',0)->with(['Owner','Category','Brand','Type','Country'])->orderBy('created_at','desc')->paginate(20);

        return view('admin.products_waitApprove',compact('products'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approved()
    {
        $products=Product::where('approved',1)->with(['Owner','Category','Brand','Type','Country'])->orderBy('created_at','desc')->paginate(20);

        return view('admin.products_approved',compact('products'));

    }
    /**
     * Approv a specified of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approv(Product $product)
    {

        $product->approved=1;
        $product->update();
        return response()->json([

          'success'=>'one product approved.',

      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $Country=Country::get();
        return view('addAD',compact('Country'));
    }

    /**
     * Store a newly created resource in storage.
     * StoreProduct
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts $request)
    {

      $lang=\Config::get('app.locale');
      $request->request->add(['user_id' =>auth()->user()->id]);
      $request->request->add(['name_'.$lang =>$request->name]);

       ($request->negotiable=='yes') ? $request->request->add(['negotiable' => '1']) : $request->request->add(['negotiable' => '0']) ;

       if ($request->status=='no') {
                $request->request->add(['status_en' => 'new']);
                $request->request->add(['status_ar' => 'جديد']);
                $request->request->add(['status_tr' => 'yeni']);
       }else {
                 $request->request->add(['status_en' => 'applied']);
                 $request->request->add(['status_ar' => 'مستعمل']);
                 $request->request->add(['status_tr' => 'kullanılmış']);
       }
      $request->request->add(['description_'.$lang =>$request->description]);

      $Product= Product::create($request->all());
      Deal::create([
        'urgently_kind'=> $Product->urgently_kind,
        'end_date'=> $Product->expiry_date,
        'product_id'=> $Product->id
      ]);

      foreach ($request->upload_file as $image) {
         Image::create([
          'image'=> $image,
          'product_id'=> $Product->id
        ]);

      }
      DB::beginTransaction();
      try
         {


         //
         //  $Product= Product::create($request->all());
         //
         //  //
         // //  Image::create([
         // //   'image'=> $request->images,
         // //   'product_id'=> $Product->id
         // // ]);
         //  foreach ($request->upload_file as $image) {
         //     Image::create([
         //      'image'=> $image,
         //      'product_id'=> $Product->id
         //    ]);
         //
         //  }
         //

         DB::commit();

   return redirect()->route('products')->with('success', 'You have just add one Advertising');


        } catch (\Exception $e) {

          DB::rollBack();
            return back()->with('failed', ' Advertising Not saved.');

        }






       }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $now = Carbon::now();

      $Country=Country::get();
      $Deal=Deal::where([['product_id',$product->id],['end_date','>',$now]])->get();
      if ($product->user_id=\Auth::user()->id) {
        // code...$product
        return view('editAD',compact('Country','product','Deal'));
      }
      return view('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {


      if($product->update($request->all())){

        return response()->json([
          'success'=>true,
          'message'=>'You have just update one Product.',
          'data'=> $product
      ]);
      }else {
        return response()->json([
          'success'=>false,
          'message'=>'one Product Not saved.',

      ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {

      $Products=Product::find($product);


      if ( ! is_null($Products)){
        $image_path = $Products->image;
        $Products->delete();
      //  Storage::delete('file.txt');

      if(File::exists($image_path)) {
          File::delete($image_path);
      }

      $images=Image::where('product_id',$Products->id)->get();

      foreach ($images as $image) {
        $image_path = $image->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
      }
           return response()->json([

             'success'=>'one Product Deleted.',

         ]);
      }else {
        return response()->json([

          'failed'=>'Product Not Found.',

      ]);
      }



    }
}
