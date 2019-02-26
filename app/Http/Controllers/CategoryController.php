<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;
use App\Http\Requests\UpdateCategory;

class CategoryController extends Controller
{

  public function __construct()
  {
      $this->middleware('isAdmin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories= Category::all();
       $parint_categories=Category::where('parent_id',null)->get();
        return  view('admin.categories',compact('categories','parint_categories'));
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {

      if($category=Category::create($request->all())){

         return redirect()->route('Category')->with('success', 'You have just add one Category');
      }else {
          return back()->with('failed', 'one Category Not saved.');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, Category $category)
    {
      if($category->update($request->all())){

         return redirect()->route('Category')->with('success', 'You have just update one Category');
      }else {
          return back()->with('failed', 'one Category Not saved.');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
          $Category=Category::find($request->id);
        if (! $Category) {
          return back()->with('failed', 'Category  Not deleted.');
        }else {
          $Category->delete();
          return back()->with('success', 'You have just delete one Category');
        }
    }
}
