<?php

namespace App\Http\Controllers;

use App\brand;
use App\Category;
use App\brand_category;
use App\Http\Requests\StoreBrand;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=brand::with('Category')->get();

        $categories= Category::all();
        return view('admin.brands',compact('brands','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *StoreBrand
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrand $request)
    {

        $category=$request->category_id;

        DB::beginTransaction();

        try {
          $brand =brand::create($request->all());

          for ($i=0; $i <count($category) ; $i++) {
            $k=brand_category::create([
              'category_id'=>$category[$i],
              'brand_id'=>$brand->id
            ]);
          }
           DB::commit();
          return redirect()->route('Brand')->with('success', 'You have just add one brand');
            // all good
        } catch (\Exception $e) {
            DB::rollback();
           return back()->with('failed', 'one brand Not saved.');

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($item)
    {
      $categories= Category::all();
      $item=brand::where('id',$item)->with('Category')->first();
      return view('admin.brandsEdit',compact('item','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBrand $request, brand $brand)
    {
      $category=$request->category_id;
   
      DB::beginTransaction();

      try {
        $brand->update($request->all());

        // for ($i=0; $i <count($category) ; $i++) {
        //   $k=brand_category::create([
        //     'category_id'=>$category[$i],
        //     'brand_id'=>$brand->id
        //   ]);
        // }
        $brand->Category()->sync($category);
         DB::commit();
        return redirect()->route('Brand')->with('success', 'You have just update one brand');
          // all good
      } catch (\Exception $e) {
          DB::rollback();
         return back()->with('failed', 'one brand Not saved.');

      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $brand=brand::find($request->id);
        if (! $brand) {
          return back()->with('failed', 'brand  Not deleted.');
        }else {
          $brand->delete();
          return back()->with('success', 'You have just delete one brand');
        }
    }
}
